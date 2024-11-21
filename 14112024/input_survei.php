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
}
        /* Style for main content area to account for the fixed sidebar */
        .main-content {
            margin-left: 25%; /* Adjust this value to match the sidebar width */
            padding: 20px;
        }
    </style>
    <script>
        // Function to scroll to the top of the page
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>
</head>
<body class="h-screen flex">
    <!-- Sidebar -->
    <div class="sidebar w-1/6 bg-gradient-to-b from-[#48ECE5] to-[#FFFFFF] h-screen  p-6">
    <div class="flex items-center mb-8">
            <i class="fas fa-user-circle text-4xl"></i>
            <a href="welcome.php" class="ml-2 text-xl font-bold text-gray-800 hover:text-[#00C7BE]">My Dashboard</a>
        </div>
        <div class="space-y-6">
            <div class="flex items-center">
                <i class="fas fa-desktop text-2xl"></i>
                <span class="ml-2 text-lg font-semibold">Input Data</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-home text-2xl"></i>
                <a href="input_pkm.php" class="ml-2 text-lg font-semibold text-gray-700 hover:text-[#00C7BE]">Wilayah Kerja</a>
            </div>
            <div class="flex items-center">
            <i class="fas fa-search text-2xl"></i>
            <a href="input_survei.php" class="ml-2 text-lg font-semibold text-gray-700 hover:text-[#00C7BE]">Survei Cakupan</a>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div class="main-content w-11/12 p-10">
        <!-- Header -->
        <header class="bg-gradient-to-r from-teal-200 to-teal-500 p-4 flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold">Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
            <a href="index.php" class="text-black px-6 py-3 bg-gradient-to-r from-teal-400 to-teal-400 rounded-full shadow-md hover:from-teal-500 hover:to-teal-500">
    Logout
</a>
        </header>

        <div class="p-6 iframe-container">
            <!-- Google Form Embed with Overlay -->
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdgF-_InNsCzwVcKdFrsd_XJP8kHek9KajAdy_i_ucJruKmcQ/viewform?embedded=true" width="1280" height="3500" frameborder="0" marginheight="0" marginwidth="0" scrolling="no">Loading…</iframe>
            <div class="iframe-overlay"></div>
        </div>
        <!-- Kembali Keatas Link -->
        <div class="flex justify-center mt-4 mb-4">
            <button onclick="scrollToTop()" class="bg-gradient-to-r from-teal-500 to-teal-700 text-white px-4 py-2 rounded hover:from-teal-600 hover:to-teal-800 font-semibold">
                Kembali Keatas
            </button>
        </div>
    </div>
</body>
</html>
