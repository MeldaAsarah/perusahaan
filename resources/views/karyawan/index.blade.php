@extends('template')
@section('judul_halaman','')
@section('konten')
<h2>Daftar Karyawan</h2>
<body style="background: lightgray">
 <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0-shadow rounded">
                <div class="card-body">
                    <a href="{{route('karyawan.create')}}" class="btn btn-md btn-success mb-3">TAMBAH BLOG</a>
           <table class="table table-bordered">
             <thead>
                <tr>
                  <th scope="col">ID KARYAWAN</th>
                  <th scope="col">NAMA KARYAWAN</th>
                  <th scope="col">JENIS KELAMIN</th>
                  <th scope="col">TEMPAT LAHIR</th>
                  <th scope="col">TANGGAL LAHIR</th>
                  <th scope="col">AGAMA</th>
                  <th scope="col">NO TELPON</th>
                  <th scope="col">ALAMAT</th>
                  <th scope="col">ID GOLONGAN</th>
                  <th scope="col">AKSI</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($karyawans as $karyawan)
                     <tr>
                        <td class="text-center">
                        {{ $karyawan->idkaryawan }}
                        </td>
                        <td>{{ $karyawan->nama }}</td>
                        <td>{{ $karyawan->jk }}</td>
                        <td>{{ $karyawan->tempatlahir }}</td>
                        <td>{{ $karyawan->tgllahir }}</td>
                        <td>{{ $karyawan->agama }}</td>
                        <td>{{ $karyawan->notlp }}</td>
                        <td>{{ $karyawan->alamat }}</td>
                        <td>{{ $karyawan->idgolongan }}</td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"action="{{route('karyawan.destroy', $karyawan->id)}}" method="POST">
                        <a href="{{ route('karyawan.edit', $karyawan->id)}}" 
                        class="btn btn-sm btn-primary">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                      </td>
                    </tr>
                    @empty
                       <div class="alert alert-danger">
                        Data Blog belum Tersedia
                       </div>
                  @endforelse
                 </tbody>
                </tbale>
                {{$karyawans->links()}}
             </div>
           </div>
         </div>          
       </div>
     </div>            
                  
    <script
src="https://cdnjs.cloudflare.com/ajax/libs//jquery/3.5.1/jquery.min.js"></script>
    <script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrapt.min.js">
</script>
    <script     
src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
       //message with toastr
       @if(session()->has('success'))

         toastr.success('{{ session('success') }}','BERHASIL!');

       @elseif(session()-> has('error'))

         toastr.error('{{ session('error')}}','GAGAL!');
         @endif
</script>
@endsection         