<!doctype html>
<html lang="en">

<head>
	<title>Login Mahasiswa | Sistem Manajemen Tugas Akhir Mahasiswa</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('tampilan/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('tampilan/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('tampilan/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('tampilan/vendor/chartist/css/chartist-custom.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('tampilan/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('tampilan/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('tampilan/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('tampilan/img/favicon.png')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			
			<div class="container-fluid" style="margin-left: 5px;">
				<div class="col-sm-2" style="margin-top: 10px;"><ul class="list-unstyled">
					<li>
						<img src="{{asset('tampilan/img/umi.png')}}" style="width: 35px; margin-right: none;"><h5 style=" display: inline;"><strong><span> </span> PRODI TI FIKOM UMI</strong></h5>
					</li>
				</ul>
				</div>
				<div class="col-sm-7" style="margin-top: 10px;">
				<h4 style=""><strong><a href="/" style="color: inherit;">SISTEM MANAGEMEN JUDUL DAN SEMINAR TUGAS AKHIR  MAHASISWA FIKOM UMI</a></strong></h4>
				</div>
			<div class="col-sm-3 text-right" style="margin-top: 10px;">
				 	<a href="/login" class="btn btn-default" title="Login Staff"><i class="fa fa-sign-in " ></i> <strong>Staff TI</strong></a>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		
			<!-- MAIN CONTENT -->
			<div class="panel-heading">
									<h3 class="panel-title"><a href="">Form Inputan Data Dosen</a></h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										
									</div>
								</div>
				<div class="container-fluid" style="margin:20%; margin-top:60px; margin-bottom: 30px;">
					<!-- OVERVIEW -->

					<!-- END OVERVIEW -->
					<div class="row">
						
						<div class="col-lg-12">
							<!-- PANEL NO PADDING -->
							<div class="panel">
								<div class="panel-heading">
									<h3><strong>Edit Data Dosen</strong> <i class=""></i></h3>
								</div>
								
								<div class="panel-body text-center">
									<form class="form-group" style="" method="POST" action="/updosen">
										@csrf
										<input class="form-control" placeholder="nip" type="hidden" name="id" value="{{$data->id}}">
									<input class="form-control" placeholder="nip" type="text" name="nip" value="{{$data->nip}}">
									<br>
									<input name="nama" class="form-control" placeholder="Nama Lengkap & Gelar" type="text" value="{{$data->nama}}">
									<br>
									<input name="pangkat" class="form-control" placeholder="Pangkat" type="text" value="{{$data->pangkat}}">
									<br>
									<input name="golongan" class="form-control" placeholder="Golongan Dosen" type="text" value="{{$data->golongan}}">
									<br>
									<input name="ruangan" class="form-control" placeholder="Ruangan Dosen" type="text" value="{{$data->ruangan}}">
									<br>
									<select class="form-control" name="peminatan">
										<option value="Jaringan">Jaringan</option>
										<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
									</select>
									<br>
									<button type="submit" class="btn btn-primary"><i class=""></i>Update</button>
									</form>
								</div>
							   
							</div>
							<!-- END PANEL NO PADDING -->
						</div>
					
						
						
						<div class="col-md-6">
						</div>
					</div>
					<div class="row">

						<div class="col-md-12">
							<!-- RECENT PURCHASES -->
							
							<!-- END RECENT PURCHASES -->
						</div>
						<div class="col-md-6">
						</div>
					</div>
					<div class="row">
					</div>
				</div>
			
			<!-- END MAIN CONTENT -->
		
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('tampilan/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('tampilan/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('tampilan/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('tampilan/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('tampilan/vendor/chartist/js/chartist.min.js')}}"></script>
	<script src="{{asset('tampilan/scripts/klorofil-common.js')}}"></script>
</body>

</html>
