@extends('management.layout')
@section('title', 'Sineas')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
              <div class="phone-mockup">
                    <img
                        src="{{ asset('assets/image/background2.jpg') }}"
                        class="w-100 h-100 object-fit-cover opacity-75"
                        alt="Preview">
                    <div class="position-absolute bottom-0 start-0 p-4 w-100 text-start"
                         style="background:linear-gradient(transparent,rgba(0,0,0,0.9))">
                        <p class="text-magenta-gradient fw-bold mb-0 small">Episode 05</p>
                        <h3 class="h6 fw-bold m-0 text-white">123</h3>
                    </div>
                </div>
        </div>
        <div class="col-md-8">
            <a href="#" type="button" class="btn btn-dark">
            <i class="ti ti-plus me-1"></i>
                Tambah Sinea</a>
        </div>
    </div>
</div>
@endsection
