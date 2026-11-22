FROM composer:2 AS builder

WORKDIR /app

RUN composer create-project laravel/laravel /app "^12.0" \
    --prefer-dist \
    --no-interaction

COPY . /app/

RUN composer require league/flysystem-aws-s3-v3:^3.0 \
    --no-interaction \
    --no-dev \
    --with-all-dependencies \
    && composer install --optimize-autoloader --no-dev --no-interaction

FROM php:8.3-apache

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        libcurl4-openssl-dev \
        libonig-dev \
        libpq-dev \
        libzip-dev \
        unzip \
    && docker-php-ext-install curl mbstring pdo_pgsql zip \
    && a2enmod rewrite \
    && sed -ri 's!Listen 80!Listen 8080!' /etc/apache2/ports.conf \
    && sed -ri 's!<VirtualHost \*:80>!<VirtualHost *:8080>!' \
        /etc/apache2/sites-available/000-default.conf \
    && sed -ri 's!/var/www/html$!/var/www/html/public!' \
        /etc/apache2/sites-available/000-default.conf \
    && rm -rf /var/lib/apt/lists/*

COPY --from=builder --chown=www-data:www-data /app /var/www/html
COPY --chmod=755 docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh

WORKDIR /var/www/html

EXPOSE 8080

ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]
