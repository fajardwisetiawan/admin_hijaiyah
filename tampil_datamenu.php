<?php 
	include "koneksi.php";	
	$query ="SELECT * FROM tb_menu";	
	$json = mysqli_query($con,$query);	
	while($row = mysqli_fetch_assoc($json)){
		$jsn[] = $row;
	}	
	echo json_encode($jsn);	
	mysqli_close($con);	
?>