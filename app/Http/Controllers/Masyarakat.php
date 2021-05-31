<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PDF;
use App\ModelMasyarakat;
use Validator;
use Alert;
class Masyarakat extends Controller
{
    public function index_masyarakat()
    {
      $data['datas']=ModelMasyarakat::all();
      return view('login_masyarakat',$data);
    }

    public function index()
    {
      $data['datas']=ModelMasyarakat::all();
      return view('masyarakat',$data);
    }

    public function store(Request $request)
    {
        ModelMasyarakat::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'telp' => $request->telp,
            'username' => $request->username,
            'password' => md5($request->password)
        ]);
        Alert::success('Sukses', 'Berhasil Daftar!');
        return redirect()->action('Masyarakat@index_masyarakat');
    }

    public function store2(Request $request)
    {
        ModelMasyarakat::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'telp' => $request->telp,
            'username' => $request->username,
            'password' => md5($request->password)
        ]);
        Alert::toast('Berhasil Menambah Masyarakat!','success');
        return redirect()->action('Masyarakat@index');
    }

    public function edit($id)
    {
        $data = ModelMasyarakat::where('nik', $id)->get();
        return view('masyarakat_edit', compact('data'));
    }

    public function update(Request $request)
    {
        ModelMasyarakat::where('nik', $request->id)->update([

            'nik' => $request->nik,
            'nama' => $request->nama,
            'telp' => $request->telp,
            'username' => $request->username,
            'password' => md5($request->password)
            
        ]);
        Alert::toast('Berhasil Merubah Masyarakat!','success');
        return redirect()->action('Masyarakat@index');
    }

    public function hapus($id)
    {
        ModelMasyarakat::where('nik', $id)->delete();
        Alert::toast('Berhasil Menghapus Masyarakat!','success');
        return redirect()->action('Masyarakat@index')->with('alert_message', 'Berhasil Menghapus Masyarakat!');
    }

    
   }
