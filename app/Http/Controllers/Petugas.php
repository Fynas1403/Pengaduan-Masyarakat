<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PDF;
use App\ModelPetugas;
use Validator;
use Alert;
class Petugas extends Controller
{
    public function index_petugas()
    {
      $data['datas']=ModelPetugas::all();
      return view('login_petugas',$data);
    }

    public function index()
    {
      $data['datas']=ModelPetugas::all();
      return view('petugas',$data);
    }

    public function store(Request $request)
    {
        ModelPetugas::create([
            'nama_petugas' => $request->nama_petugas,
            'telp' => $request->telp,
            'username' => $request->username,
            'password' => md5($request->password),
            'level' => $request->level
        ]);
        Alert::success('Sukses', 'Berhasil Daftar!');
        return redirect()->action('Petugas@index_petugas');
    }

    public function store2(Request $request)
    {
        ModelPetugas::create([
            'nama_petugas' => $request->nama_petugas,
            'telp' => $request->telp,
            'username' => $request->username,
            'password' => md5($request->password),
            'level' => $request->level
        ]);
        Alert::toast('Berhasil Menambah Petugas!','success');
        return redirect()->action('Petugas@index');
    }

    public function edit($id)
    {
        $data = ModelPetugas::where('id_petugas', $id)->get();
        return view('petugas_edit', compact('data'));
    }

    public function update(Request $request)
    {
        ModelPetugas::where('id_petugas', $request->id)->update([

            'nama_petugas' => $request->nama_petugas,
            'telp' => $request->telp,
            'username' => $request->username,
            'password' => md5($request->password),
            'level' => $request->level
            
        ]);
        Alert::toast('Berhasil Merubah Petugas!','success');
        return redirect()->action('Petugas@index');
    }

    public function hapus($id)
    {
        ModelPetugas::where('id_petugas', $id)->delete();
        Alert::toast('Berhasil Menghapus Petugas!','success');
        return redirect()->action('Petugas@index');
    }

}
