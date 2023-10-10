<!DOCTYPE html>
<html>
<head>
	<title>File - SK</title>
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
	<center>
		<table style="margin: 15px;">
		<tr>
			<td rowspan="3" align="left"><img src="{{asset('tampilan/img/umi.png')}}" width="100px"></td>
			<td colspan="" align="center"><strong>YAYASAN WAKAF UMI</strong> <br><span style="font-size: 20px; font-weight: bold;">UNIVERSITAS MUSLIM INDONESIA</span> <br> <span style="font-size: 26px; font-weight: bold;">FAKULTAS ILMU KOMPUTER</span>
				<br> <span style="font-size: 28px; font-weight: bold;">PROGRAM STUDI TEKNIK INFORMATIKA</span></td>
		</tr>
		<tr>
			<td colspan="" align="" ></td>
		</tr>
		<tr>
			<td colspan="" align="" ></td>
		</tr>
		<tr border="" style="">
			<td colspan="2" align="center">Kampus II UMI Jl. Urip Sumoharjo KM. 05 Tlp. (0411) 453009, Fax(0411) 453009, Makassar 90231
			<hr width="100%" style="border-top: 5px double;">
		</td>
		</tr>
		<tr border="" style="border: 1px;">
			<td colspan="2" align="center" border="" style="border: 1px;"></td>
		</tr>
		<tr style="border: 1px; margin-top: 3px;">
			<td colspan="2" align="center" style="border: 1px; "><p style="margin-top: 0px; margin-bottom: 8px;"><i>BISMILLAHIRRAHMANIRRAHIM</i></p> <br>
			</td>
		</tr>
		<tr style="border: 1px; margin-top: 10px;">
			<td colspan="2" align="center" style=""><strong style="font-size: 29px"><u>SURAT PENUNJUKKAN</u></strong> <br>Nomor : 1286/H.22/TI/FIK-UMI/XII/2019
			</td>
		</tr>
		<tr style="border: 1px; margin-top: 20px;">
			<td colspan="2" align="left" style="">
				<p style="margin-top: 15px;">Sesuai peraturan akademik pada Pogram Studi Teknik Informatika Fakultas Ilmu Komputer Universitas Muslim Indonesia dengan ini menetapkan tim penguji atau penanggap pada Seminar Propsal maka : </p><br>
				<table style="margin-left: 50px;">
					<tr>
						<td>
						Pembimbing I
						</td>
						<td><p style="margin-left: 20px;margin-right: 20px;">:</p>
						</td>
						<td>{{$data->pembimbing1}}</td>
					</tr>
					<tr>
						<td>
						Pembimbing II
						</td>
						<td><p style="margin-left: 20px;margin-right: 20px;">:</p>
						</td>
						<td>{{$data->pembimbing2}}</td>
					</tr>
					<tr>
						<td>
						Ketua
						</td>
						<td><p style="margin-left: 20px;margin-right: 20px;">:</p>
						</td>
						<td>{{$data->ketua}}</td>
					</tr>
					<tr>
						<td>
						Penguji
						</td>
						<td><p style="margin-left: 20px;margin-right: 20px;">:</p>
						<td><ol type="1">
					<li>{{$data->penguji1}}</li>
					<li>{{$data->penguji2}}</li>
					<li>{{$data->penguji3}}</li>
				</ol></td>
					</tr>
				</table>
			</td>
		</tr>
		
		<tr style="border: 1px; ">
			<td colspan="2" align="left" style="">Bertugas Melaksanakan ujian seminar prposal bagi mahasiswa :<br>
				<table style="margin-left: 0px;" class="table table-bordered">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Stambuk</th>
						<th>Program Studi</th>
					</tr>
					<tr>
						<td>01</td>
						<td>{{$data->nama}}</td>
						<td>{{$data->stambuk}}</td>
						<td>Teknik Informatika</td>
					</tr>
				</table>
			</td>
		</tr>
		
		<tr style="border: 1px; margin-top: 20px;">
			<td colspan="2" align="left" style="">Judul : <span style="margin-left: 15px;">{{$data->judul}}</span>
			</td>
			<td colspan="2" align="" style="">
			</td>
		</tr>
		<tr style="border: 1px; ">
			<td colspan="2" align="left" style="">
				<table style="margin-left: 50px; margin-top: 30px;" class="">
					<tr>
						<td><p style=""> Tanggal Jam</p></td>
						<td><p>:</p></td>
						<td><p>{{$data->jadwalp}}</p></td>
					</tr>
					<tr>
						<td>Tempat</td>
						<td>:</td>
						<td>{{$data->tempat}}</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr style="border: 1px; margin-top: 20px;">
			<td colspan="2" align="left" style="">
				<p style="margin-top: 15px;">Demikian surat penunjukkan ini disampaikan kepada yag bersangkutan untuk dilaksanakan dengan penuh tanggung jawab dan amanah
				<br>
				Wallahu Waliyyu Taufiq wal-Hidayah<p>
			</td>
		</tr>
		<tr style="border: 1px; margin-top: 20px;">
			<td colspan="2" align="right" style="">
				<span style="margin-top: 15px;">Makassar, <u>tanggal Bulan Tahun H</u></span><br>
				
				
			</td>
		</tr>
		<tr style="border: 1px; margin-top: 40px;">
			<td colspan="2" align="center" style=""><p style="margin-top: 20px;">Ketua Program Studi</p>
			<br>
			<br>
			<br>
			<span> <u>{{$ketua->nama}}</u></span>
			 
			</td>
		</tr>
		
	</table>
	</center>
	
</body>
<script type="text/javascript">
		window.print();
	</script>
</html>