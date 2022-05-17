<?php
	$host="localhost";
	$user="root";
	$pass="";
	$name="wisatakulinerjember";
	$koneksi=mysql_connect($host,$user,$pass) or die("Koneksi kedatabase gagal!");
	mysql_select_db($name,$koneksi) or die("Tidak ada database yang dipilih!");
	ini_set("display_errors",0);
?>