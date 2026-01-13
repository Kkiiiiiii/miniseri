 <section id="daftar-sineas">
        <div class="container-fluid py-5">
            <div class="row g-0">
                <div class="sineas col-md-6">
                    {{--  --}}
                </div>
            </div>
        </div>
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
                            <h4 class="fw-bold mb-1">Daftar Sebagai Sineas</h4>
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
