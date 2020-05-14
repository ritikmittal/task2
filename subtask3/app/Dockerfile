FROM php:7.4-apache
RUN apt-get update
RUN docker-php-ext-install mysqli
RUN apt-get install default-mysql-client -y
RUN mkdir /complaint
EXPOSE 80
COPY ./inde* /var/www/html/
