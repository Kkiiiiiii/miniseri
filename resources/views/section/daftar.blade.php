<style>
    #daftar-sineas .hero-sineas {
        position: relative;
        max-width: 1200px;
        height: 520px;
        margin: 0 auto;
        border-radius: 28px;
        overflow: hidden;
    }

    #daftar-sineas .hero-sineas img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        image-rendering: auto;
    }

    #daftar-sineas .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to bottom,
            rgba(0,0,0,0.35),
            rgba(0,0,0,0.75)
        );
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 40px;
    }

    #daftar-sineas .hero-content {
        max-width: 820px;
        color: #fff;
    }

    #daftar-sineas .hero-content p,
    #daftar-sineas .hero-content h3 {
        text-shadow: 0 6px 20px rgba(0,0,0,0.4);
    }
</style>

    <div class="container-fluid py-5">
        <div class="hero-sineas">

            <img src="{{ asset('assets/image/joinSineas.jpg') }}" alt="Join Sineas">

            <div class="hero-overlay">
                <div class="hero-content">
                    <p class="text-magenta-gradient fw-bold text-uppercase small ls-widest mb-2">
                        Join Sineas
                    </p>

                    <div class="mx-auto mb-4"
                         style="height:4px;width:80px;background:#d63384;border-radius:10px;">
                    </div>

                    <h3 class="fw-bold mb-4">
                        AYO DAFTARKAN DIRI ANDA SEBAGAI SINEAS DI MINISERI.ID
                    </h3>

                    <p class="mb-4">
                        Dengan mendaftarkan diri anda sebagai sineas di Miniseri.id, Anda dapat menjadi bagian
                        dari komunitas sineas indonesia yang berdedikasi menghasilkan karya berkualitas dan menarik.
                    </p>

                    <p class="mb-5">
                        Harap dibaca dengan cermat pada syarat dan ketentuan yang berlaku sebelum mendaftar.
                    </p>

                    <button type="button"
                            class="btn btn-outline-pink px-5 py-3 rounded-pill"
                            data-bs-toggle="modal"
                            data-bs-target="#modalSineas">
                        Daftar Sineas
                    </button>
                </div>
            </div>
        </div>
    </div>


<div class="modal fade" id="modalSineas" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-white text-dark">
            <div class="modal-body p-4 p-md-5">
                <div class="d-flex justify-content-between align-items-start mb-4">
                    <div>
                        <h4 class="fw-bold mb-1">Daftar Sebagai Sineas</h4>
                        <p class="text-muted small">Pendaftaran karya film untuk aplikasi miniseri.id</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="{{ route('daftarSineas') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label fw-semibold small">Nama Sineas</label>
                        <input type="text" class="form-control  bg-light border-0" name="nama_sineas" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold small">Email</label>
                        <input type="email" class="form-control  bg-light border-0" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold small">No HP</label>
                        <input type="text" class="form-control bg-light border-0" name="no_hp" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold small">
                            Bersedia mengedit film sesuai format miniseri.id
                        </label>
                        <select class="form-select bg-light border-0" name="ketersediaan" required>
                            <option value="">Pilih</option>
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>
                        </select>
                        <span class="text-muted" style="font-size:12px;">
                            Vertical dan berdurasi 2–3 menit per <i>clip</i>
                        </span>
                    </div>

                    <div class="form-check small text-muted mb-4">
                        <input class="form-check-input border-dark" type="checkbox" required>
                        <label class="form-check-label">
                            Dengan ini saya yang memiliki hak penuh atas kepemilikan karya, dengan sadar dan tanpa paksaan mendaftarkan karya saya untuk dapat ditayangkan dan dipasarkan di platform miniseri.id
                        </label>
                    </div>

                    <div class="g-recaptcha mb-3"
                         data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>

                    <button type="submit" class="btn btn-pink w-100 py-3">
                        DAFTAR SEKARANG
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
