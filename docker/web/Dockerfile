FROM php:5.6-apache
RUN apt-get update && \
    apt-get install -y libpq-dev nano && \
    docker-php-ext-install pdo_pgsql && \
    a2enmod rewrite

VOLUME /usr/src/myapp
RUN rm -rf /var/www/html && ln -s /usr/src/myapp/www /var/www/html
WORKDIR /var/www/html
