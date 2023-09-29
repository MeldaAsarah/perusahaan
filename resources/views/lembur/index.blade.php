@extends('template')
@section('judul_halaman','')
@section('konten')
<h2>Daftar Lembur Karyawan</h2>
<body style="background: lightgray">
 <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0-shadow rounded">
                <div class="card-body">
                    <a href="{{route('lembur.create')}}" class="btn btn-md btn-success mb-3">TAMBAH BLOG</a>
           <table class="table table-bordered">
             <thead>
                <tr>
                  <th scope="col">Id Karyawan </th>
                  <th scope="col">Tanggal Lembur</th>
                  <th scope="col"> Jumlah Lembur</th>
                  <th scope="col">AKSI</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($lemburs as $lembur)
                     <tr>
                        <td class="text-center">
                        {{ $lembur->idkaryawan }}
                        </td>
                        <td>{{ $lembur->tgllembur }}</td>
                        <td>{{ $lembur->jumlahlembur }}</td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"action="{{route('lembur.destroy', $lembur->id)}}" method="POST">
                        <a href="{{ route('lembur.edit', $lembur->id)}}" 
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
                {{$lemburs->links()}}
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