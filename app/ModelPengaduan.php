<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPengaduan extends Model
{
    protected $table="pengaduan";
    //default primary key adalah id
    protected $primarykey="id_pengaduan";
    //untuk mematikan pengotomatisan insert kolom update at
    public $timestamps=false;

    protected $fillable = [
      'pengaduan',
      'nik',
      'tgl_pengaduan',
      'isi_laporan',
      'foto',
      'status'
    ];

    public function getImage()
    {
      if($this->foto){
        return asset('assets/images/'.$this->foto);
      }
    }
}
