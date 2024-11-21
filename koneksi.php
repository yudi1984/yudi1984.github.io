<?php 

// Menghubungkan ke database
$conn = mysqli_connect('localhost', 'root', '', 'user_login');

// Cek apakah koneksi berhasil
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>
