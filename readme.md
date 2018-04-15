# Rest Coding Task

[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

## Requirements
- PHP >= 7.0
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Sqlite3

## Setup

1. Clone the Github-Project: ```git clone https://github.com/Hokan22/rest-example.git```
2. Go into the project folder ```cd rest-example```
2. Setup the Composer Project: ```composer install```
    1. Get Composer: https://getcomposer.org/download/
2. Copy ```env.example``` to ```.env```
    1. Optional: Set ```APP_KEY``` to a random string
3. Create the Database
    1. Create sqlite file ```touch database/database.sqlite```
    2. Create the database tables ```php artisan migrate```
    3. Populate the database with example data ```php artisan db:seed```
4. Start the application ```php -S localhost:8000 -t public```
5. Go to ```localhost:8000/api/candidate``` to get a json with all generated candidates

## License

The project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

## Made with Laravel Lumen

[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

### License

The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
