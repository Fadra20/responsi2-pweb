<?php
		echo "<link rel=stylesheet href=responsi211.css type=text/css>";
		echo "<head><title> REKAP DATA HARIAN </head></title>";
		echo "<body background=anjay.jpg>";
		$nama = $_POST["nama"];
		$jumlah_liter = $_POST["jumlah"];
		$jenis_bbm =  $_POST["jenis"];
		$pembayaran = $_POST["pembayaran"];
		$fp = fopen("responsi.txt","a+");
		fputs($fp,"$nama|$jumlah_liter|$jenis_bbm|$pembayaran\n");
		fclose($fp);

		echo "<br><br><br><br><br><br>";
		echo "<center><div id=lihat>";
		echo "<b>Terima Kasih Atas Kunjungan Anda</b><br></div></center>";
		echo "<br><br><br>";
		echo "<center><div id=bawh>";
		echo "<a href=responsi2.html> Isi Data</a></div><br>";
	
		echo "<center><div id=bawh>";
		echo "<a href=nyoba2.php> Lihat Data</a><br></div>";

?>