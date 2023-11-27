# Use an official PHP runtime as the base image
FROM php:8.2-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the PHP application files to the container
COPY . /var/www/html

# Install any necessary dependencies or extensions (if needed)
# For example, if you require additional PHP extensions like mysqli or pdo_mysql:
# RUN docker-php-ext-install mysqli pdo_mysql

# Expose port 80 for web traffic
EXPOSE 80

# Start Apache server when the container launches
CMD ["apache2-foreground"]
