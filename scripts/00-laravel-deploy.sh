#!/usr/bin/env bash

# Make sure SQLite database exists
echo "Creating database file..."
touch database/database.sqlite

# Run migrations
echo "Running migrations..."
php artisan migrate --force

# Cache Laravel config & routes for performance
echo "Caching config and routes..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
