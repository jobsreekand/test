# Use the official pre-configured PHP + Apache image
FROM php:8.2-apache

# Install the MySQL extension required by your index.php script
RUN docker-php-ext-install mysqli

# Copy your code into the standard web root
COPY index.php /var/www/html/
