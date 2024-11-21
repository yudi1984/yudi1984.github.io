
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-ORI CAMPAK RUBELLA - Login</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome untuk ikon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet"/>
</head>
<body class="bg-[#f0f8f8] h-screen flex items-center justify-center">
    <div class="flex items-center justify-center w-full max-w-4xl p-4">
        <!-- Bagian kiri dengan judul dan logo -->
        <div class="flex-1 flex flex-col items-center text-center">
            <h1 class="text-5xl font-bold" style="font-family: 'Roboto', sans-serif;">
                <span class="text-[#00bcd4]">e-ORI</span>
                <span class="text-[#cddc39]">CAMPAK RUBELLA</span>
            </h1>
            <img alt="Ilustrasi dua anak dengan simbol vaksin di sekitarnya" class="mt-8" src="img/logo1.png" width="300" height="300"/>
        </div>
        
        <!-- Bagian kanan dengan form login -->
        <div class="flex-1 flex flex-col items-center">
            <form action="login.php" method="POST" class="w-80 space-y-4"> <!-- Form action dikaitkan dengan login.php -->
                <input 
                    name="username" 
                    class="w-full p-3 border rounded-full focus:outline-none focus:ring-2 focus:ring-[#00bcd4]" 
                    placeholder="Username" 
                    type="text" 
                    required
                />
                <input 
                    name="password" 
                    class="w-full p-3 border rounded-full focus:outline-none focus:ring-2 focus:ring-[#00bcd4]" 
                    placeholder="Password" 
                    type="password" 
                    required
                />
                <button 
                    type="submit" 
                    class="w-full p-3 bg-[#00bcd4] text-white rounded-full hover:bg-[#0097a7]">
                    Login
                </button>
            </form> <!-- Akhir form -->
        </div>
    </div>
</body>
</html>
