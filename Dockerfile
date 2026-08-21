FROM richarvey/nginx-php-fpm:3.1.6
COPY . /var/www/html
WORKDIR /var/www/html
RUN composer install --no-dev
RUN php artisan key:generate --force
RUN chmod -R 777 storage bootstrap/cache
CMD ["/start.sh"]
