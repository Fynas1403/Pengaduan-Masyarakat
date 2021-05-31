@extends('layout.template_2')
@section('title','Masyarakat')
@section('container')
  <div class="col-md-16">
    <div class="card">
    <div class="p-3  bg-info text-white">
        <div class="header" align="center" >
            <br>
            <h1>Data Pengaduan Saya</h1>
            <a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><b> Buat Pengaduan</b></a>
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
                    <a href="{{url('/pengaduan_masyarakat/hapus/'.$data->id_pengaduan)}}" class="btn btn-danger" 
                    onclick="return confirm('Apakah anda yakin?')">Batalkan Pengaduan</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
   </div>  
   </div>
 </div>
 @stop

 <!-------POP UP TAMBAH PETUGAS------>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel" align="center">Buat Pengaduan</h4>
						      </div>
						      <div class="modal-body">

							<section class="main-section">
								<div class="content">
									<hr>

									@if($errors->any())
										<div class="alert alert-danger">
											@foreach($errors->all() as $error)
												<li><strong>{{ $error }}</strong></li>
											@endforeach
										</div>
									@endif
									
									<form action="{{ url('/tambah_pengaduan/store') }}" method="post" enctype="multipart/formdata">
									{{ csrf_field()}}
										<div align="left">
                                        <div class="form-group" >
											<label for="tgl_pengaduan">Tgl Pengaduan :</label>
											<input type="date" placeholder="Tgl Pengaduan" class="form-control" id="tgl_pengaduan" name="tgl_pengaduan" required
											oninvalid="this.setCustomValidity('Tgl Pengaduan Tidak Boleh Kosong')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group" >
											<label for="isi_laporan">Isi Laporan :</label>
											<textarea rows="3" placeholder="Isi Laporan" name="isi_laporan" id="isi_laporan" class="form-control md-textarea"
              								autofocus required></textarea>

										</div>

                    <div class="form-group" >
											<label for="foto">Foto :</label>
											<input type="file" placeholder="foto" class="form-control" id="foto" name="foto" required multiple
											oninvalid="this.setCustomValidity('Foto Tidak Boleh Kosong')" oninput="setCustomValidity('')">
										</div>
										
                                        <input type="hidden" id="status" name="status" value="0">

								<div class="form-group" align="center">
									<button type="reset" class="btn btn-default" ><b>Reset</b></button>
									<button type="button" class="btn btn-danger" data-dismiss="modal"><b>Close</b></button>
									<button class="btn btn-theme" type="submit"><b>Buat</b></button>
								</div>
								
								</form>
						    </div>
							</section>
							</div>
						</div>
		            </div>
		        </div> 

	<!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
		<script>
		function myFunction() {
		var x = document.getElementById("password");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
		}
		</script>

		