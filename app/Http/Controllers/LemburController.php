<?php

namespace App\Http\Controllers;

use App\Models\Lembur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class LemburController extends Controller
{
    //
    public function index()
    {
        $lemburs=Lembur::latest()->paginate(10);
        return view('lembur.index', compact('lemburs'));
    }
//Fungsi Menyimpan/Save
public function create()
 {
 return view('lembur.create');
  }
 public function store(Request $request)
 {
  $this->validate($request,[
 'idkaryawan'=>'required',
 'tgllembur'=>'required',
 'jumlahlembur'=>'required',
  ]);
  DB::table('lemburs')->insert([
    'idkaryawan'=>$request->idkaryawan,
    'tgllembur'=>$request->tgllembur,
    'jumlahlembur'=>$request->jumlahlembur,
  ]);
  if(DB::table('lemburs')){
    return redirect()->route('lembur.index')->with(['success'=>'Data berhasil disimpan']);
 }else{
    return redirect()->route('lembur.index')->with(['error'=>'Data gagal disimpan']);
 }
}
//  FUNGSI EDIT
public function edit(Lembur $lembur)
{
return view('lembur.edit', compact('lembur'));
}
public function update(Request $request, Lembur $lembur)
{
$this->validate($request, [
    'idkaryawan'=>'required',
    'tgllembur'=>'required',
    'jumlahlembur'=>'required',
]);
//get data karyawan by ID
$lembur=Lembur::findOrFail($lembur->id);
$lembur->update([
    'idkaryawan'=>$request->idkaryawan,
    'tgllembur'=>$request->tgllembur,
    'jumlahlembur'=>$request->jumlahlembur,
]);
if($lembur){
//redirect dengan pesan sukses
return redirect()->route('lembur.index')->with(['success'=>'Data berhasil disimpan']);
}else{
return redirect()->route('lembur.index')->with(['error'=>'Data gagal disimpan']);
}
}
//FUNGSI HAPUS
public function destroy($id)
{
    $lemburs=Lembur::findOrFail($id);

    $lemburs->delete();

    if($lemburs){
        //pesan sukses
        return redirect()->route('lembur.index')->with(['success' => 'Data berhasil dihapus']);
    }else{
        //pesan gagal
        return redirect()->route('lembur.index')->with(['error' => 'Data Gagal Dihapus']);
    }
}
}



