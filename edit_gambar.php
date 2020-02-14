<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$id_gambar=$_POST['id_gambar'];
	$gambar=$_POST['gambar'];
	
	mysqli_query($conn,"update tb_gambar set id_gambar='$id_gambar', gambar='$gambar' where id_gambar='$id'");
	header('location:gambar.php');

?>