<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Merriweather|PT+Sans|Source+Sans+Pro" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-1.12.4.js"
			  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
			  crossorigin="anonymous"></script>
	<script src="http://code.responsivevoice.org/responsivevoice.js"></script>
</head>
<body>
	<div id="wrapper">
		<div id="container">
			<?php 
				error_reporting(0);
				include"function/aritmatika.php";
				include"function/terbilang.php";

				$angka1 = 0;
				$angka2 = 0;
				$hasil  = 0;
				$terbilang = "";

				if (isset($_POST['submit'])) {
					//untuk menghilang koma dikarena js number
					$angka1 = str_replace(",","",@$_POST['angka1']);
					$angka2 = str_replace(",","",@$_POST['angka2']);
					
					$aritmatika = @$_POST['aritmatika'];

					if ($aritmatika == 1) {
						$hasil = penjumlahan($angka1, $angka2);
						echo "Hasil Penjumlahan : <b>" . number_format($hasil,0) ."</b>"; 
					} elseif ($aritmatika == 2) {
						$hasil = pengurangan($angka1, $angka2);
						echo "Hasil Pengurangan : <b>" . number_format($hasil,3) ."</b>";
					} elseif ($aritmatika == 3) {
						$hasil = perkalian($angka1, $angka2);
						echo "Hasil Perkalian : <b>" . number_format($hasil,3) ."</b>";
					} elseif ($aritmatika == 4) {
						$hasil = pembagian($angka1, $angka2);
						echo "Hasil Pembagian : <b>" . number_format($hasil,3) ."</b>";
					} else {
						$hasil = 0;
						echo "Gagal...";
					}

					$terbilang = ucwords(terbilang(number_format($hasil,3)));
					echo "<br>Terbilang : ".$terbilang;
					echo "<p>
						<a href='index.php'>Kembali</a>
					</p>";

				}
			?>
		</div>
	</div>		

	<script type="text/javascript">
		$(function(){
			responsiveVoice.speak("<?php echo $terbilang; ?>", 'Indonesian Male');	
		})
		
	</script>
</body>
</html>



	