<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miniseri | Platform Video Potret</title>

    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fontawesome/css/all.min.css') }}" rel="stylesheet">
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

        details summary{
            cursor: pointer;
            float: left;
        }
        body {
    padding-top: 90px;
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
    <section id="banner" class="py-5">
        @include('section.banner')
    </section>
    <section id="tentangKami" class="py-5">
        @include('section.tentangKami')

    </section>
    <section id="syarat" class="py-5">
        @include('section.syaratKetentuan')
    </section>
    <section id="faq" class="py-5">
        @include('section.faq')
    </section>
    <section id="sineas" class="py-5">

        @include('section.sineas')
    </section>
    <section id="daftar-sineas" class="py-5">
        @include('section.daftar')

    </section>
    <section id="kontak" class="py-5">
        @include('section.kontak')
    </section>

    <footer class="py-5 border-top border-secondary border-opacity-10 mt-5">
        <div class="container text-center text-secondary small">
            <p>© 2026 Miniseri All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script>
document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll("#nav-menu .nav-link");

    const observer = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.id;

                    navLinks.forEach(link => {
                        link.classList.remove("active");
                        if (link.getAttribute("href") === `#${id}`) {
                            link.classList.add("active");
                        }
                    });
                }
            });
        },
        {
            rootMargin: "-80px 0px -50% 0px",
            threshold: 0
        }
    );

    sections.forEach(section => observer.observe(section));
});
</script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>
