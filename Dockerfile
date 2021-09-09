FROM php:7.1-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql
COPY ./app /var/www/html
EXPOSE 80
