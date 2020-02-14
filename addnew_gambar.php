<?php
	include('conn.php');
	
	$id_gambar=$_POST['id_gambar'];
	$gambar=$_POST['gambar'];
	
	
	mysqli_query($conn,"insert into tb_gambar (id_gambar, gambar) values ('$id_gambar', '$gambar')");
	header('location:gambar.php');

?>