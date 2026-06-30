FROM php:8.2-apache

# Installazione dipendenze di sistema
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_mysql gd zip \
    && a2enmod rewrite

# Installazione di Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Impostazione cartella di lavoro
WORKDIR /var/www/html

# Copia i file di configurazione prima per sfruttare la cache
COPY composer.json composer.lock ./

# Installa le dipendenze (senza i file di sviluppo)
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Copia tutto il resto del codice
COPY . .

# Configurazione Apache
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Permessi
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80