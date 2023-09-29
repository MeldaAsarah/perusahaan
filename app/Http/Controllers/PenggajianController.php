<?php

namespace App\Http\Controllers;

use App\Models\Penggajian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PenggajianController extends Controller
{
    //
    public function index()
    {
        $penggajians=Penggajian::latest()->paginate(10);
        return view('penggajian.index', compact('penggajians'));
    }
//Fungsi Menyimpan/Save
public function create()
 {
 return view('penggajian.create');
  }
 public function store(Request $request)
 {
  $this->validate($request,[
 'idkaryawan'=>'required',
 'tanggal'=>'required',
 'jmlhlembur'=>'required',
 'jmlhgaji'=>'required',
 'potongan'=>'required',
 'totalgaji'=>'required',
  ]);
  DB::table('penggajians')->insert([
    'idkaryawan'=>$request->idkaryawan,
    'tanggal'=>$request->tanggal,
    'jmlhlembur'=>$request->jmlhlembur,
    'jmlhgaji'=>$request->jmlhgaji,
    'potongan'=>$request->potongan,
    'totalgaji'=>$request->totalgaji,
  ]);
  if(DB::table('penggajians')){
    return redirect()->route('penggajian.index')->with(['success'=>'Data berhasil disimpan']);
 }else{
    return redirect()->route('penggajian.index')->with(['error'=>'Data gagal disimpan']);
 }
}
//  FUNGSI EDIT
public function edit(Penggajian $penggajian)
{
return view('penggajian.edit', compact('penggajian'));
}
public function update(Request $request, Penggajian $penggajian)
{
$this->validate($request, [
    'idkaryawan'=>'required',
    'tanggal'=>'required',
    'jmlhlembur'=>'required',
    'jmlhgaji'=>'required',
    'potongan'=>'required',
    'totalgaji'=>'required',
]);
//get data karyawan by ID
$penggajian=Penggajian::findOrFail($penggajian->id);
$penggajian->update([
    'idkaryawan'=>$request->idkaryawan,
    'tanggalnama'=>$request->tanggal,
    'jmlhlembur'=>$request->jmlhlembur,
    'jmlhgaji'=>$request->jmlhgaji,
    'potongan'=>$request->potongan,
    'totalgaji'=>$request->totalgaji,
]);
if($penggajian){
//redirect dengan pesan sukses
return redirect()->route('penggajian.index')->with(['success'=>'Data berhasil disimpan']);
}else{
return redirect()->route('penggajian.index')->with(['error'=>'Data gagal disimpan']);
}
}
//FUNGSI HAPUS
public function destroy($id)
{
    $penggajians=Penggajian::findOrFail($id);

    $penggajians->delete();

    if($penggajians){
        //pesan sukses
        return redirect()->route('penggajian.index')->with(['success' => 'Data berhasil dihapus']);
    }else{
        //pesan gagal
        return redirect()->route('penggajian.index')->with(['error' => 'Data Gagal Dihapus']);
    }
}




}
