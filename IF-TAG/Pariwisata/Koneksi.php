<?php
$host = "localhost"; // atau bisa juga 127.0.0.1
$username = "root";  // seusaikan dengan username mysql anda
$password = "";      // seusaikan dengan password mysql anda
$database = "db_pariwisata"; // ganti dengan nama database anda

// membuat koneksi
$koneksi = new mysqli($host, $username, $password, $database);

// cek koneksi
if ($koneksi->connect_error) {
    die("koneksi gagal: " . $koneksi->connect_error);
} else {
    echo "koneksi berhasil"; // bisa diaktifkan jika ingin menampilkan pesan ini
}