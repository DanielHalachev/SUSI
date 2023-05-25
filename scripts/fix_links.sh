#!/bin/bash

# This Bash script replaces ".php" with ".html" in all HTML files, thus fixing the links

# Iterate over every HTML file in the current directory
for file in *.html; do
    # Check if the file is a regular file
    if [[ -f $file ]]; then
        # Replace ".php" with ".html" in the file using sed
        sed -i 's/\.php/\.html/g' "$file"
        echo "Updated $file"
    fi
done

