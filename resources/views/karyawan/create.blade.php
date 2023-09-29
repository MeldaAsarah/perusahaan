@extends('template')
@section('judul_halaman','')
@section('konten')
<div class="container mt-5 mb-5">
<div class="row">
<div class="col-md-12">
<div class="card border-0 shadow rounded">
<div class="card-body">
<form action="{{ route('karyawan.store') }}" method="POST"
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
<label class="font-weight-bold">NAMA KARYAWAN</label>
<input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama">

<!-- error message untuk title -->
@error('nama')
<div class="alert alert-danger mt-2">
{{ $message }}
</div>
@enderror
</div>
<div class="form-group">
<label class="font-weight-bold">JENIS KELAMIN </label>
<input type="text" class="form-control @error('jk') is-invalid @enderror" name="jk" value="{{ old('jk') }}" placeholder="">

<!-- error message untuk title -->
@error('jk')
<div class="alert alert-danger mt-2">
{{ $message }}
</div>
@enderror
</div>

<div class="form-group">
<label class="font-weight-bold">TEMPAT LAHIR   </label>
<input type="text" class="form-control @error('tempatlahirr') is-invalid @enderror" name="tempatlahir" value="{{ old('tempatlahir') }}" placeholder="Masukkan tempat lahir ">

<!-- error message untuk title -->
@error('tempatlahir')
<div class="alert alert-danger mt-2">
{{ $message }}
</div>
@enderror
</div>

<div class="form-group">
<label class="font-weight-bold"> TANGGAL LAHIR </label>
<input type="text" class="form-control @error('tgllahir') is-invalid @enderror" name="tgllahir" value="{{ old('tgllahir') }}" placeholder="">

<!-- error message untuk title -->
@error('tgllahir')
<div class="alert alert-danger mt-2">
{{ $message }}
</div>
@enderror
</div>

<div class="form-group">
<label class="font-weight-bold">AGAMA  </label>
<input type="text" class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{ old('agama') }}" placeholder="">

<!-- error message untuk title -->
@error('agama')
<div class="alert alert-danger mt-2">
{{ $message }}
</div>
@enderror
</div>

<div class="form-group">
<label class="font-weight-bold"> NO TELEPON  </label>
<input type="text" class="form-control @error('notlp') is-invalid @enderror" name="notlp" value="{{ old('notlp') }}" placeholder="Masukkan nomor">

<!-- error message untuk title -->
@error('notlp')
<div class="alert alert-danger mt-2">
{{ $message }}
</div>
@enderror
</div>

<div class="form-group">
<label class="font-weight-bold">ALAMAT  </label>
<input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan Alamat ">

<!-- error message untuk title -->
@error('alamat')
<div class="alert alert-danger mt-2">
{{ $message }}
</div>
@enderror
</div>

<div class="form-group">
<label class="font-weight-bold"> ID GOLONGAN </label>
<input type="text" class="form-control @error('idgolongan') is-invalid @enderror" name="idgolongan" value="{{ old('idgolongan') }}" placeholder="Masukkan id Golongan ">

<!-- error message untuk title -->
@error('idgolongan')
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