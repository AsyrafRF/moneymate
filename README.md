<p align="center">
  <a href="https://MoneyMate.app" target="_blank">
    <img src="https://raw.githubusercontent.com/AsyrafRF/moneymate/main/docs/assets/logo.png" width="300" alt="MoneyMate Logo">
  </a>
</p>

<p align="center">
  <em>Aplikasi manajemen keuangan pribadi modern untuk membantu mengontrol pengeluaran, mengatur anggaran, dan mencapai tujuan finansial.</em>
</p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

## 🚀 Tentang MoneyMate

MoneyMate adalah aplikasi web yang membantu kamu mengelola keuangan pribadi dengan **mudah, aman, dan menyenangkan**.  
Dirancang untuk membantu pengguna **mengelola anggaran harian secara efektif melalui pencatatan pemasukan dan pengeluaran, pengelompokan kategori, serta penyajian analisis keuangan dalam bentuk grafik dan laporan visual.** Dengan antarmuka yang sederhana namun informatif, aplikasi ini memudahkan pengguna **memantau kondisi keuangan secara real-time, mengontrol pengeluaran, dan merencanakan anggaran dengan lebih terarah untuk mencapai tujuan finansial.**  

### ✨ Fitur Utama
- 📊 **Dashboard Finansial Real-time** – Lihat ringkasan pemasukan, pengeluaran, dan saldo bulanan.
- 💰 **Pengaturan Anggaran** – Tentukan batas pengeluaran per kategori.
- 🔔 **Notifikasi & Reminder** – Ingatkan saat hampir melewati anggaran.
- 🧾 **Pencatatan Transaksi Cepat** – Input harian dengan UI yang simpel.
- 🔒 **Keamanan Data** – Enkripsi dan proteksi akun.
- 🌎 **Multi Platform** – Akses via Web dan Mobile App.

<p align="center">
  <img src="https://raw.githubusercontent.com/AsyrafRF/moneymate/main/docs/assets/landing.png" width="600" alt="Dashboard Preview">
</p>

---

## 📚 Dokumentasi & Pembelajaran

- [Dokumentasi Backend](#)  
- [Dokumentasi Frontend](#)  
- [Demo Live](#)  

Jika kamu ingin belajar mengembangkan MoneyMate, silakan ikuti panduan instalasi di bawah atau cek video tutorial di [YouTube Channel](https://youtube.com/yourchannel).

---

## 🛠️ Instalasi

Clone repo ini:

```bash
git clone https://github.com/AsyrafRF/moneymate.git
cd moneymate
```

Install dependencies:

```bash
composer install
cp .env.example .env
php artisan key:generate
```

Edit env:

```sql
DB_CONNECTION=mysql
DB_HOST=
DB_PORT=
DB_DATABASE=samakan-dengan-phpmyadmin
DB_USERNAME=
DB_PASSWORD=
```

Migrasi database:

```bash
php artisan migrate --seed
```

Jalankan server lokal:

```bash
php artisan serve
```

🤝 Kontribusi

Silakan baca Panduan Kontribusi
 sebelum membuat Pull Request.

📜 Lisensi

MoneyMate adalah software yang dikembangkan dalam Project Based Learning di bawah Politeknik Negeri Batam
.



<p align="center"> Dibuat dengan ❤️ oleh <a href="https://www.instagram.com/moneymate.trpl/">PBL-TRPL517 A Team</a> </p> 