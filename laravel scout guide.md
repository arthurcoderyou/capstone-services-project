# get scout
composer required laravel/scout

# publish resources
php artisan vendor:publish --provider="Laravel\Scout\ScoutServiceProvider"

# add this on env
SCOUT_DRIVER=database


