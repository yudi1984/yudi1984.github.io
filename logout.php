<?php
session_start();

if (isset($_POST['logout'])) {
    // Konfirmasi menggunakan JavaScript
    echo "<script>
        if(confirm('Apakah Anda yakin ingin logout?')) {
            session_unset();
            session_destroy();
            header('Location: index.php');
            exit;
        }
    </script>";
}
?>