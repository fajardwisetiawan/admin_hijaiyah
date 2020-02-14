<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$id_submenu=$_POST['id_submenu'];
	$isi_submenu=$_POST['isi_submenu'];
	$id_menutajwid=$_POST['id_menutajwid'];
	
	mysqli_query($conn,"update tb_submenu set id_submenu='$id_submenu', isi_submenu='$isi_submenu', id_menutajwid='$id_menutajwid' where id_submenu='$id'");
	header('location:submenu.php');

?>