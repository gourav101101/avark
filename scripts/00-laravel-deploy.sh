#!/bin/sh

# Make sure SQLite database exists
echo "Creating database file..."
touch /var/www/html/database/database.sqlite

# Run migrations
echo "Running migrations..."
php /var/www/html/artisan migrate --force

# Cache Laravel config & routes for performance
echo "Caching config and routes..."
php /var/www/html/artisan config:cache
php /var/www/html/artisan route:cache
php /var/www/html/artisan view:cache
