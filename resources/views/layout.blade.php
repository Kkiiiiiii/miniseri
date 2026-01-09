<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="icon" href="miniseri.png">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .magenta-glow {
            box-shadow: 0 0 50px -12px rgba(219, 39, 119, 0.5);
        }
    </style>
</head>
<body>
    <nav class="fixed w-full z-50 glass top-0 px-6 py-4">
        <div class="flex justify-between items-center">
            <div class="flex items-center gap-2">
                <img src="miniseri.png" class="w-3xs h-12">
                <span class="text-xl font-extrabold tracking-tighter">MINISERI<span class="text-pink-500">.ID</span></span>
            </div>
            <div class="hidden md:flex gap-8 text-sm font-medium text-gray-300">
                <a href="#" class="text-pink-500 menu-item">HOME</a>
                <a href="#tentangKami" class="menu-item">TENTANG KAMI</a>
                <a href="#syarat" class="menu-item">SYARAT KETENTUAN</a>
                <a href="#faq" class="menu-item">FAQ</a>
                <a href="#" class="menu-item">DAFTAR SINEAS</a>
                <a href="#" class="menu-item">KONTAK</a>
            </div>
            <!-- <button class="px-6 py-2 bg-pink-600 hover:bg-pink-700 rounded-full text-sm font-bold transition">Buka Aplikasi</button> -->
            <button id="burger" class="md:hidden flex flex-col gap-1">
                <span class="w-6 h-0.5 bg-white"></span>
                <span class="w-6 h-0.5 bg-white"></span>
                <span class="w-6 h-0.5 bg-white"></span>
            </button>
        </div>

        <div id="mobileMenu" class="hidden md:hidden mt-6 flex flex-col gap-4 text-sm font-medium text-gray-300" id="menu">
            <a href="#" class="hover:text-pink-500">HOME</a>
            <a href="#tentangKami" class="hover:text-pink-500">TENTANG KAMI</a>
            <a href="#syarat" class="hover:text-pink-500">SYARAT KETENTUAN</a>
            <a href="#faq" class="hover:text-pink-500">FAQ</a>
            <a href="#" class="hover:text-pink-500">DAFTAR SINEAS</a>
            <a href="#" class="hover:text-pink-500">KONTAK</a>
        </div>
    </nav>
</body>
</html>