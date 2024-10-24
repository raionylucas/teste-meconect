FROM php:8.0-apache

RUN docker-php-ext-install pdo pdo_mysql mysqli

COPY /public /var/www/html
COPY /app /var/www/html/app

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80



