<?php
echo "<link rek=stylesheet href=responsi211.css type=text/css>";
echo "<br><br><br><br><br>";
echo "<center><div id=nyoba2>";
echo "<body background=anjay.jpg>";
echo "<head><title> REKAP DATA HARIAN </title></head>";
echo "<center><br> TABLE DATA </center>";
$fp = fopen("responsi.txt", "r");
echo "<table border=1 width=100% align=center>";
echo "<tr><th> tanggal </th><th> nama </th><th> jumlah liter </th><th> jenis_bbm </th><th> pembayaran </th></tr>";
$tanggal=date("d-m-Y");
while ($isi=fgets($fp, 80)) 
{
	$pisah= explode("|", $isi);
	echo "<tr><th> $tanggal </th><th> $pisah[0] </th><th> $pisah[1] </th><th> $pisah[2] </th><th> $pisah[3] </th></tr>";
}
echo "<br><br></table></div></center>";
echo "<br><br><br>";
echo "<center><div id=bawh>";
echo "<a href= responsi2.html> Isi Data </a>";
echo "</div></center>";