@extends('template')
@section('judul_halaman','')
@section('konten')
<div class="container mt-5 mb-5">
<div class="row">
<div class="col-md-12">
<div class="card border-0 shadow rounded">
<div class="card-body">
<form action="{{ route('golongan.store') }}" method="POST"
 enctype="multipart/form-data">
@csrf
<div class="form-group">
<label class="font-weight-bold">ID GOLONGAN </label>
<input type="text" class="form-control @error('idgolongan') is invalid @enderror" name="idgolongan" value="{{ old('idgolongan') }}" placeholder="Masukkan Id">

<!-- error message untuk title -->
@error('idgolongan')
<div class="alert alert-danger mt-2">
{{ $message }}
</div>
@enderror
</div>
<div class="form-group">
<label class="font-weight-bold">NAMA GOLONGAN </label>
<input type="text" class="form-control @error('namagolongan') is-invalid @enderror" name="namagolongan" value="{{ old('namagolongan') }}" placeholder="Masukkan Nama Golongan">

<!-- error message untuk title -->
@error('namagolongan')
<div class="alert alert-danger mt-2">
{{ $message }}
</div>
@enderror
</div>
<div class="form-group">
<label class="font-weight-bold">GAji POKOK  </label>
<input type="text" class="form-control @error('gajipokok') is-invalid @enderror" name="gajipokok" value="{{ old('gajipokok') }}" placeholder="">

<!-- error message untuk title -->
@error('gajipokok')
<div class="alert alert-danger mt-2">
{{ $message }}
</div>
@enderror
</div>



<button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
<button type="reset" class="btn btn-md btn-warning">RESET</button>
</form>
</div>
</div>
</div>
</div>
</div>

@endsection