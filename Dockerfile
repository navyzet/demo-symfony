FROM php:7.4-fpm-alpine

RUN apk add $PHPIZE_DEPS postgresql-dev && pecl install redis && docker-php-ext-install pdo_pgsql && docker-php-ext-enable redis pdo_pgsql && apk del $PHPIZE_DEPS

WORKDIR /var/www/app/

COPY ./ ./

RUN chown www-data:www-data  -R var/

USER www-data
