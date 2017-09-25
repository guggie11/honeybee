# Dockerfile
FROM php:7.0-apache

RUN apt-get update && apt-get install -y \
        libmcrypt-dev \
        git \
        zlib1g-dev \
        && apt-get clean \
        && rm -rf /var/lib/apt/lists/*

# Basic lumen packages
RUN docker-php-ext-install \
        mcrypt \
        mbstring \
        tokenizer \
        zip

# Run install mysql PDO and enable mode rewrite
RUN docker-php-ext-install pdo_mysql
# RUN a2enmod rewrite

WORKDIR /var/www/html

# Download and Install Composer
RUN curl -s http://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# Add vendor binaries to PATH
ENV PATH=/var/www/html/vendor/bin:$PATH

# Copy apache conf and php.ini conf
COPY ./misc/apache2.conf /etc/apache2/apache2.conf
COPY ./misc/ports.conf /etc/apache2/ports.conf
COPY ./misc/php.ini /usr/local/etc/php/php.ini
COPY ./misc/.env.prod /var/www/html/.env


COPY . /var/www/html
# RUN composer install --prefer-dist --optimize-autoloader --no-scripts --no-dev --profile --ignore-platform-reqs -vvv
RUN composer install

#  Configuring Apache
RUN sed -i 's/export APACHE_RUN_GROUP=www-data/export APACHE_RUN_GROUP=root/g' /etc/apache2/envvars &&\
    rm /etc/apache2/sites-available/000-default.conf &&\
    rm /etc/apache2/sites-enabled/000-default.conf &&\
    chgrp -R root /var/www/html/storage /var/www/html/bootstrap/cache &&\
    chmod -R ug+rwx /var/www/html/storage /var/www/html/bootstrap/cache &&\
    chgrp -R root /var/run/apache2* /var/lock/apache2* &&\
    chmod -R ug+rwx /var/run/apache2* /var/lock/apache2* &&\
    a2enmod rewrite 

COPY laravel-apache2-foreground /usr/local/bin/

RUN chmod +x /usr/local/bin/laravel-apache2-foreground

EXPOSE 8080 8443
CMD ["laravel-apache2-foreground"]

