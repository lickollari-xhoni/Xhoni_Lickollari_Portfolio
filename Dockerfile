FROM php:8.3-apache

# Installazione dipendenze di sistema
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libzip-dev \
    libicu-dev \
    zip \
    unzip \
    git \
    && rm -rf /var/lib/apt/lists/*

# Configurazione e installazione estensioni
RUN docker-php-ext-configure intl \
    && docker-php-ext-install -j$(nproc) pdo pdo_mysql gd zip bcmath intl

# Forza PHP a mostrare gli errori (per debug)
RUN echo "display_errors = On" >> /usr/local/etc/php/conf.d/docker-php-ext-error.ini && \
    echo "display_startup_errors = On" >> /usr/local/etc/php/conf.d/docker-php-ext-error.ini && \
    echo "error_reporting = E_ALL" >> /usr/local/etc/php/conf.d/docker-php-ext-error.ini

# Installazione di Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copia file dipendenze e installa
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-scripts --verbose

# Copia il resto del codice
COPY . .

# Configurazione Apache
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf
RUN a2enmod rewrite

# Permessi corretti (IMPORTANTE: eseguiti prima di avviare)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80
# Comando di avvio standard di Apache
CMD ["apache2-foreground"]