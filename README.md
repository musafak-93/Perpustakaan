<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Dasboard Admin Data Pegawai
Website katalog perpustakaan merupakan sistem informasi perpusatakaan untuk mengelola katalog buku. Website ini dikembangkan dengan framework Laravel versi 8.

## Features
- Login
- Register
- Logout
- Dasboard Admin
- Export PDF
- CRUDS data di halaman admin

## System Requirements
- PHP => 7.4.15
- Laravel => 8
- MySQL => 5.7.33
- Laragon
- Visual studio code

## Installation
Install my-project with clone using link HTTP Github

- Clone the repository
  ```bash
  git clone https://github.com/musafak-93/Perpustakaan.git
  ```
- Install dependencies using composer install
  ```bash
  composer install
  ```
- Copy the .env.example file to .env
  ```bash
  cp .env.example .env
  ```
- Generate the APP_KEY.
  ```bash
  php artisan key:generate
  ```
- Create database in PhpMyAdmin and update name database in file .env
- Run php artisan migrate to migrate the database
  ```bash
  php artisan migrate
  ```
- Run php artisan serve
  ```bash
  php artisan serve
  ```
 
## Screenshots
- Beranda
  ![image](https://github.com/musafak-93/Perpustakaan/assets/62982123/492d82a4-3a33-4cad-8853-652b84d83ecf)
- Login
  ![image](https://github.com/musafak-93/Perpustakaan/assets/62982123/9e72f11b-adca-48b3-ae00-4b26c16afe19)
- Register
  ![image](https://github.com/musafak-93/Perpustakaan/assets/62982123/d8e1dd75-8bf0-4fcd-8b22-c2a60a27c3f1)
- Dasboard Admin
  ![image](https://github.com/musafak-93/Perpustakaan/assets/62982123/0fdf6422-c1cc-4011-81cf-6260dd1b71e6)

## Feedback
If you have any feedback, please reach out to us at mus.safak93@gmail.com



