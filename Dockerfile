FROM php:5.6

# PHP extensions

RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql
