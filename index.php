<?php
session_start();
include('koneksi.php'); // Memanggil file koneksi database

// Tangkap pesan kesalahan jika ada
$error_message = "";
if (isset($_GET['error'])) {
    $error_message = $_GET['error'];
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-ORI CAMPAK RUBELLA - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet"/>
</head>
<body class="bg-[#FFFFFF] h-screen flex items-center justify-center">
    <div class="flex items-center justify-center w-full max-w-4xl p-4">
        <div class="flex-1 flex flex-col items-center text-center">
            <h1 class="text-5xl font-bold mb-2" style="font-family: 'Roboto', sans-serif;">
                <span class="text-[#00C7BE]">e-ORI</span>
            </h1>
            <h1 class="text-5xl font-bold mb-8" style="font-family: 'Roboto', sans-serif;">
                <span class="text-[#cddc39]">CAMPAK RUBELLA</span>
            </h1>
            <img src="img/logo1.png" width="250" height="250"/>
        </div>
        
        <div class="flex-1 flex flex-col items-center ml-15">
            <form action="login.php" method="POST" class="w-80 space-y-4">
                <input 
                    name="username" 
                    class="w-full p-3 border rounded-full focus:outline-none focus:ring-2 focus:ring-[#00C7BE]" 
                    placeholder="Username" 
                    type="text" 
                    required
                />
                <input 
                    name="password" 
                    class="w-full p-3 border rounded-full focus:outline-none focus:ring-2 focus:ring-[#00C7BE]" 
                    placeholder="Password" 
                    type="password" 
                    required
                />
                <button 
                    type="submit" 
                    class="w-full p-3 bg-[#00C7BE] text-white rounded-full hover:bg-[#05A39C]">
                    Login
                </button>
            </form>
            <!-- Pesan kesalahan -->
            <?php if (!empty($error_message)): ?>
                <p class="text-red-500 text-sm mt-4"><?php echo htmlspecialchars($error_message); ?></p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
