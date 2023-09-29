@extends('template')
@section('judul_halaman','')
@section('konten')

<div class="container mt-5 mb-5">
  <div class="row">
   <div class="col-md-12">
    <div class="card-border-0 shadow rounded">
     <div class="card-body">
      <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
     <label class="font-weight-bold">ID KARYAWAN </label>
         <input type="text" class="form-control @error('idkaryawan') is-invalid @enderror" name="idkaryawan" value="{{old('idkaryawan', $karyawan->idkaryawan)}}" placeholder="Masukkan Id ">
         @error('idkaryawan')
          <div class="alert alert-danger mt-2">
           {{$message}}
          </div>
        @enderror
        </div>
        <div class="form-group"> 
         <label class="font-weigh-bold"> NAMA KARYAWAN</label>
         <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{old('nama', $karyawan->nama)}}" placeholder="Masukan Nama ">
         @error('nama')
       <div class="alert alert-danger mt-2">
         {{$message}}
       </div>
      @enderror
     </div>
     <div class="form-group">
     <label class="font-weight-bold">JENIS KELAMIN </label>
         <input type="text" class="form-control @error('jk') is-invalid @enderror" name="jk" value="{{old('jk', $karyawan->jk)}}" placeholder="Masukkan Jenis kelamin ">
         @error('jk')
          <div class="alert alert-danger mt-2">
           {{$message}}
          </div>
        @enderror
</div>
        <div class="form-group">
     <label class="font-weight-bold">TEMPAT LAHIR  </label>
         <input type="text" class="form-control @error('tempatlahir') is-invalid @enderror" name="tempatlahir" value="{{old('tempatlahir', $karyawan->tempatlahir)}}" placeholder="Masukkan Tempat Lahir  ">
         @error('tempatlahir')
          <div class="alert alert-danger mt-2">
           {{$message}}
          </div>
        @enderror
      </div>
        <div class="form-group">
     <label class="font-weight-bold"> TANGGAL LAHIR </label>
         <input type="text" class="form-control @error('tgllahir') is-invalid @enderror" name="tgllahir" value="{{old('tgllahir', $karyawan->tgllahir)}}" placeholder="Masukkan Tanggal lahir  ">
         @error('tgllahir')
          <div class="alert alert-danger mt-2">
           {{$message}}
          </div>
        @enderror
    </div>
    <div class="form-group">
     <label class="font-weight-bold">AGAMA  </label>
         <input type="text" class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{old('agama', $karyawan->agama)}}" placeholder="Masukkan Agama  ">
         @error('agama')
          <div class="alert alert-danger mt-2">
           {{$message}}
          </div>
        @enderror
</div>
        <div class="form-group">
     <label class="font-weight-bold"> NO TELEPON  </label>
         <input type="text" class="form-control @error('notlp') is-invalid @enderror" name="notlp" value="{{old('notlp', $karyawan->notlp)}}" placeholder="Masukkan No Telpon  ">
         @error('notlp')
          <div class="alert alert-danger mt-2">
           {{$message}}
          </div>
        @enderror
</div>
<div class="form-group">
     <label class="font-weight-bold"> ALAMAT </label>
         <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{old('alamat', $karyawan->alamat)}}" placeholder="Masukkan Alamat  ">
         @error('alamat')
          <div class="alert alert-danger mt-2">
           {{$message}}
          </div>
        @enderror
</div>
<div class="form-group">
     <label class="font-weight-bold">ID GOLONGAN  </label>
         <input type="text" class="form-control @error('idgolongan') is-invalid @enderror" name="idgolongan" value="{{old('idgolongan', $karyawan->idgolongan)}}" placeholder="Masukkan id Golongan  ">
         @error('idgolongan')
          <div class="alert alert-danger mt-2">
           {{$message}}
          </div>
        @enderror
     <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
     <button type="reset" class="btn btn-md btn-warning">RESET</button>
   </form>
     </div>
    </div>
   </div>
  </div>
</div>

@endsection
