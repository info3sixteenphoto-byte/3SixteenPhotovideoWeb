#!/bin/sh

set -eu

mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views
chown -R www-data:www-data storage bootstrap/cache

php artisan config:cache
php artisan migrate --force
php artisan route:cache
php artisan view:cache

exec "$@"
