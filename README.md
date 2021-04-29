## Made with....

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>



## Instructions:

- Clone the repo: https://github.com/Porcar/userCRUD.git
- Go to the repository directory and do the following console commands:
- $composer install
- $php artisan key:generate
- $cp .env.example .env
- Edit .env file according to your database: DB_DATABASE=usercrud
- create a DB named: "usercrud"
- $php artisan migrate
- If you want to create dummy users do the following:
- $php artisan tinker
    - $users = factory(App\User::class, 20)->create();
    - $exit

