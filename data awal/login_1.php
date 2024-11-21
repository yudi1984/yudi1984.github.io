<?php
session_start(); // Pastikan session sudah dimulai

include 'koneksi.php'; // Menghubungkan ke database

// Periksa apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mendapatkan data dari form login dan memeriksa apakah set
    $username = isset($_POST['username']) ? $_POST['username'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;

    // Hash password sebelum disimpan ke database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Memastikan username dan password tidak kosong
    if (!empty($username) && !empty($password)) {
        // Mencegah SQL Injection
        $username = mysqli_real_escape_string($conn, $username);

        // Query untuk memeriksa username
        $periksa = mysqli_query($conn, "SELECT * FROM petugas_puskesmas WHERE username = '$username'");
        $sama = mysqli_num_rows($periksa);

        if ($sama > 0) {
            // Mendapatkan data user
            $row = mysqli_fetch_assoc($periksa);

            // Verifikasi password
            if (password_verify($password, $row['password'])) {
                $_SESSION['username'] = $username;
                $_SESSION['status'] = 'login';
                header("Location: ori/welcome.php"); // Redirect ke halaman welcome jika login berhasil
                exit(); // Tambahkan exit untuk menghentikan eksekusi setelah redirect
            } else {
                echo "Password salah.";
            }
        } else {
            echo "Username tidak ditemukan.";
        }
    } else {
        echo "Username dan password tidak boleh kosong.";
    }
} else {
    echo "Silakan masukkan username dan password.";
}
?>
