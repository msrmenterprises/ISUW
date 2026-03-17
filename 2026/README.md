To Setup this code

Create DB name isuw maynnually by logging in phpmyadmin ensure the collation type is utf_8_general_ci

composer update OR composer install

php artisan key:generate

php artisan migrate --seed

php artisan serve