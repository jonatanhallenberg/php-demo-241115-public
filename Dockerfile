FROM php:7.4-apache

# Installera mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
# RUN docker-php-ext-install pdo_mysql && docker-php-ext-enable pdo_mysql

COPY src/ /var/www/html/