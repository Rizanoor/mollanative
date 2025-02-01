# Website Portfolio dengan PHP Native dan PostgreSQL

![GitHub](https://img.shields.io/badge/PHP-7.0%2B-blue) ![PostgreSQL](https://img.shields.io/badge/PostgreSQL-9.0%2B-blue) ![Status](https://img.shields.io/badge/Status-Active-success)

Website portfolio sederhana menggunakan PHP native dan PostgreSQL sebagai database.

## 🚀 Fitur
- CRUD (Create, Read, Update, Delete) untuk proyek portfolio
- Desain responsif dan ringan
- Keamanan dasar terhadap SQL Injection
- Pengelolaan data dengan PostgreSQL

---

## 📌 Persyaratan

Pastikan sistem Anda memiliki:
- PHP **7.0 atau lebih baru**
- PostgreSQL **9.0 atau lebih baru**
- Web server **Apache/Nginx**
- Composer (opsional untuk mengelola dependensi)

---

## 📥 Instalasi

### 1️⃣ Clone Repository
```bash
git clone <link-repositori> portfolio
cd portfolio
```

### 2️⃣ Konfigurasi Database
1. **Buat database di PostgreSQL:**
   ```sql
   CREATE DATABASE portfolio_db;
   ```
2. **Import struktur tabel:**
   ```bash
   psql -U username -d portfolio_db -a -f portfolio.sql
   ```
3. **Sesuaikan koneksi database di `config.php`:**
   ```php
   <?php
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'portfolio_db');
   define('DB_USER', 'username');
   define('DB_PASS', 'password');
   ```

### 3️⃣ Install Dependensi
Jika proyek menggunakan Composer:
```bash
composer install
```

### 4️⃣ Jalankan Web Server
- Gunakan PHP built-in server:
  ```bash
  php -S localhost:8000
  ```
- Atau akses melalui web server (Apache/Nginx) pada `http://localhost/portfolio`

---

## 📂 Struktur Folder
```
portfolio/
├── assets/           # CSS, JS, dan gambar
├── includes/         # File konfigurasi & koneksi database
├── pages/            # Halaman utama website
├── index.php         # Entry point utama
├── config.php        # Konfigurasi database
└── portfolio.sql     # Struktur database PostgreSQL
```

---

## 🤝 Kontribusi
Jika ingin berkontribusi, silakan buat *pull request* atau laporkan masalah di [Issues](link-repositori/issues).

---

## 📜 Lisensi
Proyek ini dilisensikan di bawah lisensi **MIT**. Lihat file [LICENSE](LICENSE) untuk informasi lebih lanjut.

---

## 📜 Template
Proyek ini menggunakan template dari https://www.templateshub.net/

---

🚀 **Selamat Mencoba!** 🎉


