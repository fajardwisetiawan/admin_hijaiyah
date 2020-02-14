<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$id_menu=$_POST['id_menu'];
	$isi_menu=$_POST['isi_menu'];
	
	mysqli_query($conn,"update tb_menu set id_menu='$id_menu', isi_menu='$isi_menu' where id_menu='$id'");
	header('location:index.php');

?>