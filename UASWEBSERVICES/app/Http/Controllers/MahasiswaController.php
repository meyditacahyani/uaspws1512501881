<?php

namespace App\Http\Controllers;
use App\ModelMahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
    $data = ModelMahasiswa::all();
    return response($data);
  }

  public function show($nim){
    $data = ModelMahasiswa::where('nim',$nim)->get();
    return response ($data);
  }

  public function store (Request $request){
    $data = new ModelMahasiswa();
	$data->nim = $request->input('nim');
    $data->nmmhs = $request->input('nmmhs');
    $data->alamat = $request->input('alamat');
    $data->tgllahir = $request->input('tgllahir');
    $data->jenkel = $request->input('jenkel');
    $data->notelp = $request->input('notelp');
    $data->jurusan = $request->input('jurusan');
    $data->agama = $request->input('agama');
    $data->save();

    return response('Berhasil Tambah Data');
  }
  
  public function update(Request $request, $nim){
    $data = ModelMahasiswa::where('nim',$nim)->first();
    $data->nim = $request->input('nim');
    $data->nmmhs = $request->input('nmmhs');
    $data->alamat = $request->input('alamat');
    $data->notelp = $request->input('notelp');
    $data->tgllahir = $request->input('tgllahir');
    $data->jurusan = $request->input('jurusan');
    $data->jenkel = $request->input('jenkel');
    $data->save();

    return response('Berhasil Merubah Data');
  }

  public function destroy($nim){
    $data = ModelMahasiswa::where('nim',$nim)->first();
    $data->delete();

    return response('Berhasil Menghapus Data');
  }
}