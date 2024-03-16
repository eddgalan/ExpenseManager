FROM php:8-apache
RUN apt-get update && apt-get install -y unzip git
RUN pecl install xdebug && docker-php-ext-enable xdebug
RUN apt update && apt install -y libicu-dev && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install intl \ 
    && docker-php-ext-configure intl \
    && docker-php-ext-install mysqli \
    && docker-php-ext-enable mysqli \
    && apt update
COPY configFiles/000-default.conf /etc/apache2/sites-available/000-default.conf
ENV PHP_INI_FILE php.ini-development
WORKDIR /var/www/html
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer
RUN chown -R :www-data /var/www && chmod -R 775 /var/www/
