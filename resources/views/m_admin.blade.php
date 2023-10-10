<!DOCTYPE html>
<html>
<head>
	<title>cari</title><!-- Javascript -->
	<script src="{{asset('tampilan/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('tampilan/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('tampilan/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('tampilan/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('tampilan/vendor/chartist/js/chartist.min.js')}}"></script>
	<script src="{{asset('tampilan/scripts/klorofil-common.js')}}"></script>

</head>
<body>
<form action="/cari" method="POST">
	@csrf
	<input type="text" name="stb" id="stb">
	<button type="submit">Cari</button>
    <button >Cari2</button>
</form>
<div id="judul">{{$halo='kosong'}}</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#stb').keyup(function(){
			var stb = $(this).val();
			if(stb != ''){
				$('#judul').fadeIn();
                $('#judul').html('Jancuuuk');
				$.ajax({
					url:'/cari',
					method:'POST',
					data:{stb:stb},
					dataType:"text",
					success:function(data) {
						$('#judul').fadeIn();
                           $('#judul').html(data);
                           console.log(data);
					}
				});
			}
		});
	});
</script>
</body>
</html>