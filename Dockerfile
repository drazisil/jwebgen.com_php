FROM php:7.2-apache

ENV APACHE_DOCUMENT_ROOT /var/www/site/

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# enable mod_rewrite
RUN a2enmod rewrite

COPY src/ /var/www/site/

# Copy Smarty into place.
ADD Smarty /var/www/Smarty

# fix permissions
RUN chmod -R +777 /var/www/site/smarty/templates_c

# Update the default apache site with the config we created.
# ADD apache-config.conf /etc/apache2/sites-enabled/000-default.conf

