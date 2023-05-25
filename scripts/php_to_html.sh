#!/bin/bash

#This script converts all php files to html files in the execution directory

# Find all PHP files
php_files=$(find . -type f -name "*.php")

# Iterate over each PHP file
for php_file in $php_files; do
    html_file="${php_file%.php}.html"

    # Compile PHP to HTML using PHP's built-in server
    php -f "$php_file" > "$html_file"

    echo "Compiled $php_file to $html_file"
done

echo "Compilation complete!"

