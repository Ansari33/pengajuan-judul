<!doctype html>
<html lang="en">

<head>
	<title>Profil Tugas Akhir Mahasiswa FIKOM UMI</title>
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
		
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		
			<!-- MAIN CONTENT -->
			
				<div class="container-fluid" style="margin: 10%; margin-top: 6%; margin-bottom: 0%;" >
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading text-center">
							<h2 class="panel-title"><strong>Profil Tugas Akhir Mahasiswa</strong></h2>
							
						</div>
						<div class="panel">
								
									@foreach($data as $d)
								<div class="panel-body">

									<div class="form-row"><input type="text" class="form-control" placeholder="stambuk" name="stambuk" value="{{$d->stambuk}}" required="" disabled="">
									<br>
									<input type="text" class="form-control" name="nama" value="{{$d->nama}}" placeholder="nama" required="" readonly=""></div>
									<input type="hidden" name="_token" value="{{csrf_token()}}">
									
									<br>
									<textarea class="form-control" name="judul1" placeholder="Judul 1" rows="3" required="" readonly="">{{$d->diterima}}</textarea>
									<br>
									<input readonly="" type="text" value="{{$d->pembimbing1}}" class="form-control" placeholder="usulan Pembimbing 1" name="pembimbing1">
									<br>
									<input type="text" class="form-control" name="pembimbing2" placeholder="usulan Pembimbing 2" value="{{$d->pembimbing2}}" readonly="">
									<br>
									<input type="text" class="form-control" name="kode" placeholder="Kode Login" required="" value="{{$d->kode}}" readonly="">
									<br>
									
									<table class="table table-responsive">
										<tr>
											<th>Status Seminar Proposal</th>
											<th>Status Seminar Hasil</th>
											<th>Status Seminar Tutup</th>
										</tr>
										<tr>
											@if($statusp == 'Belum Mengajukan Propsal')
											<td><span class="label label-danger">{{$statusp}}</span></td>
											<td><span class="label label-default">{{$statush}}</span></td>
											<td><span class="label label-default">{{$statusm}}</span></td>
											@endif
											@if($statusp == 'Sedang Mengajukan')
											 <td><span class="label label-warning">{{$statusp}}</span></td>
											<td><span class="label label-default">{{$statush}}</span></td>
											<td><span class="label label-default">{{$statusm}}</span></td>
											@endif											
											@if($statusp == 'Sudah Dijadwalkan')
											 <td><span class="label label-info">{{$statusp}}</span></td>
											<td><span class="label label-default">{{$statush}}</span></td>
											<td><span class="label label-default">{{$statusm}}</span></td>
											@endif
											@if($statusp == 'Telah Diujikan')
											 <td><span class="label label-success">{{$statusp}}</span></td>
											 @if($statush == 'Belum Mengajukan Hasil')
											 <td><span class="label label-danger">{{$statush}}</span></td>
											 @endif
											 @if($statush == 'Sedang Mengajukan')
											 <td><span class="label label-warning">{{$statush}}</span></td>
											 @endif
											 @if($statush == 'Sudah Dijadwalkan')
											 <td><span class="label label-info">{{$statush}}</span></td>
											 @endif
											 @if($statush == 'Telah Diujikan')
											 <td><span class="label label-success">{{$statush}}</span></td>
											 	@if($statusm == 'Belum Mengajukan Ujian Tutup')
											 	<td><span class="label label-danger">{{$statusm}}</span></td>
											 	@endif
											 	@if($statusm == 'Sedang Mengajukan')
											 	<td><span class="label label-warning">{{$statusm}}</span></td>
											 	@endif
											 	@if($statusm == 'Sudah Dijadwalkan')
											 	<td><span class="label label-info">{{$statusm}}</span></td>
											 	@endif
											 	@if($statusm == 'Telah Diujikan')
											 	<td><span class="label label-success">{{$statusm}}</span></td>
											 	@endif
											 @endif	
											
											@endif
										</tr>
									</table>

								<!-- form Pengajuan -->
								@if($statusp == 'Belum Mengajukan Propsal')
								<form id="myform" action="/addsemprop" method="POST" >
									@csrf
									
								<div class="panel-body">
									<div class="form-row"><input type="hidden" class="" placeholder="stambuk" name="stambuk" value="{{$d->stambuk}}" required="" readonly="">
									
									<input type="hidden" class="" name="nama" value="{{$d->nama}}" placeholder="nama" required="" readonly=""></div>
									<input type="hidden" name="_token" value="{{csrf_token()}}">
								
									<input type="hidden" name="judul" value="{{$d->diterima}}">
									<input readonly="" type="hidden" value="{{$d->pembimbing1}}" class="form-control" placeholder="usulan Pembimbing 1" name="pembimbing1">
								
									<input type="hidden" class="form-control" name="pembimbing2" placeholder="usulan Pembimbing 2" value="{{$d->pembimbing2}}" readonly="">

									
									<button id="btn-moreqq" type="submit" name="sub" class="btn btn-success">Ajukan Seminar Proposal</button>
									<a href="/skpb1/{{$d->stambuk}}" class="btn btn-info">SK Pembimbing 1</a>
									<a href="/skpb2/{{$d->stambuk}}" class="btn btn-info">SK Pembimbing 2</a>
								</div>
								
								</form>
								@endif
							@if($statusp == 'Sudah Dijadwalkan')
							<a href="/jadwalpm" class="btn btn-success text-center">Lihat Jadwal Saya</a>
							@endif
							@if($statusp == 'Telah Diujikan')
								@if($statush == 'Belum Mengajukan Hasil')
								<form id="myform" action="/addsemhas" method="POST" >
									@csrf
									<div class="form-row"><input type="hidden" class="" placeholder="stambuk" name="stambuk" value="{{$d->stambuk}}" required="" readonly="">
									<input type="hidden" name="judul" value="{{$d->diterima}}">

									<button id="btn-moreqq" type="submit" name="sub" class="btn btn-success">Ajukan Seminar Hasil</button>
								
								</form>
								@endif
								@if($statush == 'Sudah Dijadwalkan')
								<a href="/jadwalhm" class="btn btn-success">Lihat Jadwal Saya</a>
								@endif
								@if($statush == 'Telah Diujikan')
									@if($statusm == 'Belum Mengajukan Ujian Tutup' )
										<form id="myform" action="/addsemtutup" method="POST" >
									@csrf
									
									<div class="form-row"><input type="hidden" class="" placeholder="stambuk" name="stambuk" value="{{$d->stambuk}}" required="" readonly="">
									<input type="hidden" name="judul" value="{{$d->diterima}}">

									<button id="btn-moreqq" type="submit" name="sub" class="btn btn-success">Ajukan Seminar Tutup</button>
								    	</form>
									@endif
									@if($statusm == 'Sudah Dijadwalkan')
									<div class="text-center">
										<a href="/jadwaltm" class="btn btn-success">Lihat Jadwal Saya</a>
									</div>
									
									@endif
									@if($statusm == 'Telah Diujikan')
									<h3>Selamat {{$d->nama}}, S.Kom. Telah Meraih Gelar Sarjana. </h3>
									@endif
								@endif
							@endif
								<!-- ----------------------- -->	
								</div>
								
							</div>
						
							
							
					</div>
					<!-- END OVERVIEW -->

				</div>
			
			@endforeach
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
