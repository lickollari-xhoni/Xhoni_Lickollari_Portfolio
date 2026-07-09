FROM php:8.2-apache

# Installazione dipendenze di sistema (inclusa libicu-dev)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libzip-dev \
    libicu-dev \
    zip \
    unzip \
    git \
    && rm -rf /var/lib/apt/lists/*

# Configurazione e installazione estensioni
# Questa sintassi è più stabile per intl
RUN docker-php-ext-configure intl \
    && docker-php-ext-install -j$(nproc) pdo pdo_mysql gd zip bcmath intl

# Installazione di Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copia solo composer.json/lock per sfruttare la cache di Docker
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-scripts --verbose

# Copia il resto del codice
COPY . .

# Configurazione Apache
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf
RUN a2enmod rewrite

# Permessi corretti
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80
CMD ["apache2-foreground"]