<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Home</title>
		<link rel="stylesheet" type="text/css" href="../pkl/home/css/style.css">
		<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css'>
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<link rel="stylesheet" href="/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.1.5/angular.min.js"></script>
    <script src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.6.0.js" type="text/javascript"></script>
    <script src="http://m-e-conroy.github.io/angular-dialog-service/javascripts/dialogs.min.js" type="text/javascript"></script>
  
</head>

<body>
  		<div class="background">
			<!--background is placed here (obviously)-->
		</div>

		<div id="main-content">
			<!--Generate the story here-->
		</div>

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
		
		<div id="main-navigation">
		<br><img src="smi2.png" height="50px" width="200px;">
			<ul>
				<li>
					<a href="javascript:void(0)" class="entypo-home"><b><u>Home<i class="fa fa-home"></i></b></u></a>
				</li>
				<li>
					<a href="javascript:void(0)" class="entypo-basket"><b><u>Transaksi</b></u></a>
				</li>
				<li>
					<a href="javascript:void(0)" class="entypo-users"><b><u>Master Staff</b></u></a>
				</li>
				<li>
					<a href="javascript:void(0)" class="entypo-dropbox"><b><u>Master Barang</b></u></a>
				</li>
				<li>
					<a href="../laporan/lapstok.php" class="entypo-doc-text"><b><u>Laporan</b></u></a>
				</li>
				<li>
					<a href="../login/index.html" 	class="entypo-logout"><b><u>LogOut</b></u></a>
				</li>
			</ul>
		</div>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

		<script src="js/index.js"></script>

</body>
</html>
