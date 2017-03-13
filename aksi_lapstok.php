<?php
include("connect.php");
$id_stok = $_POST["ID Stock"];
$tanggal_stok = $_POST["Tanggal Stock"];
$namapj = $_POST["Nama Penanggung Jawab"];
$jumlah_awal = $_POST["Jumlah Awal"];
$jumlah_akhir = $_POST["Jumlah Akhir"];
$selisih = $_POST["Selisih"];

$sqlstr="insert into laporan stok (ID Stock,Tanggal Stock,Nama Penanggung Jawab,Jumlah Awal,Jumlah Akhir,Selisih) 
values ('$id_stok','$tanggal_stok','$namapj','$jumlah_awal','$jumlah_akhir','$selisih')";
$hasil = mysql_query($sqlstr,$conn);
echo "<br>Input data berhasil<br>";
?>
<script>document.location.href="../pkl/home/index.html"</script>
