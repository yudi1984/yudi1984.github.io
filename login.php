<?php
session_start();
include('koneksi.php'); // Memanggil file koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cek apakah username dan password di-post
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Query untuk mengambil data user berdasarkan username
        $query = "SELECT * FROM petugas_puskesmas WHERE username = '$username'";
        $result = $conn->query($query);

        if ($result) {
            if ($result->num_rows == 1) {
                // Mengambil data dari hasil query
                $row = $result->fetch_assoc();
                $storedPassword = $row['password']; // Mengambil password yang tersimpan di database
                
                // Verifikasi password tanpa hash
                if ($password === $storedPassword) {
                    // Login berhasil, simpan data di session
                    $_SESSION['username'] = $username;
                    $_SESSION['role'] = $row['role']; // Jika ada kolom role

                    // Redirect sesuai dengan role
                    if ($_SESSION['role'] == 'user') {
                        header("Location: welcome_user.php");
                    } elseif ($_SESSION['role'] == 'petugas') {
                        header("Location: welcome_petugas.php");
                    } elseif ($_SESSION['role'] == 'admin') {
                        header("Location: welcome_admin.php");
                    } else {
                        header("Location: index.php?error=Role tidak dikenali");
                    }
                    exit;
                } else {
                    // Password salah
                    header("Location: index.php?error=Password salah");
                }
            } else {
                // Username tidak ditemukan
                header("Location: index.php?error=Username tidak ditemukan");
            }
        } else {
            // Error saat menjalankan query
            header("Location: index.php?error=Kesalahan pada server");
        }
    } else {
        header("Location: index.php?error=Mohon isi username dan password");
    }
}
