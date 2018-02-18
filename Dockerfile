FROM php:7-fpm

RUN apt-get update && apt-get install -y libmcrypt-dev build-essential \
	mysql-client --no-install-recommends \
	&& docker-php-ext-install pdo_mysql

RUN cd \
	&& php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
	&& php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
	&& php -r "unlink('composer-setup.php');" \
