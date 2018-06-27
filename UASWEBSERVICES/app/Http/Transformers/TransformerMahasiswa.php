<?php
namespace App\Http\Transformers;
use League\Fractal\TransformerAbstract;
use App\ModelMahasiswa;

class TransformerMahasiswa extends TransformerAbstract
{
  public function transform(mahasiswa $field)
  {
    // ngubah format tampilan di postman
    return [
      'id' => $field->id,
      'nim' => $field->nim,
      'nmmhs' => $field->nmmhs,
      'alamat' => $field->alamat,
      'tgllahir' => $field->tgllahir,
      'jenkel' => $field->jenkel,
      'notelp' => $field->notelp,
      'jurusan' => $field->jurusan,
      'agama' => $field->agama
    ];
  }
}
