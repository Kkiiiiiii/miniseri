<<<<<<< HEAD
<style>/
=======
<style>
    /* Custom CSS untuk Navbar */
>>>>>>> f6bcbbc
    .navbar-glass {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(12px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

<<<<<<< HEAD
    
=======
    /* Warna default teks (Abu-abu) */
>>>>>>> f6bcbbc
    .nav-link {
        color: #d1d5db !important;
        font-size: 0.875rem;
        font-weight: 500;
        transition: all 0.3s ease;
        position: relative;
    }

<<<<<<< HEAD
   
=======
    /* Warna saat Hover */
>>>>>>> f6bcbbc
    .nav-link:hover {
        color: #f472b6 !important; /* Pink muda */
    }

    /* Warna saat ACTIVE (Sesuai permintaanmu) */
    .nav-link.active {
        color: #d63384 !important; /* Pink Magenta */
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
</style>

<nav class="navbar navbar-expand-md fixed-top navbar-glass px-lg-4 py-3">
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
                    <a class="nav-link active" href="#">Home</a>
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
                    <a class="nav-link" href="#">Daftar Sineas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('#nav-menu .nav-link');
        const navbarCollapse = document.querySelector('.navbar-collapse');
        const bsCollapse = new bootstrap.Collapse(navbarCollapse, {toggle: false});

        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navLinks.forEach(btn => btn.classList.remove('active'));
                
                this.classList.add('active');

                // (Opsional) Tutup menu mobile otomatis setelah klik (untuk UX yang lebih baik)
                if (window.innerWidth < 768) {
                    bsCollapse.hide();
                }
            });
        });
    });
</script>