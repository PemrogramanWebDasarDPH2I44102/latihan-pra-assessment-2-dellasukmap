<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Aplikasi Penerimaan Paket di Asrama</h1>
	<form method="POST">
		Tanggal Datang : <input type="date" name="td"><br><br>
		Sasaran :   <select name="sasaran">
					<option>Pilih</option>
					<option>Della</option>
					<option>Elisa</option>
					<option>Alvin</option>
					<option>Ikhsan</option>
					</select><br><br>
		Penerima : <input type="text" name="penerima"><br><br>
		Isi Paket : <input type="text" name="isipaket"><br><br>
		Tanggal Ambil : <input type="date" name="ta"><br><br>

		<input type="submit" name="submit" value="SUBMIT">
	</form>
</body>
</html>

<?php  
$db = mysqli_connect('localhost', 'root', '', 'latihan');
if (isset($_POST['submit'])){
	$td = $_POST['td'];
	$sasaran = $_POST['sasaran'];
	$penerima = $_POST['penerima'];
	$isipaket = $_POST['isipaket'];
	$ta = $_POST['ta'];
}

?>