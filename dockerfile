FROM php:7-apache
LABEL email="narek.shakaryan@gmail.com"
LABEL creator="Narel Shakaryan"

COPY index.php /var/www/

CMD ["start-apache"]
