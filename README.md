<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About installation
```bash
cd your_parent_folder

composer create-project --prefer-dist laravel/laravel:^9.2 your_project_name_here

cd your_project_name 

code . -r or open it from folder

php artisan serve per aprire il server

ctrl + c per chiudere il server


```

## laravel configuration
```bash

composer require pacificdev/laravel_9_preset
php artisan preset:ui bootstrap
npm install
npm install --save @fortawesome/fontawesome-free
nel file vite.config.js aggiungo la linea '~@fortawesome': path.resolve(__dirname, 'node_modules/@fortawesome'),
aggiungere in cima ad app.scss in css $fa-font-path: "../fonts/font-awesome" !default;
e poi aggiungere subito sotto 

@import "~@fortawesome/fontawesome-free/scss/fontawesome";
@import "~@fortawesome/fontawesome-free/scss/regular";
@import "~@fortawesome/fontawesome-free/scss/solid";
@import "~@fortawesome/fontawesome-free/scss/brands";

clono la repo
composer install 
rinomino env.example in .env
php artisan key:generate
npm install
```
