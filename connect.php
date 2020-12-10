<?php
	$host = "localhost";
	$user = "postgres";
	$pass = "qwer1234";
	$port = "5433";
	$dbname = "bisalahoi";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>
