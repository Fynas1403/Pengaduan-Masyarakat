@extends('layout.template_1')
@section('title','Data Masyarakat')
@section('container')
  <div class="col-md-16">
    <div class="card">
    <div class="p-3  bg-info text-white">
        <div class="header" align="center" >
            <br>
            <h1>Data Pengaduan Masyarakat</h1>
    </div>    
	
<!---->
        <div class="body">
        <br><br><br><br><br><br><br><br><br>
		@include('sweetalert::alert')
            <table class="table table-hover table-striped">
            <thead class="thead-dark">
                <tr align="center">
                    <th scope="col"><b>ID</th>
                    <th scope="col"><b>TGL PENGADUAN</th>
                    <th scope="col"><b>NIK</th>
                    <th scope="col"><b>ISI LAPORAN</th>
					<!-- <th scope="col"><b>FOTO</th> -->
                    <th scope="col"><b>STATUS</th>
                    <th scope="col"><b>OPSI</th>
                </tr>
                </thead>
				@php $no=0; @endphp
                @foreach($datas as $data)
                @php $no++; @endphp
                <tr class="table-info">
					<td><b>{{$data->id_pengaduan}}</td>
                    <td>{{$data->tgl_pengaduan}}</td>
                    <td>{{$data->nik}}</td>
                    <td>{{$data->isi_laporan}}</td>
                    <td>{{$data->status}}</td>
                    <td>
					<a href="{{url('/data_pengaduan/edit/'.$data->id_pengaduan)}}" class="btn btn-warning">Verifikasi</a>
                    <a href="{{url('/data_pengaduan/detail/'.$data->id_pengaduan)}}" class="btn btn-info">Beri Tanggapan</a>
                    <a href="{{url('/data_pengaduan/hapus/'.$data->id_pengaduan)}}" class="btn btn-danger" 
                    onclick="return confirm('Apakah anda yakin?')"><i class="far  fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
   </div>  
   </div>
 </div>
 @stop


		