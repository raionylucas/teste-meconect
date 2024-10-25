FROM php:8.0-apache

RUN docker-php-ext-install pdo pdo_mysql mysqli

COPY /public/index.php /var/www/html/index.php
COPY /app/config /var/www/html/app/config


RUN chown -R www-data:www-data /var/www/html

EXPOSE 80



