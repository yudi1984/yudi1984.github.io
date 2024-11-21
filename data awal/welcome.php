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
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100">
  <div class="flex">
   <!-- Sidebar -->
   <div class="w-1/4 bg-gradient-to-b from-green-100 to-green-50 h-screen p-6">
    <div class="flex items-center mb-8">
     <i class="fas fa-user-circle text-3xl text-black"></i>
     <span class="ml-2 text-xl font-bold">My Dashboard</span>
    </div>
    <div class="space-y-6">
     <div class="flex items-center text-lg font-semibold text-gray-700">
      <i class="fas fa-desktop mr-2"></i>
      <span>Input Data</span>
     </div>
     <div class="flex items-center text-lg font-semibold text-gray-700">
      <i class="fas fa-home mr-2"></i>
      <span>Wilayah Kerja</span>
     </div>
     <div class="flex items-center text-lg font-semibold text-gray-700">
      <i class="fas fa-search mr-2"></i>
      <span>Survei Cakupan</span>
     </div>
    </div>
   </div>
   <!-- Main Content -->
   <div class="w-3/4 p-10">
    <!-- Header -->
    <header class="flex justify-between items-center mb-8">
     <h1 class="text-2xl font-bold"></h1>
     <a href="index.php" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Logout</a>
    </header>

    <div class="mb-8">
     <h1 class="text-2xl font-bold">Selamat Datang di Dashboard Input Data Kajian Epidemiologi Campak-Rubella!</h1>
     <p class="text-lg mt-4">
      Platform ini dirancang untuk membantu Anda dalam proses pengumpulan dan pelaporan data epidemiologi dengan mudah, cepat, dan akurat. Terima kasih atas dedikasi Anda, dan mari kita bersama-sama menjaga kesehatan masyarakat kita!
     </p>
    </div>
    <img alt="Illustration of a doctor and a family with medical icons" class="mx-auto" height="300" src="img/logo1.png" width="400"/>
   </div>
  </div>
 </body>
</html>
