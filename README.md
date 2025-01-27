<p align="center"><a href="https://ua.ac.id" target="_blank"><img src="./public/assets/logo/ua-logo.png" width="200" alt="UA Logo"></a></p>

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
<p align="center"><img src="./public/assets/screenshot/hal1.png" width="600" alt="Utama"></p>

### Halaman Deskripsi Proyek
<p align="center"><img src="./public/assets/screenshot/hal2.png" width="600" alt="Project Description"></p>

### Teknologi yang digunakan
<p align="center"><img src="./public/assets/screenshot/hal3.png" width="600" alt="Technology"></p>

### Halaman Data Peta
<p align="center"><img src="./public/assets/screenshot/hal4.png" width="600" alt="Map Data"></p>

### Halaman Peta
<p align="center"><img src="./public/assets/screenshot/hal5.png" width="600" alt="Map"></p>

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

### Penggunaan

1. Akses aplikasi melalui browser di <p>http://localhost:8000<p/>.
3. Mulai eksplorasi fitur aplikasi.
