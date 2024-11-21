<?php
session_start();
if (!isset($_SESSION['username'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Container for the iframe, setting relative position to allow absolute positioning within it */
        .iframe-container {
            position: relative;
            width: 100%;
            max-width: 1280px; /* Optional, limits the width */
            overflow: hidden;
            border: 1px solid #ddd;
        }

        /* Overlay that covers the text at the bottom of the iframe */
        .iframe-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 50px; /* Adjust height as necessary to cover unwanted text */
            background: white; /* Matches the form background color */
            z-index: 10;
        }

        /* Optional styling for the iframe */
        iframe {
            width: 100%;
            height: 3500px;
            border: none;
        }
        
        /* Style for the sidebar */
        .sidebar {
            height: 100%;
            width: 150px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #48ECE5;
            overflow-x: hidden;
            overflow-y: auto;
            padding-top: 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.2); /* Menambahkan efek shadow */
        }

        /* Styling for the title inside the header */
        .header h1 {
            font-size: 1.875rem;
            font-weight: bold;
            color: #2d3748;
            margin: 0;
        }        

        /* Style for main content area to account for the fixed sidebar */
        .main-content {
            margin-left: 25%;
            padding: 20px;
        }
    </style>
  
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-[#FFFFFF] h-screen flex items-center justify-center">
  <div class="flex">
    <!-- Sidebar -->
    <div class="sidebar w-1/6 bg-gradient-to-b from-[#48ECE5] to-[#FFFFFF] h-screen p-6">
        <div class="flex items-center mb-8">
            <i class="fas fa-user-circle text-4xl"></i>
            <a href="welcome_admin.php" class="ml-2 text-xl font-bold text-gray-800 hover:text-[#00C7BE]">My Dashboard</a>
        </div>
        <div class="space-y-6">
            <div class="flex items-center">
                <i class="fas fa-desktop text-2xl"></i>
                <span class="ml-2 text-lg font-semibold">Input Data</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-home text-2xl"></i>
                <a href="laporan_pkm.php" class="ml-2 text-lg font-semibold text-gray-700 hover:text-[#00C7BE]">Laporan Puskesmas</a>
            </div>
            <div class="flex items-center">
                <i class="fas fa-search text-2xl"></i>
                <a href="laporan_survei.php" class="ml-2 text-lg font-semibold text-gray-700 hover:text-[#00C7BE]">Laporan Survei</a>
            </div>
            <!-- Tambahan menu Data Visualisasi -->
            <div class="flex items-center">
                <i class="fas fa-chart-bar text-2xl"></i>
                <a href="visualisasi.php" class="ml-2 text-lg font-semibold text-gray-700 hover:text-[#00C7BE]">Data Visualisasi </a>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div class="main-content w-11/12 p-10">
      <!-- Header -->
      <header class="flex justify-between items-center mb-8">
        <h1 class="text-2xl font-bold"></h1>
        <a href="index.php" class="text-black px-6 py-3 bg-gradient-to-r from-teal-400 to-teal-400 rounded-full shadow-md hover:from-teal-500 hover:to-teal-500">Logout</a>
      </header>

      <div class="mb-8">
        <h1 class="text-2xl font-bold">Selamat Datang di Dashboard Input Data Kajian Epidemiologi Campak-Rubella!</h1>
        <p class="text-lg mt-4">
          Platform ini dirancang untuk membantu Anda dalam proses pengumpulan dan pelaporan data epidemiologi dengan mudah, cepat, dan akurat. Terima kasih atas dedikasi Anda, dan mari kita bersama-sama menjaga kesehatan masyarakat kita!
        </p>
      </div>
      <img alt="Illustration of a doctor and a family with medical icons" class="mx-auto" height="300" src="img/logo2.png" width="400"/>
    </div>
  </div>
</body>
</html>
