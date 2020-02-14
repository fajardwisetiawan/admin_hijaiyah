<?php 

 /*
 
 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/
 
 */
	
	//Mendapatkan Nilai Dari Variable ID Pegawai yang ingin ditampilkan
	$id = $_GET['id'];
	//Importing database
	require_once('koneksi.php');
	
	//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
	$sql = "SELECT * FROM tb_submenu WHERE id_menutajwid=$id";
	$json = mysqli_query($con,$sql);	
	while($row = mysqli_fetch_assoc($json)){
		$jsn[] = $row;
	}	
	echo json_encode($jsn);	
	mysqli_close($con);	

?>