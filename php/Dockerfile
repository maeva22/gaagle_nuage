FROM php:8.2-apache
RUN  apt-get update 
RUN  apt-get upgrade -y 
RUN  apt install libpq5 
RUN  apt install libpq-dev 
RUN  apt-get -y update \
    &&  apt-get install -y libicu-dev \
    &&  docker-php-ext-configure intl \
    &&  docker-php-ext-install intl
RUN docker-php-ext-install pdo_mysql mysqli pgsql pdo_pgsql && docker-php-ext-enable pdo_mysql mysqli pgsql pdo_pgsql && a2enmod rewrite && \
    apachectl restart
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    php -r "unlink('composer-setup.php');"
CMD [ "php", "gaagle_nuage/spark","serve","--host","0.0.0.0","--port","8000"]
EXPOSE 8000
