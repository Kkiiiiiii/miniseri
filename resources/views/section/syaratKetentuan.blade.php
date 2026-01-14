 <div class="container-fluid py-5">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="{{ asset('assets/image/termNcondition.jpg') }}" class="w-100 h-100 object-fit-cover rounded"
                        style="min-height: 300px;">
                </div>

                <div class="col-md-6 d-flex flex-column justify-content-start px-4 px-md-5 py-4">
                    <p class="text-magenta-gradient fw-bold text-uppercase small ls-widest mb-2">Term And Condition</p>
                    <div class="mb-4" style="height: 4px; width: 80px; background: #d63384; border-radius: 10px;">
                    </div>
                    <h3 class="fw-bold text-secondary-emphasis mb-4">Syarat dan Ketentuan Kerja Sama</h3>
                    <p class="text-secondary mx-auto mb-5" style="max-width: 800px;">
                        Harap dibaca dengan cermat sebelum menggunakan layanan kami. Syarat dan ketentuan ini mengatur
                        penggunaan website dan layanan yang disediakan oleh kami untuk memastikan pengalaman yang aman
                        dan menyenangkan bagi semua pengguna.
                    </p>

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
