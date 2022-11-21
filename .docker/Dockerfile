FROM php:8.1-apache

RUN  echo "    IdentityFile ~/.ssh/id_rsa" >> /etc/ssh/ssh_config
RUN apt-get update 
RUN apt-get install libpq-dev -y 
RUN docker-php-ext-install pdo_pgsql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
