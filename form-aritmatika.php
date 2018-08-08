<!DOCTYPE html>
<html>
<head>
	<title>Soal 1</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Merriweather|PT+Sans|Source+Sans+Pro" rel="stylesheet">
</head>
<body>

	<div id="wrapper">
		<div id="container">
			<form action="proses-aritmatika.php" class="form" method="POST">
				<table border="0">
					<tr>
						<td>Angka 1</td>
						<td>:</td>
						<td><input type="text" name="angka1" placeholder="0"></td>
					</tr>
					<tr>
						<td>Angka 2</td>
						<td>:</td>
						<td><input type="text" name="angka2" placeholder="0"></td>
					</tr>
					<tr>
						<td>Aritmatika</td>
						<td>:</td>
						<td>
							<select name="aritmatika">
								<option value="1">Penjumalahan</option>	
								<option value="2">Pengurangan</option>
								<option value="3">Perkalian</option>
								<option value="4">Pembagian</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><input type="submit" name="submit" value="Proses"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
			
</body>
</html>

		