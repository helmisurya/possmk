<?php

	include 'connect.php';
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query=mysql_query("select * from login where username='$username' and password='$password'");
	$log=mysql_num_rows($query);
	if($log==TRUE){
		header('location:../pkl/home/index.html');
	}
	else{
		echo "Gagal Otentikasi";
	}

?>