@extends('layout.template_1')
@section('title, Beri Tanggapan')
@section('container')
<div class="container">
    <section class="main-section">
    
        <div class="card-header">
        <center>
            <h1>Detail Pengaduan</h1>
            </center>
            <hr>
            <div class="content">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @foreach($data as $datas)
            <form action="/data_pengaduan/detail" method="post">
                {{ csrf_field() }}
                <div class="form-group"align="center">
                    <td><img width="250" src="" alt=""></td>
                </div>
            <table class="table  table-bordered">
            <tbody>
                <input type="hidden" name="id" value="{{ $datas->id_pengaduan }}">
                <tr class="table-primary">
                <div class="form-group">
                    <th scope="col"><label for="plat_nomor">Tgl Pengaduan</label></td>
                    <td> {{ $datas->tgl_pengaduan }} </td>
                </div>
                </tr>
                
                <tr class="table-primary">
                <div class="form-group">
                    <th scope="col"><label for="merk">NIK</label></td>
                    <td >{{ $datas->nik }} </td>
                </div>
                </tr>

                <tr class="table-primary">
                <div class="form-group">
                    <th scope="col"><label for="warna">Isi Laporan</label></td>
                    <td> {{ $datas->isi_laporan }} </td>
                </div>
                </tr>

            </tbody>
            </table>
            </form>
            <center>
            <a href="{{url('/data_pengaduan')}}"><button type="button" class="btn btn-danger btn-lg"><b>Cancel</b></button></a>
            <a href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><b> Beri Tanggapan</b></a>
            </center>
            @endforeach
            </div>
        </div>
    </section>
</div>

 <!-------POP UP TAMBAH TANGGAPAN------>
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel" align="center">BERI TANGGAPAN</h4>
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
									@foreach($data as $datas)
									<form action="{{ url('/tambah_tanggapan/store/'.$datas->id_pengaduan) }}" method="post">
                                    @endforeach
									{{ csrf_field()}}
										<div align="left">
                                        <div class="form-group" >
											<label for="tgl_tanggapan">Tgl Tanggapan :</label>
											<input type="date" placeholder="Tgl Tanggapan" class="form-control" id="tgl_tanggapan" name="tgl_tanggapan" required
											oninvalid="this.setCustomValidity('Tgl Tanggapan Tidak Boleh Kosong')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group" >
											<label for="tanggapan">Tanggapan :</label>
                                            <textarea rows="3" placeholder="Tanggapan" name="tanggapan" id="tanggapan" class="form-control md-textarea" oninput="setCustomValidity('')" required oninvalid="this.setCustomValidity('Tanggapan Tidak Boleh Kosong')"></textarea>
										</div>
								
								<div class="form-group" align="center">
									<button type="reset" class="btn btn-default" ><b>Reset</b></button>
									<button type="button" class="btn btn-danger" data-dismiss="modal"><b>Close</b></button>
									<button class="btn btn-theme" type="submit"><b>Tanggapi</b></button>
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

		
@endsection