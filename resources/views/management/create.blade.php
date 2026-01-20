@extends('management.layout')
@section('title', 'Miniseri | Sineas')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mb-0">
            <h4 class="mb-0">Data Sinea</h4>
            <button type="button" class="btn btn-dark" data-bs-target="#DataAdd" data-bs-toggle="modal">
                <i class="ti ti-plus me-1"></i>
                Tambah sinea</button>
        </div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row g-4 mt-3">
            @forelse ($gambar as $g)
                <div class="col-md-4">
                    <div class="phone-mockup position-relative rounded overflow-hidden">
                        <img src="{{ asset('storage/' . $g->image) }}" class="w-100 h-100 object-fit-cover opacity-75"
                            alt="{{ $g->judul }}">

                        <div class="position-absolute bottom-0 start-0 p-3 w-100"
                            style="background:linear-gradient(transparent,rgba(0,0,0,.85))">
                            <h6 class="fw-bold text-white mb-1">{{ $g->judul }}</h6>
                            <small class="text-magenta-gradient">
                                Episode {{ $g->episode }} • {{ $g->genre }}<br>
                                Rilis: {{ $g->rilis }}
                            </small>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center text-muted py-5">
                    Belum ada data sinea.
                </div>
            @endforelse
        </div>

    </div>

    <div class="modal fade" id="DataAdd" tabindex="-1">
        <div class="modal-dialog modal-lg modal-simple">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

                    <div class="text-center">
                        <h4 class="text-magenta-gradient fw-bold text-uppercase small ls-widest">Tambah Data Sinea</h4>
                                    <div class="mx-auto mb-4"
                             style="height:4px;width:80px;background:#d63384;border-radius:10px;">
                        </div>
                    </div>

                    <form method="POST" action="{{ route('input') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row g-3">
                            <div class="col-md-4 text-center">
                                <img src="" id="previewGambar" class="img-thumbnail mb-2 d-none" width="150">
                                <input type="file" class="form-control" name="image" id="inputGambar" accept="image/*">
                            </div>

                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label class="form-label">Judul</label>
                                    <input type="text" name="judul" class="form-control" required>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Eps</label>
                                        <input type="text" name="episode" class="form-control" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Rilis</label>
                                        <input type="date" name="rilis" class="form-control" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Genre</label>
                                        <input type="text" name="genre" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 d-grid text-center mt-3">
                                <button class="btn btn-primary px-4">Tambah</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

