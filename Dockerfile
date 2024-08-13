FROM php:8.3.10-fpm-alpine

RUN apk add --update && docker-php-ext-install pdo_mysql

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && mv composer.phar /usr/local/bin/composer

WORKDIR /app

COPY ./src /app

RUN set -ex && composer install --no-scripts
