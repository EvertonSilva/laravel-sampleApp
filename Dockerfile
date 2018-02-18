FROM php:7-fpm

RUN apt-get update && apt-get install -y libmcrypt-dev build-essential \
	mysql-client libmagickwand-dev --no-install-recommends \
	&& pecl install imagick \
	&& docker-php-ext-install pdo_mysql
