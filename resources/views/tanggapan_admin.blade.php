@extends('layout.template_1')
@section('title','Tanggapan')
@section('container')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<body>

<div class="col-md-12">
    <h1 align="center"><b> Cetak Laporan Pengaduan</b></h1>
    <br>
    <a href="{{url('/data_pengaduan/cetak_pdf')}}" class="btn btn-warning btn-lg"><i class="fa fa-print">  <b>Print Out</b></i></a>
            <br><br>
    <!-- <div class="card bg-outline-secondary"> -->

        <div class="body">
            @if(Session::get('alert_message'))
                <div class="alert alert-success">
                    <strong>{{Session::get('alert_message')}}</strong>
                </div>
            @endif
            <table class="table table-hover table-striped">
            <thead class="thead-dark">

                <tr>
                <th>ID</th>
                <th>TGL PENGADUAN</th>
                <th>NIK</th>
                <th>ISI LAPORAN</th>
                <th>STATUS</th>
                <th>TANGGAPAN</th>
            
                </tr>
   
                @foreach($datas as $data)
                <center>
                <tr>
                    <td><b>{{$data->id_pengaduan}}</td>
                    <td>{{$data->tgl_pengaduan}}</td>
                    <td>{{$data->nik}}</td>
                    <td>{{$data->isi_laporan}}</td>
                    <td>{{$data->status}}</td>
                    <td>{{$data->tanggapan}}</td>
                </tr>
                </center>
                @endforeach
                </thead>
            </table>
        </div>
 </div>
@stop
