FROM php:8.3

RUN apt-get update && apt-get install -y --no-install-recommends git zip && rm -rf /var/lib/apt/lists/* && \
    pecl install -o -f xdebug && docker-php-ext-enable xdebug && \
    curl https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer

WORKDIR /srv/workshop-ipc25-munich/refactoring/tennis

CMD ["sh", "-c", "composer install --no-interaction && composer test"]
