<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from tb_submenu where id_submenu='$id'");
	header('location:submenu.php');

?>