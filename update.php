<?php 

 /*
 
 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/
 
 */
	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable 
		$id = $_POST['id_submenu'];
		$name = $_POST['isi_submenu'];
				
		//import file koneksi database 
		require_once('koneksi.php');
		
		//Membuat SQL Query
		$sql = "UPDATE tb_submenu SET isi_submenu = '$name' WHERE id_submenu = $id;";
		
		//Meng-update Database 
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Update Data tajwid';
		}else{
			echo 'Gagal Update Data tajwid';
		}
		
		mysqli_close($con);
	}
?>