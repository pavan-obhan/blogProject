<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About blogProject

blogProject is a Laravel-based web application designed for creating and managing blog posts. It requires PHP 8 and MySQL to be installed on your system.

## Installation

To install blogProject on your system, follow these steps:

1. Clone the repository to your local machine:


2. Change into the project directory:

cd blogProject


3. Install the required dependencies using Composer:

composer install


4. Create a new .env file:

cp .env.example .env


5. Generate a new application key:

php artisan key:generate


6. Update the .env file with your database credentials:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password


7. Migrate the database:

php artisan migrate


8. Serve the application:

php artisan serve

9. Access the application in your web browser at http://localhost:8000.

