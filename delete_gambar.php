<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from tb_gambar where id_gambar='$id'");
	header('location:gambar.php');

?>