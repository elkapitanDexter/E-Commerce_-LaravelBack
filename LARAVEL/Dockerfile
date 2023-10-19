# Use an official PHP runtime as a parent image
FROM php:8.1.17-cli

# Set the working directory in the container
WORKDIR /laravel

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the Laravel application code to the container
COPY . .

# Install Laravel dependencies
RUN composer install

# Expose a port (if necessary, like for Nginx)
EXPOSE 8000

# Start the PHP-FPM server
CMD php artisan serve --host=0.0.0.0 --port=8000
