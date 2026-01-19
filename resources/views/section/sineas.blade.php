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
            <div class="modal fade" id="details{{ $g->id }}" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/' . $g->image) }}" class="img-fluid">
                                </div>
                                <div class="col-md-8">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <h3>{{ $g->judul }}</h3>
                                        </li>
                                        <li class="list-group-item">Episode: {{ $g->episode }}</li>
                                        <li class="list-group-item">Rilis: {{ $g->rilis }}</li>
                                        <li class="list-group-item">Genre: {{ $g->genre }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
