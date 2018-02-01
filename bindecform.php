<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
		<body>
			<form name="myform"  action="" method="post">

				<input type="text" name="bilangan" placeholder="Masukkan Angka biner">
				<br>
				<input type ="checkbox" name="desimal" value="desimal">desimal
				<br>
				<input type="submit" name="submit" value="kirim">
			</form>	
		</body>
</html>
<?php
//konversi biner ke  desimal versi 
if (isset($_POST['bilangan'])) {
                $biner = $_POST['bilangan'];
                $desimal = 0;
				for ($n=0; $n < strlen($biner); $n++) { 
					$temp = substr($biner, strlen($biner)-$n-1, 1); // membaca digit biner
					$temp = $temp * (2**$n); // menghitung 1 digit biner
					$desimal += $temp;	// menjumlahkan hasil perhitungan 1 digit biner
				}
				echo  "<br>Nilai Konversi angka biner $biner ke desimal adalah $desimal ";
			}

				

?>
