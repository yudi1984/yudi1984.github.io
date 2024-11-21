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

                    // Redirect ke halaman yang diinginkan setelah login
                    header("Location: welcome.php");
                    exit;
                } else {
                    // Password salah
                    echo "Password salah!";
                }
            } else {
                // Username tidak ditemukan
                echo "Username tidak ditemukan!";
            }
        } else {
            // Error saat menjalankan query
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Mohon isi username dan password.";
    }
}
?>
