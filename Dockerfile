FROM php:8.3-apache

# Installazione dipendenze di sistema, inclusi Node.js e npm per Vite
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libzip-dev \
    libicu-dev \
    zip \
    unzip \
    git \
    curl \
    && curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && rm -rf /var/lib/apt/lists/*

# Configurazione e installazione estensioni PHP
RUN docker-php-ext-configure intl \
    && docker-php-ext-install -j$(nproc) pdo pdo_mysql gd zip bcmath intl

# Forza PHP a mostrare gli errori (per debug)
RUN echo "display_errors = On" >> /usr/local/etc/php/conf.d/docker-php-ext-error.ini && \
    echo "display_startup_errors = On" >> /usr/local/etc/php/conf.d/docker-php-ext-error.ini && \
    echo "error_reporting = E_ALL" >> /usr/local/etc/php/conf.d/docker-php-ext-error.ini

# Installazione di Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copia i file delle dipendenze PHP
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-scripts --verbose

# Copia package.json e package-lock.json per Node
COPY package.json package-lock.json* ./
RUN npm install

# Copia il resto del codice sorgente
COPY . .

# Compilazione degli asset con Vite per generare public/build/manifest.json
RUN npm run build

# Configurazione Apache
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf
RUN a2enmod rewrite

# Permessi corretti
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache && \
    chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache && \
    php artisan storage:link

EXPOSE 80
CMD ["apache2-foreground"]

