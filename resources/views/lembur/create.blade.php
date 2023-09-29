@extends('template')
@section('judul_halaman','')
@section('konten')
<div class="container mt-5 mb-5">
<div class="row">
<div class="col-md-12">
<div class="card border-0 shadow rounded">
<div class="card-body">
<form action="{{ route('lembur.store') }}" method="POST"
 enctype="multipart/form-data">
@csrf
<div class="form-group">
<label class="font-weight-bold">ID KARYAWAN </label>
<input type="text" class="form-control @error('idkaryawan') is invalid @enderror" name="idkaryawan" value="{{ old('idkaryawan') }}" placeholder="Masukkan Id">

<!-- error message untuk title -->
@error('idkaryawan')
<div class="alert alert-danger mt-2">
{{ $message }}
</div>
@enderror
</div>
<div class="form-group">
<label class="font-weight-bold">TANGGAL LEMBUR </label>
<input type="date" class="form-control @error('tgllembur') is-invalid @enderror" name="tgllembur" value="{{ old('tgllembur') }}" placeholder="Masukkan Tanggal">

<!-- error message untuk title -->
@error('tgllembur')
<div class="alert alert-danger mt-2">
{{ $message }}
</div>
@enderror
</div>
<div class="form-group">
<label class="font-weight-bold">JUMLAH LEMBUR  </label>
<input type="text" class="form-control @error('jumlahlembur') is-invalid @enderror" name="jumlahlembur" value="{{ old('jumlahlembur') }}" placeholder="">

<!-- error message untuk title -->
@error('jumlahlembur')
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