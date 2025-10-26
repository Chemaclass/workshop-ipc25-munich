FROM php:8.3

RUN apt-get update && apt-get install -y git zip && rm -rf /var/lib/apt/lists/*
RUN pecl install -o -f xdebug && docker-php-ext-enable xdebug
RUN curl https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer

WORKDIR /srv/workshop-ipc25-munich/refactoring/parrot

CMD ["sh", "-c", "composer install --no-interaction && composer test"]