# Dockerfile para Laravel 12 con PHP 8.2 y Vite
FROM php:8.2-cli

# 1) Instala dependencias de SO y Node.js
RUN apt-get update \
 && apt-get install -y git unzip zip libpng-dev libonig-dev curl gnupg \
    ca-certificates \
 && curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
 && apt-get install -y nodejs \
 && rm -rf /var/lib/apt/lists/*

# 2) Instala Composer
RUN curl -sS https://getcomposer.org/installer | php \
 && mv composer.phar /usr/local/bin/composer

WORKDIR /var/www/html

# 3) Copia sólo composer.json / lock e instala deps PHP
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction

# 4) Copia package.json / lock, vite.config y tailwind.config
COPY package.json package-lock.json vite.config.js tailwind.config.js ./
RUN npm ci \
 && npm run build

# 5) Copia el resto del código y ajusta permisos
COPY . .
RUN chown -R www-data:www-data .

# 6) Exponer puerto y comando de arranque
ENV PORT=10000
EXPOSE 10000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
