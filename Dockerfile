FROM php:8.2-fpm

COPY . /var/www/html
WORKDIR /var/www/html

ENV PORT=8000
ENV APP_ENV=production
ENV APP_DEBUG=false

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install --no-dev --optimize-autoloader

RUN chmod -R 775 storage bootstrap/cache
RUN php artisan config:clear
RUN php artisan route:clear
RUN php artisan view:clear

EXPOSE 8000

CMD php artisan serve --host 0.0.0.0 --port $PORT
