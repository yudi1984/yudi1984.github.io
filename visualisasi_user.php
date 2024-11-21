<?php
session_start();
if (!isset($_SESSION['username'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: login.php");
    exit;
}
?>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Menonaktifkan scroll di seluruh halaman */
        body, html {
            overflow: auto;
            height: 100%;
        }

        /* Container untuk iframe dengan posisi relatif */
        .iframe-container {
            position: relative;
            width: 100%;
            max-width: 1280px;
            overflow: hidden;
            border: 1px solid #ddd;
        }

        /* Overlay yang menutupi teks di bagian bawah iframe */
        .iframe-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 50px;
            background: white;
            z-index: 10;
        }

        /* Gaya opsional untuk iframe */
        iframe {
            width: 100%;
            height: 800px;
            border: none;
        }

        /* Sidebar */
        .sidebar {
            height: 100%;
            width: 150px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #48ECE5;
            overflow-x: hidden;
            padding-top: 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.2); /* Menambahkan efek shadow */
        }

        /* Konten utama */
        .main-content {
            margin-left: 17%;
            padding: 20px;
        }
    </style>
    <script>
        // Fungsi untuk scroll ke atas halaman
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>
</head>
<body class="h-screen flex">
    <!-- Sidebar -->
    <div class="sidebar w-1/6 bg-gradient-to-b from-[#48ECE5] to-[#FFFFFF] h-screen p-6">
        <div class="flex items-center mb-8">
            <i class="fas fa-user-circle text-4xl"></i>
            <a href="welcome_user.php" class="ml-2 text-xl font-bold text-gray-800 hover:text-[#00C7BE]">My Dashboard</a>
        </div>
             <!-- Tambahan menu Data Visualisasi -->
             <div class="flex items-center">
                <i class="fas fa-chart-bar text-2xl"></i>
                <a href="visualisasi_user.php" class="ml-2 text-lg font-semibold text-gray-700 hover:text-[#00C7BE]">Data Visualisasi</a>
            </div>
        </div>
    </div>
    <!-- Konten Utama -->
    <div class="main-content w-11/12 p-10">
        <!-- Header -->
        <header class="bg-gradient-to-r from-teal-200 to-teal-500 p-4 flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold">Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
            <a href="index.php" class="text-black px-6 py-3 bg-gradient-to-r from-teal-400 to-teal-400 rounded-full shadow-md hover:from-teal-500 hover:to-teal-500">Logout</a>
        </header>

        <div class="p-6 iframe-container">
            <iframe src="https://app.powerbi.com/view?r=eyJrIjoiZDEwZDdhMDUtYWJiZi00MzVmLWEyYjQtN2FjY2QzYWQxOThjIiwidCI6ImZhZjg3Y2MwLTRiMjQtNGRlYS04ZmQzLTRkMjc3YzY3NmU5MyIsImMiOjEwfQ%3D%3D" width="1280" height="1900" frameborder="0" marginheight="0" marginwidth="0" scrolling="no">Loading…</iframe>
            <div class="iframe-overlay"></div>
        </div>

    </div>
</body>
</html>
