Panduan Instalasi Website Portfolio dengan PHP Native dan PostgreSQL
Ini adalah panduan langkah demi langkah untuk menginstal dan menjalankan website portfolio sederhana menggunakan PHP native dan PostgreSQL sebagai database.

Persyaratan
Pastikan sistem Anda memenuhi persyaratan berikut sebelum memulai instalasi:

PHP versi 7.0 atau yang lebih baru
PostgreSQL versi 9.0 atau yang lebih baru
Web server seperti Apache atau Nginx
Composer untuk mengelola dependensi PHP
Langkah 1: Clone Repositori
Buka terminal atau command prompt.

Clone repositori ini ke direktori web server Anda:

bash
Salin
Edit
git clone <link-repositori> portfolio
Masuk ke direktori portfolio:

bash
Salin
Edit
cd portfolio
Langkah 2: Konfigurasi Database
Buat database baru di PostgreSQL:

sql
Salin
Edit
CREATE DATABASE portfolio_db;
Import struktur tabel dari file portfolio.sql ke database portfolio_db:

bash
Salin
Edit
psql -U username -d portfolio_db -a -f portfolio.sql
Ubah konfigurasi database di file config.php:

php
Salin
Edit
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'portfolio_db');
define('DB_USER', 'username');
define('DB_PASS', 'password');
Ganti username dan password sesuai dengan pengaturan PostgreSQL Anda.

Langkah 3: Install Dependensi PHP
Instal dependensi PHP menggunakan Composer:

bash
Salin
Edit
composer install
Langkah 4: Jalankan Web Server
Pastikan web server (Apache, Nginx, dll.) sudah berjalan.
Buka browser dan akses http://localhost/portfolio (sesuaikan dengan konfigurasi web server Anda jika diperlukan).
Kontribusi
Jika Anda menemukan masalah atau ingin berkontribusi pada proyek ini, silakan buat pull request atau laporkan masalah di link-repositori/issues.

Lisensi
Proyek ini dilisensikan di bawah lisensi MIT - lihat file LICENSE untuk informasi lebih lanjut.

Template
Proyek ini menggunakan template dari https://www.templateshub.net/