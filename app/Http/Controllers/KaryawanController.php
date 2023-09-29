<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    //
    public function index()
    {
        $karyawans=Karyawan::latest()->paginate(10);
        return view('karyawan.index', compact('karyawans'));
    }
//Fungsi Menyimpan/Save
public function create()
 {
 return view('karyawan.create');
  }
 public function store(Request $request)
 {
  $this->validate($request,[
 'idkaryawan'=>'required',
 'nama'=>'required',
 'jk'=>'required',
 'tempatlahir'=>'required',
 'tgllahir'=>'required',
 'agama'=>'required',
 'notlp'=>'required',
 'alamat'=>'required',
 'idgolongan'=>'required',
  ]);
  DB::table('karyawans')->insert([
    'idkaryawan'=>$request->idkaryawan,
    'nama'=>$request->nama,
    'jk'=>$request->jk,
    'tempatlahir'=>$request->tempatlahir,
    'tgllahir'=>$request->tgllahir,
    'agama'=>$request->agama,
    'notlp'=>$request->notlp,
    'alamat'=>$request->alamat,
    'idgolongan'=>$request->idgolongan,
  ]);
  if(DB::table('karyawans')){
    return redirect()->route('karyawan.index')->with(['success'=>'Data berhasil disimpan']);
 }else{
    return redirect()->route('karyawan.index')->with(['error'=>'Data gagal disimpan']);
 }
}
//  FUNGSI EDIT
public function edit(Karyawan $karyawan)
{
return view('karyawan.edit', compact('karyawan'));
}
public function update(Request $request, Karyawan $karyawan)
{
$this->validate($request, [
    'idkaryawan'=>'required',
    'nama'=>'required',
    'jk'=>'required',
    'tempatlahir'=>'required',
    'tgllahir'=>'required',
    'agama'=>'required',
    'notlp'=>'required',
    'alamat'=>'required',
    'idgolongan'=>'required',
]);
//get data karyawan by ID
$karyawan=Karyawan::findOrFail($karyawan->id);
$karyawan->update([
    'idkaryawan'=>$request->idkaryawan,
    'nama'=>$request->nama,
    'jk'=>$request->jk,
    'tempatlahir'=>$request->tempatlahir,
    'tgllahir'=>$request->tgllahir,
    'agama'=>$request->agama,
    'notlp'=>$request->notlp,
    'alamat'=>$request->alamat,
    'idgolongan'=>$request->idgolongan
]);
if($karyawan){
//redirect dengan pesan sukses
return redirect()->route('karyawan.index')->with(['success'=>'Data berhasil disimpan']);
}else{
return redirect()->route('karyawan.index')->with(['error'=>'Data gagal disimpan']);
}
}
//FUNGSI HAPUS
public function destroy($id)
{
    $karyawans=Karyawan::findOrFail($id);

    $karyawans->delete();

    if($karyawans){
        //pesan sukses
        return redirect()->route('karyawan.index')->with(['success' => 'Data berhasil dihapus']);
    }else{
        //pesan gagal
        return redirect()->route('karyawan.index')->with(['error' => 'Data Gagal Dihapus']);
    }
}
}


