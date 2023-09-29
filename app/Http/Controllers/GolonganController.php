<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class GolonganController extends Controller
{
    //
    public function index()
    {
        $golongans=Golongan::latest()->paginate(10);
        return view('golongan.index', compact('golongans'));
    }
//Fungsi Menyimpan/Save
public function create()
 {
 return view('golongan.create');
  }
 public function store(Request $request)
 {
  $this->validate($request,[
 'idgolongan'=>'required',
 'namagolongan'=>'required',
 'gajipokok'=>'required',
  ]);
  DB::table('golongans')->insert([
    'idgolongan'=>$request->idgolongan,
    'namagolongan'=>$request->namagolongan,
    'gajipokok'=>$request->gajipokok,
  ]);
  if(DB::table('golongans')){
    return redirect()->route('golongan.index')->with(['success'=>'Data berhasil disimpan']);
 }else{
    return redirect()->route('golongan.index')->with(['error'=>'Data gagal disimpan']);
 }
}
//  FUNGSI EDIT
public function edit(Golongan $golongan)
{
return view('golongan.edit', compact('golongan'));
}
public function update(Request $request, Golongan $golongan)
{
$this->validate($request, [
    'idgolongan'=>'required',
    'namagolongan'=>'required',
    'gajipokok'=>'required',
]);
//get data karyawan by ID
$golongan=Golongan::findOrFail($golongan->id);
$golongan->update([
    'idgolongan'=>$request->idgolongan,
    'namagolongan'=>$request->namagolongan,
    'gajipokok'=>$request->gajipokok,
]);
if($golongan){
//redirect dengan pesan sukses
return redirect()->route('golongan.index')->with(['success'=>'Data berhasil disimpan']);
}else{
return redirect()->route('golongan.index')->with(['error'=>'Data gagal disimpan']);
}
}
//FUNGSI HAPUS
public function destroy($id)
{
    $golongans=Golongan::findOrFail($id);

    $golongans->delete();

    if($golongans){
        //pesan sukses
        return redirect()->route('golongan.index')->with(['success' => 'Data berhasil dihapus']);
    }else{
        //pesan gagal
        return redirect()->route('golongan.index')->with(['error' => 'Data Gagal Dihapus']);
    }
}
}



