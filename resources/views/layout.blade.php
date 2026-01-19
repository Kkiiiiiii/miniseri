<style>
    .navbar-glass {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(12px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .nav-link {
        color: #d1d5db !important;
        font-size: 0.875rem;
        font-weight: 800;
        transition: all 0.3s ease;
        position: relative;
    }

    .cursor {
        cursor: pointer
    }

    .nav-link:hover {
        color: #f472b6 !important;
    }

    .nav-link.active {
        color: #d63384 !important;
        /* Pink Magenta */
        font-weight: 800;
    }

    .navbar-brand {
        font-weight: 800;
        letter-spacing: -0.05em;
    }

    .burger-line {
        display: block;
        width: 24px;
        height: 2px;
        background-color: white;
        margin: 4px 0;
    }

    .navbar-toggler:focus {
        box-shadow: none;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: 'Inter', sans-serif;
        background-color: #0a0a0a;
        color: white;
        overflow-x: hidden;
    }

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

    .glass-card .icons{
        all: unset;
        cursor: pointer;
        transition: transform 0.25s ease;
    }

    .glass-card .icons:hover{
        transform: rotate(360deg);
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

    details summary {
        cursor: pointer;
        float: left;
    }

    body {
        padding-top: 90px;
    }
</style>

<nav class="navbar navbar-expand-md fixed-top navbar-glass px-lg-4 py-3" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center gap-2 text-white" href="#">
            <img src="{{ asset('assets/image/miniseri.png') }}" alt="Logo" height="40">
            <span class="fs-4">MINISERI<span style="color: #d63384;">.ID</span></span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto gap-lg-4 pt-3 pt-md-0 text-uppercase" id="nav-menu">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tentangKami">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#syarat">Syarat Ketentuan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sineas">Sineas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#daftar-sineas">Daftar Sineas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const sections = document.querySelectorAll("section[id]");
        const navLinks = document.querySelectorAll("#nav-menu .nav-link");

        const navbarCollapse = document.querySelector('.navbar-collapse');
        const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
            toggle: false
        });


        const observer = new IntersectionObserver(
            entries => {
                entries.forEach(e => {
                    if (e.isIntersecting) {
                        const id = e.target.id;

                        navLinks.forEach(link => {
                            link.classList.remove("active");
                            if (link.getAttribute("href") === `#${id}`) {
                                link.classList.add("active");
                            }
                            if (window.innerWidth < 768) {
                                bsCollapse.hide();
                            }

                        });
                    }
                });
            }, {
                rootMargin: "-80px 0px -50% 0px",
                threshold: 0
            }
        );

        sections.forEach(section => observer.observe(section));
    });
</script>
