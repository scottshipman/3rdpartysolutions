FROM php:7.2-apache

LABEL Author="Scott"

ENV APACHE_LOG_DIR /var/log

RUN curl -sL https://deb.nodesource.com/setup_18.x | bash - &&\
    apt-get update &&\
    apt-get install --no-install-recommends -y apt-utils &&\
    apt-get install --no-install-recommends -y nodejs git unzip zip \
    libicu-dev libzip-dev libfreetype6-dev libjpeg62-turbo-dev libpng-dev zlib1g-dev &&\
    docker-php-ext-configure gd &&\
    docker-php-ext-configure zip &&\
    docker-php-ext-configure pdo_mysql &&\
    docker-php-ext-install bcmath pdo_mysql opcache intl zip gd &&\
    pecl install -o -f igbinary &&\
    pecl install -o -f xdebug-3.1.6 &&\
    docker-php-ext-enable igbinary opcache xdebug &&\
    a2enmod rewrite &&\
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer &&\
    rm -rf /tmp/pear &&\
    apt-get autoremove -y &&\
    apt-get autoclean -y

COPY docker/vhost.conf $APACHE_CONFDIR/sites-available/000-default.conf
COPY docker/php.ini $PHP_INI_DIR/
COPY docker/xdebug.ini $PHP_INI_DIR/conf.d/

WORKDIR /srv/app
