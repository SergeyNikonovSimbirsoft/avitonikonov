FROM php:7.4-fpm
ENV PHP_VERSION 7.4

RUN apt-get update\
    && apt-get install -y\
    git\
    curl\
    libpng-dev\
    libonig-dev\
    libxml2-dev\
    libpq-dev\
    zip\
    unzip\
    vim\
    nodejs\
    npm\
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install pdo_pgsql mbstring exif pcntl bcmath gd sockets

WORKDIR /var/www
ADD . /var/www
RUN chown -R www-data:www-data /var/www
USER root

CMD composer install\
    && npm install\
    && php artisan key:generate\
    && php artisan migrate \
    && php-fpm
