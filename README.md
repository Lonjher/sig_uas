<p align="center"><a href="https://ua.ac.id" target="_blank"><img src="./public/assets/logo/ua-logo.png" width="400" alt="UA Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About This Project

Proyek ini diajukan sebagai tugas Mata Kuliah Implementasi Sistem Informasi Geografis (SIG) Semester VII Universitas Annuqayah. Proyek ini berupa aplikasi sederhana dari implemtasi SIG dengan beberapa capability salah satunya:

- [Menambahkan marker](https://laravel.com/docs/routing).
- [Menentukan marker pada peta](https://laravel.com/docs/container).
- Menambahkan data [Polygon](https://id.wikipedia.org/wiki/Poligon) walaupun berupa data statis.
- Implementasi [Livewire](https://livewire.laravel.com/).
- Integrasi dengan [MapBox](https://www.mapbox.com/).
- Menggunakan Framework CSS [TailwindCss](https://tailwindcss.com/).

Semuanya tercover dalam sebuah framework pengembangan Website [Laravel](https://laravel.com).

## Dokumentasi Proyek

### Halaman Utama
<img src="./public/assets/screenshot/hal1.png" width="600" alt="Utama">

### Halaman Deskripsi Proyek
<img src="./public/assets/screenshot/hal2.png" width="600" alt="Project Description">

### Teknologi yang digunakan
<img src="./public/assets/screenshot/hal3.png" width="600" alt="Technology">

### Halaman Peta
<img src="./public/assets/screenshot/hal4.png" width="600" alt="Map">

### Instalasi

- **Clone repository ini:**
  <p>git clone https://github.com/lonjher/sig_uas.git</p>
- **Masuk ke direktori proyek:**
  <p>cd sig_uas</p>
- **Salin file .env.example menjadi .env:**
  <p>cp .env.example .env</p>
- **Buat Key:**
  <p>php artisan key:generate</p>
- **Instal dependensi dengan Composer dan NPM:**
  <ul>
      <li>composer install</li>
      <li>npm install</li>
      <li>npm run dev</li>
  </ul>
- **Migrasi dan seeding database:**
  <p>php artisan migrate --seed</p>
- **Jalankan server pengembangan Laravel:**
  <p>php artisan serve</p>

## Penggunaan

1. Akses aplikasi melalui browser di <p>http://localhost:8000<p/>.
3. Mulai eksplorasi fitur aplikasi.
