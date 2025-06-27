#!/bin/sh
set -e
cd /home/wwwroot/filament-people || exit
chown -R www-data:www-data /home/wwwroot/filament-people && \
find /home/wwwroot/filament-people -type f -exec chmod 644 {} \; && \
find /home/wwwroot/filament-people -type d -exec chmod 755 {} \; && \
chmod -R +x /home/wwwroot/filament-people/vendor/bin/ && \
chmod -R +x /home/wwwroot/filament-people/dev/
