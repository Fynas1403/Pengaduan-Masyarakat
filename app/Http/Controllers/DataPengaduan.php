<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Validator;
use App\ModelPengaduan;
use App\ModelTanggapan;
use PDF;
use Alert;

class DataPengaduan extends Controller
{
    public function index()
    {    
        $data['datas']=ModelPengaduan::join('masyarakat','masyarakat.nik','pengaduan.nik')->get();
        return view('data_pengaduan',$data);
    }
    public function index2()
    {
        $data['datas']=ModelTanggapan::join('pengaduan','pengaduan.id_pengaduan','tanggapan.id_pengaduan')
        ->join('petugas','petugas.id_petugas','tanggapan.id_petugas')
        ->join('masyarakat','masyarakat.nik','pengaduan.nik')
        ->get();
        return view('tanggapan_masyarakat',$data);
    }
    public function edit($id)
    {
        $data = ModelPengaduan::where('id_pengaduan', $id)->get();
        return view('data_pengaduan_edit', compact('data'));
    }

    public function update(Request $request)
    {
        ModelPengaduan::where('id_pengaduan', $request->id)->update([
            'tgl_pengaduan' => $request->tgl_pengaduan,
            'nik' => $request->nik,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $request->foto,
            'status' => $request->status

        ]);
        Alert::success('Verifikasi Pengaduan Berhasil!','Silahkan Beri Tanggapan!');
        return redirect()->action('DataPengaduan@index');
    }

    public function detail($id) {
        $data = ModelPengaduan::where('id_pengaduan', $id)->get();
        return view('data_pengaduan_detail', compact('data'));
    }

    public function tanggapan($id) {

        $data['datas']=ModelTanggapan::join('pengaduan','pengaduan.id_pengaduan','tanggapan.id_pengaduan')
        ->join('petugas','petugas.id_petugas','tanggapan.id_petugas')
        ->join('masyarakat','masyarakat.nik','pengaduan.nik')
   ->get();
        return view('tanggapan',$data);
    }

    public function hapus($id)
    {
        ModelTanggapan::where('id_pengaduan', $id)->delete();
        ModelPengaduan::where('id_pengaduan', $id)->delete();
        Alert::toast('Berhasil Menghapus Pengaduan!','success');
        return redirect()->action('DataPengaduan@index');
    }

    public function cetak_pdf(){
        $pengaduan = ModelTanggapan::join('pengaduan','pengaduan.id_pengaduan','tanggapan.id_pengaduan')
        ->join('petugas','petugas.id_petugas','tanggapan.id_petugas')
        ->join('masyarakat','masyarakat.nik','pengaduan.nik')
        ->get();
        $pdf = PDF::loadview('pengaduan_pdf',['pengaduan'=>$pengaduan]);
        return $pdf->stream();
    }
}
