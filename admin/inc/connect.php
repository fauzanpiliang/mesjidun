<?php
	$host = "ec2-52-20-66-171.compute-1.amazonaws.com";
	$dbname = "d8pon414m7k0na";
	$pass = "2d52699a4ca2eb55e38a65158744f695748e0b978ec03674eba74324c8a2d250";
	$port = "5433";
	$user = "vtaeaqxtswgori";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>
