FROM php:8.2-apache

# Installazione estensioni di sistema
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_mysql gd zip bcmath intl

# Installazione di Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copia file di dipendenza e installa
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-scripts --verbose

# Copia il resto del codice
COPY . .

# Configurazione Apache: punta alla cartella public
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf
RUN a2enmod rewrite

# Permessi
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Esposizione porta e avvio di Apache
EXPOSE 80
CMD ["apache2-foreground"]