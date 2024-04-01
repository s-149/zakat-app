# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/lumen)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

> **Note:** In the years since releasing Lumen, PHP has made a variety of wonderful performance improvements. For this reason, along with the availability of [Laravel Octane](https://laravel.com/docs/octane), we no longer recommend that you begin new projects with Lumen. Instead, we recommend always beginning new projects with [Laravel](https://laravel.com).

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## mendownload berkas baru

composer create-project --prefer-dist laravel/lumen blog

############################################################################

## menyalakan server 

php -S localhost:8000 -t public

## membuat database baru

namanya zakat

## membuat tabel baru

php artisan make:migration create_zakat_table

buat Schema 
Schema::create('zakat', function (Blueprint $table) {
            $table->id();
            $table->String('nama');
            $table->String('alamat');
            $table->String('jumlah_jiwa');
            $table->String('harga_beras_dikonsumsi');
            $table->String('tagihan');
            $table->string('pembayaran');
            $table->timestamps();
        });

## menjalankan migrasi baru

php artisan migrate

atau 

php artisan migrate:fresh

## Menjalankan seeder/dumy

php artisan db:seed

## Pengantar

Aplikasi ini dibuat untuk memenuhi tugas UTS
didalam aplikasi ini telah tertanam seeder untuk menjalankan data dumy
bagi para penguji silahkan jalankan seeder agar tidak perlu repot-repot
mengisi database secara manual dengan menjalankan perintah "php artisan db:seed"
aplikasi ini dibuat sangat sederhana, tidak menerapkan midelwere dan session
jadi para penguji tidak harus login untuk masuk karna sudah diset route nya
langsung menuju halaman zakat

## Panduan Pengguna

- jalankan server database
- buat database baru 
- tabel yg sudah ada di aplikasi ini bernama "zakat"
- silahkan atur ulang configurasi jika diperlukan
- jalankan server lumen
- jalankan migrasi
- jalankan seeder
- akses aplikasinya dibrowser dengan url localhost:8000 jika dilokal
- jika memerlukan app_key silahkan akses route /key
- selamat mencoba

silahkan disesuaikan urlnya jika diserver lokal urlnya localhost:8000

## Author ()

##########################################################################
