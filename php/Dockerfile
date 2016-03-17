FROM php:5.6-fpm
# Install modules

ADD php.ini    /usr/local/etc/php/php.ini
#ADD php-fpm.conf    /usr/local/etc/php-fpm.conf

RUN docker-php-ext-install pdo_mysql

CMD ["php-fpm"]
