<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miniseri | Platform Video Potret</title>

    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/image/miniseri.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0a0a0a;
            color: white;
            overflow-x: hidden;
        }

        /* Custom Utilities untuk kemiripan dengan Tailwind */
        .text-magenta-gradient {
            background: linear-gradient(to right, #d63384, #ff758f);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 2rem;
            transition: all 0.3s ease;
        }

        .glass-card:hover {
            border-color: rgba(214, 51, 132, 0.5);
            transform: translateY(-5px);
        }

        .bg-glow {
            position: absolute;
            width: 500px;
            height: 500px;
            background: rgba(214, 51, 132, 0.1);
            filter: blur(120px);
            border-radius: 50%;
            z-index: -1;
        }

        /* Phone Frame Styling */
        .phone-mockup {
            width: 280px;
            height: 580px;
            background: #171717;
            border-radius: 3rem;
            border: 8px solid #262626;
            position: relative;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            outline: 1px solid rgba(255, 255, 255, 0.1);
        }

        .badge-pink {
            background: rgba(214, 51, 132, 0.2);
            color: #d63384;
            font-weight: bold;
            letter-spacing: 1px;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            display: inline-block;
        }

        .btn-pink {
            background-color: #d63384;
            color: white;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            transition: 0.3s;
        }

        .btn-outline-pink {
            background-color: #d63384;
            border: 2px solid #d63384;
            color: white;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-outline-pink:hover {
            background-color: #fff;
            color: #d63384;
            border-color: #d63384;
        }

        .btn-pink:hover {
            background-color: #b02a6a;
            color: white;
            transform: scale(1.05);
        }

        .modal-content {
            border-radius: 1.5rem;
            border: none;
        }
    </style>
</head>

<body>
    @if (session('success'))
        <div class="modal fade" id="successModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center p-4">


                    <div class="mb-3">
                        <div class="rounded-circle border border-success d-inline-flex align-items-center justify-content-center"
                            style="width:90px;height:90px;">
                            <svg width="40" height="40" fill="none" stroke="green" stroke-width="3"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                    </div>


                    <h3 class="fw-bold">Yay!</h3>


                    <p class="text-muted">
                        {{ session('success') }}
                    </p>

                    <button class="btn btn-primary px-4" data-bs-dismiss="modal">
                        OK
                    </button>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var successModal = new bootstrap.Modal(
                    document.getElementById('successModal')
                );
                successModal.show();
            });
        </script>
    @endif

    @include('layout')
    <section class="position-relative d-flex align-items-center min-vh-100 px-3 pt-5">
        <div class="bg-glow top-0 end-0"></div>

        <div class="container py-5">
            <div class="row align-items-center gy-4">

                <div class="col-lg-7 text-center text-lg-start order-2 order-lg-1">
                    <span class="badge-pink mb-3 text-uppercase small">Streaming Video Pendek #1</span>

                    <h1 class="display-4 display-md-2 fw-bolder lh-1 mb-4">
                        Serunya Nonton Miniseri <br>
                        <span class="text-magenta-gradient">Kapan Saja.</span>
                    </h1>

                    <p class="lead text-secondary mb-4 pe-lg-5 fs-6 fs-md-5">
                        Nikmati keseruan menonton miniseri favorit kapan saja dan di mana saja. Temukan berbagai cerita
                        menarik dalam format pendek.
                    </p>

                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3">
                        <a href="https://play.google.com/store/apps/details?id=id.miniseri.mobile"><img
                                src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                                height="40" alt="Play Store"></a>
                        <a href="https://apps.apple.com/id/app/miniseri/id6575369357?l=id"><img
                                src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg"
                                height="40" alt="App Store"></a>
                    </div>
                </div>

                <div class="col-lg-5 d-flex justify-content-center position-relative order-1 order-lg-2 mb-5 mb-lg-0">
                    <div class="phone-mockup" style="transform: scale(0.9);"> <img
                            src="https://images.unsplash.com/photo-1616469829581-73993eb86b02?q=80&w=1000&auto=format&fit=crop"
                            class="w-100 h-100 object-fit-cover opacity-75" alt="Preview">
                        <div class="position-absolute bottom-0 start-0 p-4 w-100 text-start"
                            style="background: linear-gradient(transparent, rgba(0,0,0,0.9))">
                            <p class="text-magenta-gradient fw-bold mb-0 small">Episode 05</p>
                            <h3 class="h6 fw-bold m-0 text-white">123</h3>
                        </div>
                    </div>

                    <div class="bg-glow translate-middle start-50 top-50 d-none d-md-block"
                        style="width: 300px; height: 300px; opacity: 0.5;"></div>
                </div>

            </div>
        </div>
    </section>

    <section id="tentangKami" class="py-5">
        <div class="container py-5 text-center">
            <p class="text-magenta-gradient fw-bold text-uppercase small ls-widest mb-2">Service We Provide</p>
            <div class="bg-magenta-gradient mx-auto mb-5"
                style="height: 4px; width: 80px; background: #d63384; border-radius: 10px;"></div>

            <h3 class="fw-bold text-secondary-emphasis mb-4">Platform Video Potrait Untuk Mini Series Untuk Semua
                Kalangan</h3>
            <p class="text-secondary mx-auto mb-5" style="max-width: 800px;">
                Miniseri.id adalah platform digital yang didedikasikan untuk film vertikal di Indonesia. Menawarkan
                format unik dimana kisah diceritakan melalui klip pendek.
            </p>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="glass-card p-5 h-100">
                        <div class="mx-auto mb-4 d-flex align-items-center justify-content-center"
                            style="width: 60px; height: 60px; background: rgba(214, 51, 132, 0.1); border-radius: 15px;">
                            <svg width="24" height="24" fill="currentColor" class="text-magenta-gradient"
                                viewBox="0 0 16 16">
                                <path
                                    d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                            </svg>
                        </div>
                        <h4 class="fw-bold mb-3">Hiburan Tanpa Batas</h4>
                        <p class="text-secondary small">Terdapat mini series yang bisa dinikmati oleh semua kalangan.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="glass-card p-5 h-100">
                        <div class="mx-auto mb-4 d-flex align-items-center justify-content-center"
                            style="width: 60px; height: 60px; background: rgba(214, 51, 132, 0.1); border-radius: 15px;">
                            <svg width="24" height="24" fill="currentColor" class="text-magenta-gradient"
                                viewBox="0 0 16 16">
                                <path
                                    d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9A1.5 1.5 0 0 1 1.5 3H2V1.78a1.5 1.5 0 0 1 1.864-1.454L12.136.326zM5 3h6V1.78a.5.5 0 0 0-.621-.485L5.429 2.54A.5.5 0 0 0 5 3z" />
                            </svg>
                        </div>
                        <h4 class="fw-bold mb-3">Monetisasi Konten</h4>
                        <p class="text-secondary small">Creator dapat memonetisasi konten mini series yang dibuat.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="glass-card p-5 h-100">
                        <div class="mx-auto mb-4 d-flex align-items-center justify-content-center"
                            style="width: 60px; height: 60px; background: rgba(214, 51, 132, 0.1); border-radius: 15px;">
                            <svg width="24" height="24" fill="currentColor" class="text-magenta-gradient"
                                viewBox="0 0 16 16">
                                <path
                                    d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5v-5A3.5 3.5 0 0 0 10.5 2h-5zm.5 3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </div>
                        <h4 class="fw-bold mb-3">Gratis & Berbayar</h4>
                        <p class="text-secondary small">Terdapat pilihan konten sesuai dengan preferensi pengguna.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="syarat" class="py-5">
        <div class="container-fluid py-5">
            <div class="row g-0">

                <div class="col-md-6">
                    <img src="{{ asset('assets/image/bg-pc.jpg') }}" class="w-100 h-100 object-fit-cover rounded"
                        style="min-height: 300px;">
                </div>

                <div class="col-md-6 d-flex flex-column justify-content-start px-4 px-md-5 py-4">
                    <p class="text-magenta-gradient fw-bold text-uppercase small ls-widest mb-2">TERM AND CONDITION</p>
                    <div class="mb-4" style="height: 4px; width: 80px; background: #d63384; border-radius: 10px;">
                    </div>
                    <h3 class="fw-bold text-secondary-emphasis mb-4">Syarat dan Ketentuan Kerja Sama</h3>
                    <p class="text-secondary mx-auto mb-5" style="max-width: 800px;">
                        Harap dibaca dengan cermat sebelum menggunakan layanan kami. Syarat dan ketentuan ini mengatur
                        penggunaan website dan layanan yang disediakan oleh kami untuk memastikan pengalaman yang aman
                        dan menyenangkan bagi semua pengguna.
                    </p>
                    {{-- <a href="{{ asset('assets/ketentuan.pdf') }}" target="_blank">
                    <button class="btn mt-3 btn-outline-primary">Baca Detail Lengkap</button>
                </a> --}}
                    <div class="container">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#pdf"
                            class="btn btn-outline-pink rounded-pill">
                            Baca Detail Lengkap
                        </button>
                    </div>

                    <div class="modal fade" id="pdf" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Preview PDF</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="{{ asset('assets/ketentuan.pdf') }}" width="100%" height="600px">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="py-5">
        <div class="container py-5 text-center">
            <p class="text-magenta-gradient fw-bold text-uppercase small ls-widest mb-2">
                FREQUENTLY ASKED QUESTIONS
            </p>
            <div class="bg-magenta-gradient mx-auto mb-5"
                style="height: 4px; width: 80px; background: #d63384; border-radius: 10px;"></div>
            <details open>
                <summary>.</summary>
            </details>
        </div>
    </section>

    <section id="daftar-sineas">
        <div class="container text-center py-5">
            <button type="button" class="btn btn-outline-pink px-5 py-3 rounded-pill" data-bs-toggle="modal"
                data-bs-target="#modalSineas">
                Daftar Sineas
            </button>
        </div>
    </section>

    <div class="modal fade" id="modalSineas" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-white text-dark">
                <div class="modal-body p-4 p-md-5">
                    <div class="d-flex justify-content-between align-items-start mb-4">
                        <div>
                            <h4 class="fw-bold mb-1">Daftar Sebagai Sineas</h2>
                                <p class="text-muted small">Pendaftaran karya film untuk aplikasi miniseri.id</p>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <form action="{{ route('daftarSineas') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-semibold small">Nama Sineas</label>
                            <input type="text" class="form-control form-control-lg bg-light border-0"
                                name="nama_sineas" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold small">Email</label>
                            <input type="email" class="form-control form-control-lg bg-light border-0"
                                name="email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold small">No HP</label>
                            <input type="text" class="form-control form-control-lg bg-light border-0"
                                name="no_hp" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-semibold small">Bersedia mengedit film sesuai format
                                miniseri.id</label>
                            <select class="form-select  bg-light border-0" name="ketersediaan" required>
                                <option value="">Pilih</option>
                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>
                            </select>
                            <span class="text-muted fs-sm mt-1" style="font-size: 12px;">
                                Vertical dan berdurasi 2-3 menit per <i>clip</i></span>
                        </div>
                        <div class="form-check small text-muted mb-4">
                            <input class="form-check-input" type="checkbox" id="agree">
                            <label class="form-check-label" for="agree">
                                Dengan ini saya yang memiliki hak penuh atas kepemilikan karya, dengan sadar dan tanpa
                                paksaan mendaftarkan karya saya untuk dapat ditayangkan dan dipasarkan di platform
                                miniseri.id
                            </label>
                        </div>
                        <div class="g-recaptcha mb-3" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                        <button type="submit" class="btn btn-pink w-100 py-3">DAFTAR SEKARANG</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="py-5 border-top border-secondary border-opacity-10 mt-5">
        <div class="container text-center text-secondary small">
            <p>© 2026 Miniseri All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>
