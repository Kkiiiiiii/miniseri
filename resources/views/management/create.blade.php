@extends('management.layout')
@section('title', 'Sinea')
@section(section: 'content')
    <div class="container">
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

        <div class="row">
            @foreach ($gambar as $g)
            <div class="col-md-4">
                <div class="phone-mockup">
                    <img src="{{ asset('storage/' . $g->image) }}" class="w-100 h-100 object-fit-cover opacity-75"
                        alt="Preview">
                    <div class="position-absolute bottom-0 start-0 p-4 w-100 text-start"
                        style="background:linear-gradient(transparent,rgba(0,0,0,0.9))">
                        <h3 class="h6 fw-bold m-0 text-white">{{ $g->judul }}</h3>
                        <p class="text-magenta-gradient fw-bold mb-0 small">Eps : {{ $g->episode }}</p>
                        <p class="text-magenta-gradient fw-bold mb-0 small">Rilis : {{ $g->rilis }}</p>
                        <p class="text-magenta-gradient fw-bold mb-0 small">Genre : {{ $g->genre }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-8">
                <div class="d-flex justify-content-between">
                    <h4 class="mb-0">Data Sinea</h4>
                    <button type="button" class="btn btn-dark" data-bs-target="#DataAdd"
                        data-bs-toggle="modal">
                        <i class="ti ti-plus me-1"></i>
                        Tambah sinea</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="DataAdd" tabindex="-1">
        <div class="modal-dialog modal-lg modal-simple">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

                    <h4 class="text-center mb-4">Tambah Data Sinea</h4>

                    <form method="POST" action="{{ route('input') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row g-3">
                            <div class="mb-3">
                                <label class="form-label" for="image">Gambar</label>
                                <img src="" width="100" class="mb-2 img-thumbnail " />
                                <input type="file" class="form-control" name="image" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Judul</label>
                                <input type="text" name="judul" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Eps</label>
                                <input type="text" name="episode" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Rilis</label>
                                <input type="date" name="rilis" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Genre</label>
                                <input type="text" name="genre" class="form-control">
                            </div>


                            <div class="col-12 text-center mt-3">
                                <button class="btn btn-primary">Tambah</button>
                                <button type="button" class="btn btn-label-secondary"
                                    data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
