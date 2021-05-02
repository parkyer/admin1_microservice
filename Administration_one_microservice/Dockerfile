FROM php:7.4.3-apache
RUN apt-get update \
    && apt-get install sudo \
    && apt-get install -y libpq-dev wget git unzip zip \
    && docker-php-ext-install pdo pdo_pgsql \
    && apt-get clean \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
WORKDIR /app
COPY . /app
RUN composer install
CMD php artisan serve --host=0.0.0.0 --port=4194
EXPOSE 4194