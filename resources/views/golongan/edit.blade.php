@extends('template')
@section('judul_halaman','')
@section('konten')

<div class="container mt-5 mb-5">
  <div class="row">
   <div class="col-md-12">
    <div class="card-border-0 shadow rounded">
     <div class="card-body">
      <form action="{{ route('golongan.update', $golongan->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
     <label class="font-weight-bold">ID GOLONGAN </label>
         <input type="text" class="form-control @error('idgolongan') is-invalid @enderror" name="idgolongan" value="{{old('idgolongan', $golongan->idgolongan)}}" placeholder="Masukkan Id ">
         @error('idgolongan')
          <div class="alert alert-danger mt-2">
           {{$message}}
          </div>
        @enderror
        </div>
        <div class="form-group"> 
         <label class="font-weigh-bold"> NAMA GOLONGAN  </label>
         <input type="text" class="form-control @error('namagolongan') is-invalid @enderror" name="namagolongan" value="{{old('namagolongan', $golongan->namagolongan)}}" placeholder="Masukan Nama Golongan ">
         @error('namagolongan')
       <div class="alert alert-danger mt-2">
         {{$message}}
       </div>
      @enderror
     </div>
     <div class="form-group">
     <label class="font-weight-bold"> GAJI POKOK  </label>
         <input type="text" class="form-control @error('gajipokok') is-invalid @enderror" name="gajipokok" value="{{old('gajipokok', $golongan->gajipokok)}}" placeholder="Masukkan  Gaji pokok  ">
         @error('gajipokok')
          <div class="alert alert-danger mt-2">
           {{$message}}
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
