<?php 
	
	include('conn.php');
	if($_POST['edit']){
		
	$id=$_GET['id'];
	
	$judul=$_POST['judul'];
	$isi=$_POST['isi'];
	
		$ekstensi_diperbolehkan	= array('png','jpg');
			$gambar = $_FILES['file']['name'];
			$x = explode('.', $gambar);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];
			
			if($_POST['edit']){
			$ekstensi_bacaan_diperbolehkan	= array('png','jpg');
			$gambar_bacaan = $_FILES['file_dua']['name'];
			$x_bacaan = explode('.', $gambar_bacaan);
			$ekstensi_bacaan = strtolower(end($x_bacaan));
			$ukuran_bacaan	= $_FILES['file_dua']['size'];
			$file_tmp_bacaan = $_FILES['file_dua']['tmp_name'];
			
			if($_POST['edit']){
			$ekstensi_music_diperbolehkan	= array('ogg','mp3');
			$music = $_FILES['file_music']['name'];
			$x_music = explode('.', $music);
			$ekstensi_music = strtolower(end($x_music));
			$ukuran_music	= $_FILES['file_music']['size'];
			$file_tmp_music = $_FILES['file_music']['tmp_name'];
  
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true && in_array($ekstensi_bacaan, $ekstensi_bacaan_diperbolehkan) === true && in_array($ekstensi_music, $ekstensi_music_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'upload/'.$gambar);
					if($ukuran_bacaan < 1044070){			
						move_uploaded_file($file_tmp_bacaan, 'upload_bacaan/'.$gambar_bacaan);
							if($ukuran_music < 91044070){			
								move_uploaded_file($file_tmp_music, 'upload_music/'.$music);
					mysqli_query($conn,"UPDATE tb_artikel SET judul = '$judul', isi = '$isi', gambar = '$gambar', gambar_bacaan = '$gambar_bacaan', music = '$music' WHERE id_artikel = '$id'");
					header('location:isi.php');
							}else{
							echo 'UKURAN FILE AUDIO TERLALU BESAR';
							}
					}else{
					echo 'UKURAN FILE GAMBAR BACAAN TERLALU BESAR';
					}
				}else{
					echo 'UKURAN FILE GAMBAR HURUF TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
	}else{
		echo "Terjadi kesalahan";
	}
	}
	}
?>