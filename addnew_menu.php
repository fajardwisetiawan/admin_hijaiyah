<?php
	include('conn.php');
	
	$id_menu=$_POST['id_menu'];
	$isi_menu=$_POST['isi_menu'];
	
	
	mysqli_query($conn,"insert into tb_menu (id_menu, isi_menu) values ('$id_menu', '$isi_menu')");
	header('location:index.php');

?>