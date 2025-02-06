FROM php:8.2-apache
RUN docker-php-ext-install pdo pdo_mysql mysqli pgsql pdo_pgsql && docker-php-ext-enable pdo_mysql mysqli pgsql pdo_pgsql && a2enmod rewrite && \
    apachectl restart
RUN docker-php-ext-enable mysqli
