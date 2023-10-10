<!doctype html>
<html lang="en">

<head>
	<title>Siapkan Ujian Tutup | Klorofil - Free Bootstrap Dashboard Template</title>
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
				 	<a href="/logout" class="btn btn-danger" title="Logout"><i class="fa fa-sign-out " ></i> <strong>Logout</strong></a>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/admin" class="active"><i class="lnr lnr-home"></i> <span>Dashboard Admin</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Judul TA</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="/ajuanjudul_admin" class="">Daftar Ajuan Judul TA</a></li>
									<li><a href="/diterima_admin" class="">Judul TA Diterima</a></li>
									<li><a href="/ditolak" class="">Judul TA Ditolak</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Seminar Propsal</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" class="collapse ">
								<ul class="nav">
									<li><a href="/ajuansemprop_admin" class="">Daftar Ajuan Seminar Proposal</a></li>
									<li><a href="/jadsemprop_admin" class="">Jadwal Seminar Propsal</a></li>
									<li><a href="/terujip" class="">Telah Seminar Proposal</a></li>

								</ul>
							</div>
						</li>
						<li>
							<a href="#subPages3" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Seminar Hasil</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages3" class="collapse ">
								<ul class="nav">
									<li><a href="/ajuansemhas_admin" class="">Daftar Ajuan Seminar Hasil</a></li>
									<li><a href="/jadsemhas_admin" class="">Jadwal Seminar Hasil</a></li>
									<li><a href="/terujih" class="">Telah Seminar Hasil</a></li>

								</ul>
							</div>
						</li>
                        <li>
                            <a href="#subPages4" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Seminar Skripsi</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subPages4" class="collapse ">
                                <ul class="nav">
                                    <li><a href="/ajuansemtup_admin" class="">Daftar Ajuan Seminar Skripsi</a></li>
                                    <li><a href="/jadsemtup_admin" class="">Jadwal Seminar Skripsi</a></li>
                                    <li><a href="/terujim" class="">Telah Seminar Skripsi</a></li>

                                </ul>
                            </div>
                        </li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Siapkan </h3>
							<p class="panel-subtitle">Seminar Tutup</p>
						</div>
						<div class="panel">
								<form action="/setsemtup" method="POST">
									@csrf
								<div class="panel-body">
									<input type="hidden" class="form-control" placeholder="stambuk" name="id" required="" value="{{$data->id}}">
									<input type="text" class="form-control" placeholder="stambuk" name="stambuk" required="" value="{{$data->stambuk}}">
									<br>

									<input type="text" class="form-control" name="nama" placeholder="nama" required="" value="{{$data->nama}}">
									<br>
									<textarea class="form-control" name="judul" placeholder="Judul Proposal" rows="4" required="">{{$data->judul}}</textarea>
									<br>
									<h4>Pembimbing</h4>
									<input type="text" class="form-control" placeholder="usulan Pembimbing 1" name="pembimbing1" value="{{$data->pembimbing1}}">
									<br>
									<input type="text" class="form-control" name="pembimbing2" placeholder="usulan Pembimbing 2" value="{{$data->pembimbing2}}">
									<br>
									<h4>Penguji</h4>
									<input type="text" class="form-control" placeholder="usulan Penguji 1" name="penguji1" value="{{$data->penguji1}}">
									<br>
									<input type="text" class="form-control" name="penguji2" placeholder="usulan Penguji 2" value="{{$data->penguji2}}">
									<br>

									<input type="text" class="form-control" placeholder="usulan Penguji 3" name="penguji3" value="{{$data->penguji3}}">
									<br>
									<h4>Ketua Sidang</h4>
									<select class="form-control" name="ketua">
										@foreach($data2 as $d2)
										<option value="{{$d2->nama}}">{{$d2->nama}}</option>
										@endforeach
									</select>
									
									<br>
									<h4>Jadwal Seminar</h4>
									<input type="text" class="form-control" required="" name="tempat" placeholder="Tempat Ujian">
									<br>
									<input type="date" class="form-control" required="" name="tanggal" placeholder="usulan Ketua Sidang">
									<br>
									<input type="time" class="form-control" name="jam" placeholder="usulan Ketua Sidang" required="">
									<br>
									<button type="submit" class="btn btn-success">Jadwalkan Seminar</button>
								</div>
								</form>
							</div>
					</div>
					<!-- END OVERVIEW -->

				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
	
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
	<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
	</script>
</body>
<div id="Modal" class="modal fade" role="dialog" style="">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="">
        <h4 class="modal-title">Filter Jadwal</h4>
      </div>
      <div class="modal-body modal-sm" style="margin-top: 10px;">

    <form method='POST' action="/dofilter" class="form-group" enctype="multipart/form-data">
     {{ csrf_field() }}


    <div class="form-group">
    <select name="hari" class="form-control">
    	<option value="senin">Senin</option>
    	<option value="selasa">selasa</option>
    	<option value="rabu">rabu</option>
    	<option value="kamis">kamis</option>
    	<option value="jumat">jumat</option>

    </select>
    <div class="form-group">
    <select name="semester" class="form-control">
    	<option value="Ganjil">Ganjil</option>
    	<option value="Genap">Genap</option>


    </select>
    <div class="form-group">
    <select name="tahun" class="form-control">
    	<option value="2020">2020</option>
    	<option value="2019">2019</option>
    	<option value="2018">2018</option>

    </select>
    </div>


        <button type="submit" name="Tambahkan" class="btn btn-success" style="width: 100%;">Lihat</button>
    </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</html>
