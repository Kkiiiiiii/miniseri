@extends('management.layout')
@section('title', 'Miniseri | Data Pendaftaran Sineas')
@section('content')
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

        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header mb-0">Data Pendaftaran</h5>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Sineas</th>
                            <th>Email</th>
                            <th>No HP</th>
                            <th>Ketersediaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sinea as $s)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="fw-medium">{{ $s->nama_sineas }}</td>
                                <td><span class="badge bg-label-info">{{ $s->email }}</span></td>
                                <td>{{ $s->no_hp }}</td>
                                <td><span class="badge bg-label-info">{{ $s->ketersediaan }}</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editData{{ $s->id }}">
                                                <i class="ti ti-pencil me-1"></i> Edit
                                            </button>
                                            <form action="{{ route('delete-daftar', $s->id) }}" method="POST">
                                                @csrf
                                                <button class="dropdown-item text-danger"
                                                    onclick="return confirm('Yakin Hapus Data Pendidikan {{ $s->nama_sineas }}' + '?')">
                                                    <i class="ti ti-trash me-1"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <div class="modal fade" id="editData{{ $s->id }}" tabindex="-1">
                                <div class="modal-dialog modal-lg modal-simple">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

                                            <h4 class="text-center mb-4">Ubah Data Pendaftaran</h4>

                                            <form method="POST" action="{{ route('update-daftar', $s->id) }}">
                                                @csrf

                                                <div class="row g-3">
                                                    <div class="mb-3">
                                                        <label class="form-label">Nama Sinea</label>
                                                        <input type="text" name="nama_sineas" class="form-control"
                                                        value="{{ $s->nama_sineas }}">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Email</label>
                                                        <input type="text" name="email" class="form-control"
                                                            value="{{ $s->email }}">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">No HP</label>
                                                        <input type="number" name="no_hp" class="form-control"
                                                            value="{{ $s->no_hp }}">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Ketersediaan</label>
                                                        <select name="ketersediaan" class="form-select">
                                                            <option value="ya" {{ $s->ketersediaan == 'ya' ? 'selected' : '' }}>Ya</option>
                                                            <option value="tidak" {{  $s->ketersediaan == 'tidak' ? 'selected' : '' }}>Tidak</option>
                                                        </select>
                                                    </div>


                                                    <div class="col-12 text-center mt-3">
                                                        <button class="btn btn-primary">Update</button>
                                                        <button type="button" class="btn btn-label-secondary"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-3 d-flex justify-content-center">
                {{-- {{ $sinea->links()}} --}}
            </div>
        </div>
    </div>
@endsection
