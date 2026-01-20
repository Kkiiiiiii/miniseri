@section('management.layout')
@section('title', 'InputData')
<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="" class="form-label">Judul</label>
        <input type="text" class="form-control-plaintext" name="judul">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Eps</label>
        <input type="text" class="form-control-plaintext" name="episode">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Rilis</label>
        <input type="text" class="form-control-plaintext" name="rilis">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Genre</label>
        <input type="text" class="form-control-plaintext" name="genre">
    </div>
    <button type="button" class="btn btn-dark">Kirim</button>
</form>
@endsection
