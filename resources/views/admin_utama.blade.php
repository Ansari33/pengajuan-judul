
<!doctype html>
<html lang="en">

<head>
	<title>Admin Utama | SISTEM MANAGEMEN TUGAS AKHIR MAHASISWA FIKOM UMI</title>
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
                   <a href="/logout" class="btn btn-danger" title="Logout"><i class="fa fa-sign-in " ></i> <strong>Logout</strong></a>
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
                        <li>
                            <a href="/dosen" class=""><i class="lnr lnr-users"></i> <span>Data Dosen</span></a>
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

					<!-- END OVERVIEW -->
					<div class="row">
						<div class="col-md-12">

							<!-- RECENT PURCHASES -->
							<div class="panel">

                                <div class="panel-heading">
                                    <h3 class="panel-title text-center"><a href=""></a>Pengajuan Judul</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4 ">
                                            <div class="metric ">
                                                <span class="icon"><i class="fa fa-paper-plane-o"></i></span>
                                                <p>
                                                <span class="number">{{$data['ajuan_judul']}}</span>
                                                    <span class="title label label-warning">Ajuan</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="metric">
                                                <span class="icon"><i class="fa fa-calendar"></i></span>
                                                <p>
                                                    <span class="number">{{$data['judul_lolos']}}</span>
                                                    <span class="title label label-success">Diterima</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="metric">
                                                <span class="icon"><i class="fa fa-times"></i></span>
                                                <p>
                                                    <span class="number">{{$data['judul_tolak']}}</span>
                                                    <span class="title label label-danger">Ditolak</span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- akhi judul -->

                                <div class="panel-heading">
                                    <h3 class="panel-title text-center"><a href=""></a>Seminar Proposal</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4 ">
                                            <div class="metric ">
                                                <span class="icon"><i class="fa fa-paper-plane-o"></i></span>
                                                <p>
                                                    <span class="number">{{$data['ajuan_proposal']}}</span>
                                                    <span class="title label label-warning">Ajuan</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="metric">
                                                <span class="icon"><i class="fa fa-calendar"></i></span>
                                                <p>
                                                    <span class="number">{{$data['proposal_jadwal']}}</span>
                                                    <span class="title label label-info">Terjadwal</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="metric">
                                                <span class="icon"><i class="fa fa-check-square"></i></span>
                                                <p>
                                                    <span class="number">{{$data['proposal_diuji']}}</span>
                                                    <span class="title label label-success">Diujikan</span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- akhir propsal -->

                                <div class="panel-heading">
                                    <h3 class="panel-title text-center"><a href=""></a>Seminar Hasil</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4 ">
                                            <div class="metric ">
                                                <span class="icon"><i class="fa fa-paper-plane-o"></i></span>
                                                <p>
                                                    <span class="number">{{$data['ajuan_hasil']}}</span>
                                                    <span class="title label label-warning">Ajuan</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="metric">
                                                <span class="icon"><i class="fa fa-calendar"></i></span>
                                                <p>
                                                    <span class="number">{{$data['hasil_jadwal']}}</span>
                                                    <span class="title label label-info">Terjadwal</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="metric">
                                                <span class="icon"><i class="fa fa-check-square"></i></span>
                                                <p>
                                                    <span class="number">{{$data['hasil_diuji']}}</span>
                                                    <span class="title label label-success">Diujikan</span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- akhir  hasil -->

                                <div class="panel-heading">
                                    <h3 class="panel-title text-center"><a href=""></a>Seminar Skripsi</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4 ">
                                            <div class="metric ">
                                                <span class="icon"><i class="fa fa-paper-plane-o"></i></span>
                                                <p>
                                                    <span class="number">{{$data['ajuan_meja']}}</span>
                                                    <span class="title label label-warning">Ajuan</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="metric">
                                                <span class="icon"><i class="fa fa-calendar"></i></span>
                                                <p>
                                                    <span class="number">{{$data['meja_jadwal']}}</span>
                                                    <span class="title label label-info">Terjadwal</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="metric">
                                                <span class="icon"><i class="fa fa-check-square"></i></span>
                                                <p>
                                                    <span class="number">{{$data['meja_diuji']}}</span>
                                                    <span class="title label label-success">Diujikan</span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- akhir tutup -->
                                </div>
                                </div>
                                </div>
                                </div>
                            </div>
                            
							<!-- END RECENT PURCHASES -->
						</div>
						<div class="col-md-6">
						</div>
					</div>
					<div class="row">
					</div>
					<div class="row">
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">Shared by <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">BootstrapThemes</a>
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
</html>
