<html>
<head>
<link rel="stylesheet" type="text/css" href="../pkl/home/css/style.css">
<title>Laporan Penyesuaian Stock</title>
</head>
<body>
<table border="0">
			<form action="aksi_lapstok.php" method="post">
			<h2><strong><font color="#fcc602">Laporan Penyesuaian Stock</font></strong></h2>
        <strong></strong></td>
		<div class="lapstok">
<tr>
<td>ID Stock<td>:<td><input type="text" name="id_stok"></td><tr/>
<tr>
<td>Tanggal Stock<td>:<td><input type="date" name="tanggal_stok"></td><tr/>
<tr>
<td>Nama Penanggung Jawab<td>:<td><input type="text" name="nama_pj"></td><tr/>
<tr>
<td>Jumlah Awal<td>:<td><input type="text" name="jumlah_awal"></td><tr/>
<tr>
<td>Jumlah Akhir<td>:<td><input type="text" name="jumlah_akhir"></td><tr/>
<tr>
<td>Selisih<td>:<td><input type="text" name="selisih"></td><tr/>
<tr>
<td><input type="submit" name="submit" value="Add"></td>
<td><input  type="reset" name="Reset" value="Cancel"></td></tr>
</div>
</table>
</body>
</html>