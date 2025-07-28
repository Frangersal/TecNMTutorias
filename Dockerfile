FROM php:8.2-apache

# Instala dependencias necesarias
RUN apt-get update && apt-get install -y \
    git unzip zip libzip-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Habilita mod_rewrite de Apache
RUN a2enmod rewrite

# Copia los archivos del proyecto
COPY . /var/www/html/

# Establece el directorio de trabajo
WORKDIR /var/www/html/

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instala dependencias del proyecto
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Copia el archivo .env si no está
RUN cp .env.example .env || true

# Genera APP_KEY
RUN php artisan key:generate

# Permisos
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Puerto para Railway
EXPOSE 80
