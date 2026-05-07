# Secure-Software-Engineering-SayurPKY

## 🥦 SAYURPKY — Aplikasi E-Commerce Sayur & Buah
# 📋 Deskripsi Proyek
SAYURPKY adalah sistem e-commerce berbasis web yang dikembangkan untuk memfasilitasi penjualan sayuran dan buah-buahan segar dari petani lokal kepada masyarakat di Kota Palangka Raya, Kalimantan Tengah.
Sistem ini dibangun menggunakan PHP native dengan basis data MySQL dan memiliki fitur-fitur utama seperti registrasi dan autentikasi pengguna, katalog produk, keranjang belanja berbasis sesi, proses checkout dengan kalkulasi ongkos kirim berbasis lokasi GPS, unggah bukti pembayaran, serta dashboard pengelolaan untuk administrator.


# 🏗️ Arsitektur
[Browser / Client]
        │
        │  HTTP / HTTPS
        ▼
[Web Server — Apache/Nginx]
        │
        ▼
[Presentation Layer]          [Business Logic Layer]
  HTML, CSS, JS (Native)   ←→   PHP Native (pages/, admin/)
        │
        ▼
[Data Layer]                  [File Storage]
  MySQL — db_sayurpky       |   assets/img/bukti_transfer/
  tbl_user, tbl_produk,     |   assets/img/ (gambar produk)
  tbl_pesanan, dst.         |

  # Alur utama sistem:
  Pengguna → Login/Register → Katalog Produk → Keranjang
        → Checkout (GPS) → Upload Bukti Bayar
        → Verifikasi Admin → Pesanan Dikirim

# 🗂️ Struktur Direktori
SAYURPKY/
├── index.php                      # Halaman utama
├── config/
│   └── db.php                     # Koneksi database MySQL
├── pages/
│   ├── login.php                  # Login pengguna
│   ├── register.php               # Registrasi pengguna
│   ├── produk.php                 # Katalog produk
│   ├── detail_produk.php          # Detail produk
│   ├── keranjang.php              # Keranjang belanja
│   ├── checkout.php               # Halaman checkout + GPS
│   ├── proses_checkout.php        # Proses transaksi
│   ├── upload_pembayaran.php      # Upload bukti transfer
│   ├── pesanan.php                # Riwayat pesanan
│   ├── detail_pesanan.php         # Detail pesanan
│   ├── pesanan_sukses.php         # Konfirmasi pesanan
│   ├── edukasi.php                # Artikel edukasi pertanian
│   ├── detail_edukasi.php         # Detail artikel edukasi
│   ├── resep.php                  # Halaman resep masakan
│   ├── about.php                  # Tentang kami
│   └── logout.php                 # Logout pengguna
├── admin/
│   ├── index.php                  # Dashboard admin
│   ├── login.php                  # Login admin
│   ├── logout.php                 # Logout admin
│   ├── produk.php                 # Manajemen produk
│   ├── pesanan.php                # Manajemen pesanan
│   ├── detail_pesanan.php         # Detail & verifikasi pesanan
│   ├── user.php                   # Manajemen pengguna
│   ├── edukasi.php                # Manajemen artikel edukasi
│   ├── resep.php                  # Manajemen resep
│   ├── hapus_produk.php           # Hapus produk
│   ├── hapus_edukasi.php          # Hapus artikel edukasi
│   ├── header.php                 # Header admin panel
│   └── footer.php                 # Footer admin panel
├── includes/
│   ├── functions.php              # Fungsi global (isLoggedIn, isAdmin, rupiah, dll.)
│   ├── header.php                 # Header halaman user
│   └── footer.php                 # Footer halaman user
├── assets/
│   ├── style.css                  # Stylesheet utama
│   └── img/
│       └── bukti_transfer/        # Penyimpanan bukti pembayaran
└── db_sayurpky.sql                # Skema & data awal database

# 🚀 Fitur Utama
# Pengguna (Customer)
- Registrasi dan login dengan autentikasi berbasis sesi
- Melihat katalog produk sayur dan buah
- Menambahkan produk ke keranjang belanja
- Proses checkout dengan deteksi lokasi GPS dan kalkulasi ongkos kirim otomatis
- Upload bukti transfer sebagai konfirmasi pembayaran
- Melihat riwayat dan status pesanan secara real-time
- Membaca artikel edukasi pertanian dan resep masakan

# Administrator
- Dashboard ringkasan data (pesanan, produk, pengguna)
- Manajemen produk: tambah, edit, hapus beserta gambar
- Verifikasi pembayaran dan pembaruan status pesanan
- Manajemen data pengguna, artikel edukasi, dan konten resep
- Pencatatan log aktivitas admin

# 👥 Tim Pengembang
1. MUHAMMAD ARIF AFANDY   (2330105030006)
2. SEPTIO PRAJA           (2330205030045)
3. AGUNG SETYO PAMBUDI    (2330205030060)
4. IZZUDIN ARIQ AL HAFIZH (2330305030082)


Teknik Informatika · Universitas Palangka Raya · 2024/2025
