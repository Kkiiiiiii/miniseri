<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miniseri | Platform Video Potret</title>
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

<body class="bg-[#0a0a0a] text-white overflow-x-hidden">
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

    <!-- <section class="relative min-h-screen bg-neutral-950 flex items-center pt-20 overflow-hidden">
    
    <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/4 w-96 h-96 bg-pink-600/20 blur-[120px] rounded-full"></div>

    <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center relative z-10">
        
        <div class="space-y-8">
            <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-tight">
                Hiburan Berkelas dalam <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-rose-400">Genggaman.</span>
            </h1>
            <p class="text-gray-400 text-lg md:text-xl max-w-lg leading-relaxed">
                Nikmati ribuan miniseri eksklusif dengan format video potret terbaik. Dirancang khusus untuk kenyamanan menonton di waktu luang Anda.
            </div>

            <div class="flex flex-wrap gap-4">
                <a href="#" class="px-8 py-4 bg-pink-600 hover:bg-pink-700 text-white font-bold rounded-full transition duration-300 transform hover:scale-105 shadow-lg shadow-pink-600/20">
                    Mulai Nonton Gratis
                </a>
                
                <div class="flex gap-3 items-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Play Store" class="h-10">
                </div>
            </div>
        </div>

        <div class="relative flex justify-center">
            <div class="absolute inset-0 bg-gradient-to-tr from-pink-500/10 to-transparent rounded-full blur-3xl scale-75"></div>
            
            <div class="relative w-[280px] h-[580px] bg-neutral-900 rounded-[3rem] border-[8px] border-neutral-800 shadow-2xl overflow-hidden ring-4 ring-white/5">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://via.placeholder.com/1080x1920/1a1a1a/e91e63?text=Preview+Video');">
                    <div class="absolute inset-0 flex items-center justify-center bg-black/20">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center border border-white/30">
                            <div class="w-0 h-0 border-t-[10px] border-t-transparent border-l-[15px] border-l-white border-b-[10px] border-b-transparent ml-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </section> -->
    <section class="relative min-h-screen flex items-center px-6 pt-20">
        <div class="absolute top-20 right-0 w-[500px] h-[500px] bg-pink-600/10 blur-[120px] rounded-full -z-10"></div>

        <div class="container mx-auto grid md:grid-cols-2 gap-16 items-center">
            <div class="space-y-6">
                <span class="px-4 py-1 bg-pink-600/20 text-pink-500 rounded-full text-xs font-bold tracking-widest uppercase">Streaming Video Pendek #1</span>
                <h1 class="text-6xl md:text-7xl font-extrabold leading-[1.1]">Serunya Nonton Miniseri <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-rose-400">Kapan Saja.</span></h1>
                <p class="text-gray-400 text-lg max-w-md">Nikmati keseruan menonton miniseri favorit kapan saja dan di mana saja dengan aplikasi video potret kami. Temukan berbagai cerita menarik dalam format pendek yang mudah dinikmati di waktu luang Anda.</p>
                <div class="flex gap-4 pt-4">
                    <a href="https://play.google.com/store/apps/details?id=id.miniseri.mobile">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" class="h-12 cursor-pointer shadow-lg hover:opacity-80 transition" alt="Play Store">
                    </a>
                    <a href="https://apps.apple.com/id/app/miniseri/id6575369357?l=id">
                        <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" class="h-12 cursor-pointer shadow-lg hover:opacity-80 transition" alt="App Store">
                    </a>
                </div>
            </div>

            <div class="relative flex justify-center">
                <div class="w-[280px] h-[580px] bg-neutral-900 rounded-[3rem] border-[8px] border-neutral-800 shadow-2xl relative z-10 overflow-hidden ring-1 ring-white/10">
                    <img src="https://images.unsplash.com/photo-1616469829581-73993eb86b02?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover opacity-80" alt="App Preview">
                    <div class="absolute inset-0 flex flex-col justify-end p-6 bg-gradient-to-t from-black via-transparent">
                        <p class="text-xs font-bold text-pink-500">Episode 05</p>
                        <h3 class="text-xl font-bold">Cinta di Balik Layar</h3>
                    </div>
                </div>
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-80 h-[500px] bg-pink-600/30 blur-[80px]"></div>
            </div>
        </div>
    </section>

    <section id="tentangKami" class="py-24 px-6 bg-[#0a0a0a] relative overflow-hidden">
        <div class="container mx-auto relative z-10">

            <div class="text-center mb-16">
                <p class="text-pink-500 font-bold tracking-widest uppercase text-sm mb-3">Service We Provide</p>
                <div class="h-1 w-24 bg-gradient-to-r from-pink-500 to-rose-600 mx-auto rounded-full mb-16"></div>
                <h3 class="text-gray-400 max-w-2xl mx-auto text-3xl md:text-3xl font-semibold leading-relaxed mb-14">
                    PLATFORM VIDEO POTRAIT UNTUK MINI SERIES UNTUK SEMUA KALANGAN
                </h3>
                <p class="text-gray-400 max-w-3xl mx-auto leading-relaxed">
                    Miniseri.id adalah platform digital yang didedikasikan untuk film vertikal di Indonesia.
                    Menawarkan format unik dimana kisah diceritakan melalui klip pendek yang membentuk narasi lengkap.
                    Fokusnya adalah memberdayakan para pembuat film Indonesia dan menyediakan konten yang menarik bagi pemirsa.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">
                <div class="glass p-8 rounded-3xl hover:border-pink-500/50 transition-all duration-300 group flex flex-col items-center">
                    <div class="w-14 h-14 bg-pink-600/20 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Hiburan Tanpa Batas</h3>
                    <p class="text-gray-400 leading-relaxed">Terdapat mini series yang bisa dinikmati oleh semua kalangan</p>
                </div>

                <div class="glass p-8 rounded-3xl hover:border-pink-500/50 transition-all duration-300 group flex flex-col items-center">
                    <div class="w-14 h-14 bg-pink-600/20 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 ml-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                    </div>
                    <h3 class="text-xl font-bold mb-4">Monetisasi Konten Mini Series</h3>
                    <p class="text-gray-400 leading-relaxed">Creator dapat memonetisasi konten mini series yang dibuat dan mendapatkan keuntungan</p>
                </div>

                <div class="glass p-8 rounded-3xl hover:border-pink-500/50 transition-all duration-300 group flex flex-col items-center">
                    <div class="w-14 h-14 bg-pink-600/20 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Konten Gratis Dan Berbayar</h3>
                    <p class="text-gray-400 leading-relaxed">Terdapat konten gratis dan berbayar yang bisa dinikmati oleh semua para pengguna</p>
                </div>
            </div>
        </div>
    </section>
    <!-- <div class="flex justify-between items-end mb-12">
        <div>
            <h2 class="text-3xl font-bold mb-2" id="tentangKami">Service We Provide</h2>
            <div class="h-1 w-20 bg-pink-600 rounded-full"></div>
        </div>
        <a href="#" class="text-pink-500 font-semibold hover:underline">Lihat Semua</a>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
        <div class="group cursor-pointer">
            <div class="aspect-[9/16] rounded-2xl overflow-hidden glass mb-4 relative">
                <img src="https://images.unsplash.com/photo-1536440136628-849c177e76a1?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Poster">
                <div class="absolute top-3 right-3 bg-black/60 px-2 py-1 rounded text-[10px] font-bold">HD</div>
            </div>
            <h4 class="font-bold group-hover:text-pink-500 transition">Rahasia Senja</h4>
            <p class="text-sm text-gray-500">Drama • 12 Eps</p>
        </div>

        <div class="group cursor-pointer">
            <div class="aspect-[9/16] rounded-2xl overflow-hidden glass mb-4 relative">
                <img src="https://images.unsplash.com/photo-1485846234645-a62644f84728?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Poster">
                <div class="absolute top-3 right-3 bg-black/60 px-2 py-1 rounded text-[10px] font-bold">NEW</div>
            </div>
            <h4 class="font-bold group-hover:text-pink-500 transition">Detektif Cilik</h4>
            <p class="text-sm text-gray-500">Misteri • 08 Eps</p>
        </div>
        </div> -->

    <section class="py-24 px-6 container mx-auto" id="syarat">
        
    </section>

    <section id="faq" class="py-24 px-6 bg-[#0a0a0a] relative overflow-hidden">
        <div class="container mx-auto relative z-10">
            <div class="text-center mb-16">
                <p class="text-pink-500 font-bold tracking-widest uppercase text-sm mb-3">Frequently Asked Question</p>
                <div class="h-1 w-24 bg-gradient-to-r from-pink-500 to-rose-600 mx-auto rounded-full mb-16"></div>
                <h3 class="text-gray-400 max-w-2xl mx-auto text-3xl md:text-3xl font-semibold leading-relaxed mb-14">
                   PERTANYAAN YANG SERING DIAJUKAN
                </h3>
                <p class="text-gray-400 max-w-3xl mx-auto leading-relaxed">
                   Berikut adalah beberapa pertanyaan yang sering diajukan oleh pengguna sebelum menggunakan layanan kami. Jika Anda memiliki pertanyaan lain, jangan ragu untuk menghubungi kami.
                </p>
            </div>
        </div>
    </section>

    <section id="daftar-sineas">

    </section>

    <section id="kontak">

    </section>

    <footer class="py-12 border-t border-white/5 bg-[#050505]">
        <div class="container mx-auto px-6 text-center text-gray-500 text-sm">
            <p>© 2026 Miniseri All rights reserved.</p>
        </div>
    </footer>

</body>
<script>
    const burger = document.getElementById('burger')
    const mobileMenu = document.getElementById('mobileMenu')

    burger.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden')
    })

    const menuItems = document.querySelectorAll('.menu-item');

    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            menuItems.forEach(i => {
                i.classList.remove('text-pink-500');
                i.classList.remove('text-gray-300');
            });

            this.classList.add('text-pink-500');
            this.classList.remove('text-gray-300');
        });
    });
</script>
</html>