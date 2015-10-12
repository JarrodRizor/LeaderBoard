# LeaderBoard

## Welcome

LeaderBoard is open-source software that was built for the Ohio Game Developer Expo to help keep track of users and the
scores they would receive in their games. It is built off the [Laravel 5.1 Framework](http://laravel.com/docs/5.1).
Feel free to download and do as you please.


## Requirements
1. Git
2. PHP
3. Composer

## Install

1. Move into directory

        cd LeaderBoard

2. Run Composer to install vendor directory and libraries

        composer install

3. create environment file

        cp .env.example .env

4. Create Key

        php artisan key:generate

5. Create Database

    1. Create the database sqlite file

            echo "" > storage/database.sqlite

    2. This will install tables

            php artisan migrate

6. Run on PHP

        php -S localhost:8888 -t public (make sure you are in the root of the LeaderBoard application)

7. Enjoy!

### License

LeaderBoard is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
Do what you want and have fun.
