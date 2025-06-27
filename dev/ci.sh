#!/bin/bash
set -e

/home/wwwroot/filament-people/vendor/bin/pest
/home/wwwroot/filament-people/vendor/bin/pint
/home/wwwroot/filament-people/vendor/bin/phpstan analyse
