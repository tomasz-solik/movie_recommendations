# Light version only for cli
FROM php:8.2-fpm

# PHP ext
RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        libcurl4-gnutls-dev && \
    apt-get clean

RUN docker-php-ext-install zip curl

# Optional opcache & xdebug
#RUN pecl install opcache xdebug && \
#    docker-php-ext-enable opcache xdebug

# Composer 2
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

# php.ini
COPY php.ini /usr/local/etc/php/

WORKDIR /var/www/html

CMD ["php-fpm"]
