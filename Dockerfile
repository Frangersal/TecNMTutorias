FROM php:8.2-apache

# Instala dependencias necesarias
RUN apt-get update && apt-get install -y \
    git unzip zip libzip-dev libonig-dev libxml2-dev curl \
    && docker-php-ext-install pdo pdo_mysql zip

# Instala Composer manualmente
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
 && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
 && php -r "unlink('composer-setup.php');"

# Habilita mod_rewrite de Apache
RUN a2enmod rewrite

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Copia archivos del proyecto
COPY . /var/www/html

# Instala dependencias del proyecto
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Copia .env.production a .env
COPY .env.production .env

# Genera clave de la app
RUN php artisan key:generate || true

# Ajusta permisos
RUN chown -R www-data:www-data storage bootstrap/cache

# Configura Apache para servir desde /public
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Expone puerto
EXPOSE 80

# Usa Apache
CMD ["apache2-foreground"]
