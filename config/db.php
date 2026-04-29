<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_sayurpky";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
// Pastikan timezone PHP di-set agar tanggal/waktu konsisten di semua environment
// Sesuaikan dengan zona waktu server Anda (contoh: 'Asia/Jakarta')
date_default_timezone_set('Asia/Jakarta');

// Jika MySQL tidak menggunakan timezone lokal, set session timezone ke +07:00
// (Hostinger biasanya menjalankan server di UTC atau zona lain — gunakan offset jika named timezone tidak tersedia)
// Jika MySQL mempunyai timezone tables populated, Anda bisa menggunakan 'Asia/Jakarta' juga.
// Contoh: $conn->query("SET time_zone = 'Asia/Jakarta'");
$conn->query("SET time_zone = '+07:00'");

mysqli_set_charset($conn, "utf8mb4");
?>
