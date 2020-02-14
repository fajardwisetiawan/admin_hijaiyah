<?php 

 /*
 
 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/
 
 */

 //Mendapatkan Nilai ID
 $id = $_GET['id_submenu'];
 
 //Import File Koneksi Database
 require_once('koneksi.php');
 
 //Membuat SQL Query
 $sql = "DELETE FROM tb_submenu WHERE id=$id;";

 
 //Menghapus Nilai pada Database 
 if(mysqli_query($con,$sql)){
 echo 'Berhasil Menghapus tajwid';
 }else{
 echo 'Gagal Menghapus tajwid';
 }
 
 mysqli_close($con);
 ?>