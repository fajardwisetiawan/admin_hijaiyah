<?php
	include('conn.php');
	
	$id_submenu=$_POST['id_submenu'];
	$isi_submenu=$_POST['isi_submenu'];
	$id_menutajwid=$_POST['id_menutajwid'];
	
	mysqli_query($conn,"insert into tb_submenu (id_submenu, isi_submenu, id_menutajwid) values ('$id_submenu', '$isi_submenu', '$id_menutajwid')");
	header('location:submenu.php');

?>