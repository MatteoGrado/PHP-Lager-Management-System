# Use the official PHP Apache image with PHP 8.3
FROM php:8.3-apache

# Copy your PHP application files into the container
COPY ./src/ /var/www/html/

# Expose port 80 to the outside world
EXPOSE 80