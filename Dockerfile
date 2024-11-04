FROM php:8.0-apache
COPY . /var/www/html/
WORKDIR /var/www/html
RUN docker-php-ext-install pdo pdo_mysql
RUN a2enmod rewrite
EXPOSE 80
