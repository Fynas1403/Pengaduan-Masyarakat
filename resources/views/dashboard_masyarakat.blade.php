@php
$totalmasyarakat = DB::table('masyarakat')->count();
$totaladmin = DB::table('petugas')->where('level', '=', 'admin')->count();
$totalpetugas = DB::table('petugas')->where('level', '=', 'petugas')->count();
@endphp
@extends('layout.template_2')
@section('title','Dashboard')
@section('container')

<head>
<style>
                    .single-feature {
                    border-radius: 30px;
                    background-color: #E0FFFF;
                    padding: 30px;
                    margin-bottom: 30px;
                    -webkit-transition: all 0.3s ease 0s;
                    -moz-transition: all 0.3s ease 0s;
                    -o-transition: all 0.3s ease 0s;
                    transition: all 0.3s ease 0s;
                    }

                    .single-feature:hover {
                    box-shadow: -14.142px 14.142px 20px 0px rgba(157, 157, 157, 0.5);
                    cursor: pointer;
                    }

                    .single-feature:hover p {
                    color: black;
                    }

                    .single-feature:hover h4 {
                    color: #DAA520;
                    }

                    .single-feature h4 {
                    -webkit-transition: all 0.3s ease 0s;
                    -moz-transition: all 0.3s ease 0s;
                    -o-transition: all 0.3s ease 0s;
                    transition: all 0.3s ease 0s;
                    margin-top: 20px;
                    margin-bottom: 20px;
                    }

                    .single-feature h4 .lnr {
                    margin-right: 15px;
                    } 

                    .single-feature:hover h3 {
                    color: #DAA520;
                    }

                    .single-feature h3 {
                    -webkit-transition: all 0.3s ease 0s;
                    -moz-transition: all 0.3s ease 0s;
                    -o-transition: all 0.3s ease 0s;
                    transition: all 0.3s ease 0s;
                    margin-top: 20px;
                    margin-bottom: 20px;
                    }

                    .single-feature h3 .lnr {
                    margin-right: 15px;
                    } 
</style>
</head>

<center>
<h1><b>DASHBOARD</b></h1>
</center>
</div >


                <div class="card-body">

                  <h2 class="font-weight-bold my-4 text-center mb-5 mt-4 font-weight-bold">
                    <strong>Pengaduan Masyarakat</strong>
                  </h2>
<br>
<br>

        
                  <!-- Grid row -->
                  <div class="row mt-5">

                    <!-- Grid column -->
                    <div class="col-md-6 ml-lg-5 ml-md-3">
<br>
                      <!-- Grid row -->

                        <div class="single-feature">
                          <h4 class="font-weight-bold mb-4">
                          <center><i class="fas fa-university fa-lg"></i><strong > Apa itu Pengaduan?</strong></center>
                          </h4>
                          <p class="">Pengaduan adalah pemberitahuan yang disertai permintaan oleh pihak yang berkepentingan kepada petugas yang berwenang untuk menindak menurut Hukum, terhadap seseorang yang telah melakukan Tindak Pidana Aduan yang Merugikan.</p>
                        </div>
                        
                      </div>
                      <!-- Grid row -->
                      <div class="col-md-6 ml-lg-5 ml-md-3">
<br>
                    <!-- Grid row -->

                    <div class="single-feature">
                        <h4 class="font-weight-bold mb-4">
                        <center><i class="fas fa-desktop fa-lg"></i><strong > Tentang Aplikasi</strong></center>
                        </h4>
                        <p class="">Aplikasi ini merupakan aplikasi yang dapat mengelola pendataan pengaduan dari masyarakat, selain dibuat sesimple mungkin, aplikasi ini juga lumayan dapat bekerja dengan baik untuk dibilang sebuah Aplikasi Pengaduan Masyarakat.</p>
                    </div>
                    </div>  
                      <!-- Grid row -->
                      
<!-- Total Pengguna -->
                    <div class="col-md-10 col-md-offset-1 ml-lg-5 ml-md-3">
                    <div class="single-feature">
                        <h4 class="font-weight-bold mb-4">
                        <center><i class="fas fa-user-edit fa-lg"></i><strong > Tentang Pembuat</strong></center>
                        </h4>
                        <center><p class="">Seorang siswa yang senang belajar hal baru, dan juga ingin selalu bisa bermanfaat bagi orang lain.</p></center>
                    </div>
                    </div>  
                     <div class="row mt-5">
<div class="col-md-8 col-md-offset-2 ml-lg-5 ml-md-3">
<div class="single-feature"> 
<h4><center><strong class=""><i class="fas fa-address-card fa-lg"></i> Info Pengguna</strong></center></h4>   
  
<div class="col-md-5 col-sm-2 col-md-offset-1 box0">
        <br>
            <div class="box1">
                <h4><span class="fas fa-user-cog"></span></h4>
                <h4><strong>PETUGAS</strong></h4>
                <h3>{{$totalpetugas}}</h3>
            </div>
                <p><b>Terdapat {{$totalpetugas}} Petugas yang terdaftar</b></p>
        </div>

        <div class="col-md-5 col-sm-2 col-md-offset-0 box0">
        <br>
            <div class="box1">
                <h4><span class="fa fa-users"></span></h4>
                <h4><strong>MASYARAKAT<strong></h4>
                <h3>{{$totalmasyarakat}}</h3>
            </div>
                <p><b>Terdapat {{$totalmasyarakat}} Masyarakat yang terdaftar</b></p>
        </div>
        </p>
</div>
</div>  
@endsection