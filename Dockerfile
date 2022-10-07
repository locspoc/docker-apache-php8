FROM php:8.1.10-apache
COPY src/ /var/www/html/ 
EXPOSE 80
RUN docker-php-source extract \
	docker-php-ext-install mysql \
	&& docker-php-source delete