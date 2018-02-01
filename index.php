<?php
$biner = "1000";
$desimal = 0;
for ($n=0; $n < strlen($biner); $n++) { 
	$temp = substr($biner, strlen($biner)-$n-1, 1); // membaca digit biner
	$temp = $temp * (2**$n); // menghitung 1 digit biner
	$desimal += $temp;	// menjumlahkan hasil perhitungan 1 digit biner
}
echo $desimal;

?>
