FROM php:8.2-apache
ARG user
ARG uid
ARG project_name
ENV project_name ${project_name}

COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN apt-get update && apt-get -y install libzip-dev libicu-dev
RUN docker-php-ext-install pdo pdo_mysql mysqli zip intl
RUN chmod -R 777 /var/www/html

RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

RUN a2enmod rewrite
EXPOSE 8000/tcp
WORKDIR /var/www/html
USER $user
CMD bash docker/startup.sh