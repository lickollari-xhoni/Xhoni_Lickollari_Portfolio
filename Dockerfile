FROM php:8.2-apache

# 1. Installa dipendenze e abilita mod_rewrite
RUN apt-get update && apt-get install -y libpng-dev libzip-dev zip unzip \
    && docker-php-ext-install pdo pdo_mysql gd zip \
    && a2enmod rewrite

# 2. Imposta la DocumentRoot sulla cartella public
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# 3. Abilita AllowOverride per far leggere il file .htaccess di Laravel
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# 4. Copia i file
COPY . /var/www/html

# 5. Permessi
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80