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
        body { font-family: 'Inter', sans-serif; }
        .glass { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.1); }
        .magenta-glow { box-shadow: 0 0 50px -12px rgba(219, 39, 119, 0.5); }
    </style>
</head>
<body class="bg-[#0a0a0a] text-white overflow-x-hidden">

    <nav class="fixed w-full z-50 glass top-0 px-6 py-4 flex justify-between items-center">
        <div class="flex items-center gap-2">
            <img src="miniseri.png" class="w-3xs h-12">
            <!-- <div class="w-10 h-10 bg-gradient-to-br from-pink-500 to-rose-600 rounded-lg flex items-center justify-center font-bold text-xl">M</div> -->
            <span class="text-xl font-extrabold tracking-tighter">MINISERI<span class="text-pink-500">.ID</span></span>
        </div>
        <div class="hidden md:flex gap-8 text-sm font-medium text-gray-300">
            <a href="#" class="hover:text-pink-500 transition">HOME</a>
            <a href="#tentangKami" class="hover:text-pink-500 transition">TENTANG KAMI</a>
            <a href="#" class="hover:text-pink-500 transition">SYARAT KETENTUAN</a>
            <a href="#" class="hover:text-pink-500 transition">FAQ</a>
            <a href="#" class="hover:text-pink-500 transition">DAFTAR SINEAS</a>
            <a href="#" class="hover:text-pink-500 transition">KONTAK</a>
        </div>
        <!-- <button class="px-6 py-2 bg-pink-600 hover:bg-pink-700 rounded-full text-sm font-bold transition">Buka Aplikasi</button> -->
         <a href=""></a>
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
                <h1 class="text-6xl md:text-7xl font-extrabold leading-[1.1]">Serunya Nonton <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-rose-400">Kapan Saja.</span></h1>
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

    <section class="py-24 px-6 container mx-auto">
        <div class="flex justify-between items-end mb-12">
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
            </div>
    </section>

    <section class="py-24 px-6 container mx-auto">
        <h4>123</h4>
    </section>

    <footer class="py-12 border-t border-white/5 bg-[#050505]">
        <div class="container mx-auto px-6 text-center text-gray-500 text-sm">
            <p>© 2026 Miniseri All rights reserved.</p>
        </div>
    </footer>

</body>
</html>