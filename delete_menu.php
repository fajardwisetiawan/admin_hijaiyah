<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from tb_menu where id_menu='$id'");
	header('location:index.php');

?>