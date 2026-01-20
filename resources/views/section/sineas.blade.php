<div class="container py-5 text-center">
    <p class="text-magenta-gradient fw-bold text-uppercase small ls-widest mb-2">
        Sineas
    </p>

    <div class="mx-auto mb-4" style="height:4px;width:80px;background:#d63384;border-radius:10px;">
    </div>

    <h3 class="fw-bold text-secondary-emphasis mb-3">Trending Minggu Ini</h3>
    <p class="text-secondary mx-auto mb-5" style="max-width: 800px;">
        Berikut adalah beberapa daftar film utama dari Miniseri.id
    </p>


    <div class="row g-4">
        @foreach ($gambar as $g)
            <div class="col-md-4">
                <div class="glass-card h-100">
                    <div class="ratio ratio-4x3">
                        <img src="{{ asset('storage/' . $g->image) }}" class="w-100 h-100 object-fit-cover">
                    </div>

                    <div class="p-4">
                        <h4 class="h6 fw-bold">{{ $g->judul }}</h4>
                        <p class="text-magenta-gradient fw-bold small cursor" data-bs-toggle="modal"
                            data-bs-target="#details{{ $g->id }}">
                            Lihat Detail
                        </p>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="details{{ $g->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <img src="{{ asset('storage/' . $g->image) }}" class="img-fluid rounded"
                                            alt="{{ $g->judul }}">
                                    </div>

                                    <div class="col-md-8">
                                        <ul class="list-group list-group-flush">

                                            <li class="list-group-item">
                                                <h4 class="mb-2">{{ $g->judul }}</h4>
                                            </li>

                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col-4 fw-bold">Episode :</div>
                                                    <div class="col-8"> {{ $g->episode }}</div>
                                                </div>
                                            </li>

                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col-4 fw-bold">Rilis :</div>
                                                    <div class="col-8"> {{ $g->rilis }}</div>
                                                </div>
                                            </li>

                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col-4 fw-bold">Genre :</div>
                                                    <div class="col-8"> {{ $g->genre }}</div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
