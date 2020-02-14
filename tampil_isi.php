<?php 

	require_once('koneksi.php');
	
	if(empty($_GET['id_submenu'])){
		$id_menu=$_GET['id_menu'];
		$sql = "SELECT * FROM tb_artikel WHERE id_menu='$id_menu'";
	}elseif(empty($_GET['id_menu'])){
		$id_submenu=$_GET['id_submenu'];
		$sql = "SELECT * FROM tb_artikel WHERE id_submenu='$id_submenu'";
	}
	
	$json = mysqli_query($con,$sql);	
	while($row = mysqli_fetch_assoc($json)){
		$jsn[] = $row;
	}	
	echo json_encode($jsn);	
	mysqli_close($con);	

?>