<?php
	$jari = $_POST['jarijari'];
	$phi = $_POST['phi'];
	$hitung = (4/3*3.14)*($jari*$jari*$jari);
		echo"Rumus = (1/3*$phi)*($jari*$jari) <br>";
		echo"Jari-jari = $jari <br><br>";
		echo"Volume  = $hitung cm";
?>