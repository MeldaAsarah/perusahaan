@extends('template')
@section('judul_halaman','')
@section('konten')

<div class="container mt-5 mb-5">
  <div class="row">
   <div class="col-md-12">
    <div class="card-border-0 shadow rounded">
     <div class="card-body">
      <form action="{{ route('penggajian.update', $penggajian->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
     <label class="font-weight-bold">ID KARYAWAN </label>
         <input type="text" class="form-control @error('idkaryawan') is-invalid @enderror" name="idkaryawan" value="{{old('idkaryawan', $penggajian->idkaryawan)}}" placeholder="Masukkan Id ">
         @error('idkaryawan')
          <div class="alert alert-danger mt-2">
           {{$message}}
          </div>
        @enderror
        </div>
        <div class="form-group"> 
         <label class="font-weigh-bold"> TANGGAL </label>
         <input type="text" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{old('tanggal', $penggajian->tanggal)}}" placeholder="Masukan Tanggal ">
         @error('tanggal')
       <div class="alert alert-danger mt-2">
         {{$message}}
       </div>
      @enderror
     </div>
     <div class="form-group">
     <label class="font-weight-bold">JUMLAH LEMBUR  </label>
         <input type="text" class="form-control @error('jmlhlembur') is-invalid @enderror" name="jmlhlembur" value="{{old('jmlhlembur', $penggajian->jmlhlembur)}}" placeholder="Masukkan Jumlah lembur  ">
         @error('jmlhlembur')
          <div class="alert alert-danger mt-2">
           {{$message}}
          </div>
        @enderror
</div>
        <div class="form-group">
     <label class="font-weight-bold"> JUMLAH GAJI  </label>
         <input type="text" class="form-control @error('jmlhgaji') is-invalid @enderror" name="jmlhgaji" value="{{old('jmlhgaji', $penggajian->jmlhgaji)}}" placeholder="Masukkan Jumlah Gaji   ">
         @error('jmlhgaji')
          <div class="alert alert-danger mt-2">
           {{$message}}
          </div>
        @enderror
      </div>
        <div class="form-group">
     <label class="font-weight-bold"> POTONGAN  </label>
         <input type="text" class="form-control @error('potongan') is-invalid @enderror" name="potongan" value="{{old('potongan', $penggajian->potongan)}}" placeholder="Masukkan Potongan   ">
         @error('potongan')
          <div class="alert alert-danger mt-2">
           {{$message}}
          </div>
        @enderror
    </div>
    <div class="form-group">
     <label class="font-weight-bold">TOTAL GAJI DITERIMA  </label>
         <input type="text" class="form-control @error('totalgaji') is-invalid @enderror" name="totalgaji" value="{{old('totalgaji', $penggajian->totalgaji)}}" placeholder="Masukkan Total gaji  ">
         @error('totalgaji')
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
