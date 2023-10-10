<!doctype html>
<html lang="en">

<head>
	<title>Halaman Pengajuan Judul | Klorofil - Free Bootstrap Dashboard Template</title>
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

<body background="">
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
			
				<div class="container-fluid" style="margin: 17%; margin-top: 5%; margin-bottom: 5%;">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading text-center">
							<h3 class="panel-title"><strong>Pengajuan Judul Tugas Akhir</strong></h3>
							@if(session()->has('oke'))
							<span class="label label-success">{{session('oke')}}</span>
							@endif
						</div>
						<div class="panel">
								<form id="myform" action="/simpanjudul" method="POST" enctype="multipart/form-data" >
									@csrf
								<div class="panel-body">
									<div class="form-row"><input type="text" class="form-control" placeholder="stambuk" name="stambuk" required="">
									<br>
									<input type="text" class="form-control" name="nama" placeholder="nama" required=""></div>
									
									<div class="form-row">
									<br>
									<input type="text" class="form-control" name="peminatan" placeholder="Peminatan" required=""></div>
									<br>
									<input type="text" class="form-control" name="hp" placeholder="No Hp" required="" pattern="[0-9]+">
									<br>
									<input type="text" class="form-control" name="email" placeholder="email" required="" >
									<input type="hidden" name="_token" value="{{csrf_token()}}">
									
									<br>
									<textarea class="form-control" name="judul1" placeholder="Judul 1" rows="3" required=""></textarea>
									<br>
									<textarea class="form-control" name="judul2" placeholder="Judul 2" rows="3" ></textarea>
									<br>
									<textarea class="form-control" name="judul3" placeholder="Judul 3" rows="3" ></textarea>
									<br>
									<select class="form-control" name="pembimbing1">
										<option>Pilih Dosen Pembimbing 1</option>
										@foreach($data as $d)
										<option value="{{$d->nama}}">{{$d->nama}}</option>
										@endforeach
									</select>
									<br>
									<select class="form-control" name="pembimbing2">
										<option>Pilih Dosen Pembimbing 2</option>
										@foreach($data as $d)
										<option value="{{$d->nama}}">{{$d->nama}}</option>
										@endforeach
									</select>
									<br>
									<label>Masukkan File Lampiran (Isi : Sertifikat Web Binar, Tarbulasi Nilai : satu  file PDF)</label>
									<input type="file" class="form-control" name="lampiran" placeholder="" required="">
									<br>
									<input type="text" class="form-control" name="kode" placeholder="Kode Login" required="">
									<br>
									<button id="btn-moreqq" type="submit" name="sub" class="btn btn-success"><i class="lnr lnr-location"></i> Usulkan Judul</button>
								</div>
								</form>
							</div>
					</div>
					<!-- END OVERVIEW -->

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
