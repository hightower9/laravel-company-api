<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Laravel REST API

This is a Laravel 9 REST API. 

To use this API follow the steps below.

- Run `git clone git@github.com:hightower9/laravel-company-api.git` for **SSH** *or* `git clone https://github.com/hightower9/laravel-company-api.git` for **HTTPS**.
- `cd laravel-company-api` into the folder in terminal or command line.
- `composer install`.
- `cp .env.example .env`.
- `php artisan key:generate`.
- Create a database of your choice (MySql, Sqlite, etc.) and add the details in the .env file just created.
- Now run `php artisan migrate`.
- To seed some fake data in the database run `php artisan db:seed`.
- `php artisan serve`.
- Now run the endpoint `localhost:8000/api/companies` in Postman(Recommended) or Browser.
- Enjoy with learning new things.