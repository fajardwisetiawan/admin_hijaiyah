<?php
	include('conn.php');
	$id=$_GET['id'];
	
	$query = "SELECT * FROM tb_artikel WHERE id_artikel='".$id."'";
	$sql = mysqli_query($conn, $query);
	$data = mysqli_fetch_array($sql);

	$query2 = "DELETE FROM tb_artikel WHERE id_artikel='".$id."'";
	$sql2 = mysqli_query($conn, $query2); 
	if($sql2){
  
	header("location: isi.php");
	}else{
	echo "Data gagal dihapus. <a href='isi.php'>Kembali</a>";
	}
?>