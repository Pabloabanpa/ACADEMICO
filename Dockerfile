# 1) Base PHP + FPM
FROM php:8.1-fpm

# 2) Instala dependencias del sistema, Node y Composer
RUN apt-get update \
 && apt-get install -y git unzip zip libpq-dev curl nodejs npm \
 && docker-php-ext-install pdo pdo_pgsql

# 3) Instala Composer
RUN curl -sS https://getcomposer.org/installer | php \
 && mv composer.phar /usr/local/bin/composer

# 4) Copia tu código y compila assets
WORKDIR /var/www/html
COPY . .
RUN composer install --no-dev --optimize-autoloader \
 && npm ci \
 && npm run build \
 && chown -R www-data:www-data .

# 5) Expone el puerto 80 y arranca el servidor incorporado de Laravel
EXPOSE 80
CMD ["php","artisan","serve","--host=0.0.0.0","--port=80"]
