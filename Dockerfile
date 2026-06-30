FROM php:8.2-apache

# Installazione dipendenze e abilitazione mod_rewrite
RUN apt-get update && apt-get install -y libpng-dev libzip-dev zip unzip \
    && docker-php-ext-install pdo pdo_mysql gd zip \
    && a2enmod rewrite

# Cambio della DocumentRoot di Apache
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Copia dei file
COPY . /var/www/html

# Permessi corretti
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80