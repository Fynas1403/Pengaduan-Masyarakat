<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Validator;
use App\ModelPengaduan;
use Alert;

class PengaduanMasyarakat extends Controller
{
    public function index()
    {   
        $data['datas']=ModelPengaduan::join('masyarakat','masyarakat.nik','pengaduan.nik')->get();
        return view('pengaduan_masyarakat',$data);
    }

    public function store(Request $request)
    {
        if(Session()->has('nik')){

            ModelPengaduan::create([
                'nik' => Session()->get('nik'),
                'tgl_pengaduan' => $request->tgl_pengaduan,
                'isi_laporan' => $request->isi_laporan,
                'status' => $request->status,
                'foto' => $request->foto
            ]);
        }
        Alert::success('Sukses', 'Berhasil Mengajukan Pengaduan!');
        return redirect()->action('PengaduanMasyarakat@index');
    }
    public function hapus($id)
    {
        ModelPengaduan::where('id_pengaduan', $id)->delete();
        Alert::toast('Berhasil Menghapus Pengaduan!','success');
        return redirect()->action('PengaduanMasyarakat@index')->with('alert_message', 'Berhasil Menghapus Pengaduan!');
    }
}
