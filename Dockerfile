FROM php:8.3-apache

RUN a2enmod rewrite headers expires deflate \
	&& printf '%s\n' \
		'<Directory /var/www/html>' \
		'    AllowOverride All' \
		'    Require all granted' \
		'</Directory>' \
		> /etc/apache2/conf-available/vh5.conf \
	&& a2enconf vh5

COPY Site_novo/ /var/www/html/
COPY docker/htaccess.local /var/www/html/.htaccess

EXPOSE 80
