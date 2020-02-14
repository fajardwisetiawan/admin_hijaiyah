<?php
	/* ===== www.dedykuncoro.com ===== */
	$server		= "localhost"; //sesuaikan dengan nama server
	$user		= "id8530980_root"; //sesuaikan username
	$password	= "12345"; //sesuaikan password
	$database	= "id8530980_tajwid"; //sesuaikan target databese
	
	 $con = mysqli_connect($server, $user, $password, $database);
	if (mysqli_connect_errno()) {
		echo "Gagal terhubung MySQL: " . mysqli_connect_error();
	 }

?>