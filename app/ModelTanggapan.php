<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTanggapan extends Model
{
    protected $table="tanggapan";
    //default primary key adalah id
    protected $primarykey="id_tanggapan";
    //untuk mematikan pengotomatisan insert kolom update at
    public $timestamps=false;

    protected $fillable = [
      'id_tanggapan',
      'id_pengaduan',
      'id_petugas',
      'tgl_tanggapan',
      'tanggapan'
    ];
}
