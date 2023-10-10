<!doctype html>
<html lang="en">

<head>
	<title>Daftar Judul Telah Seminar Propsal | Sistem Manajemen Tugas Akhir Mahasiswa</title>
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
		
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		
			<!-- MAIN CONTENT -->
			
				<div class="container-fluid">
					<!-- OVERVIEW -->

					<!-- END OVERVIEW -->
					<div class="row">
						<div class="col-md-12">
							<!-- RECENT PURCHASES -->
							<div class="panel">
								
								<div class="panel-heading">
									<h3 class="panel-title"><div class="col-sm-2" style="margin-top: 10px;"><ul class="list-unstyled">
                    <li>
                        <img src="{{asset('tampilan/img/umi.png')}}" style="width: 35px; margin-right: none;"><h5 style=" display: inline;"><strong><span> </span> PRODI TI FIKOM UMI</strong></h5>
                    </li>
                </ul>

                </div>
                <div class="col-sm-7" style="margin-top: 10px; margin-left: 25%;">
                <h4 style=""><strong>DAFTAR PROPOSAL TELAH DIUJIKAN</strong></h4>
                
            	</div></h3>

									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
									</div>
								</div>
								
								<div class="panel-body no-padding">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Stambuk</th>
												<th>Mahasiswa</th>
												<th>Judul</th>
												<th>Pembimbing 1</th>
												<th>Pembimbing 2</th>
												<th>Jadwal Seminar</th>

											</tr>
										</thead>
										<tbody>
											@foreach($data as $d)
											<tr>
												<td>{{$d->stambuk}}</td>
												<td>{{$d->nama}}</td>
												<td>{{$d->judul}}</td>
												<td>{{$d->pembimbing1}}</td>
												<td>{{$d->pembimbing2}}</td>
												<td>{{$d->jadwalp}}</td>


											</tr>
											@endforeach
										</tbody>
									</table>
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
			
			<!-- END MAIN CONTENT -->
<script type="text/javascript">
	window.print();
</script>		
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
