<?php
	include('conn.php');
	if($_POST['upload']){
	$judul=$_POST['judul'];
	$isi=$_POST['isi'];
	$id_menu=$_POST['id_menu'];
	$id_submenu=$_POST['id_submenu'];
	
			$ekstensi_diperbolehkan	= array('png','jpg');
			$gambar = $_FILES['file']['name'];
			$x = explode('.', $gambar);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];
			
			$path = 'admin/upload/'.$gambar;
			$gambar_url = 'https://polyandrous-teeth.000webhostapp.com/'.$path;
			
			if($_POST['upload']){
			$ekstensi_bacaan_diperbolehkan	= array('png','jpg');
			$gambar_bacaan = $_FILES['file_dua']['name'];
			$x_bacaan = explode('.', $gambar_bacaan);
			$ekstensi_bacaan = strtolower(end($x_bacaan));
			$ukuran_bacaan	= $_FILES['file_dua']['size'];
			$file_tmp_bacaan = $_FILES['file_dua']['tmp_name'];
			
			$path_bacaan = 'admin/upload_bacaan/'.$gambar_bacaan;
			$gambar_bacaan_url = 'https://polyandrous-teeth.000webhostapp.com/'.$path_bacaan;

			if($_POST['upload']){
			$ekstensi_music_diperbolehkan	= array('ogg','mp3');
			$music = $_FILES['file_music']['name'];
			$x_music = explode('.', $music);
			$ekstensi_music = strtolower(end($x_music));
			$ukuran_music	= $_FILES['file_music']['size'];
			$file_tmp_music = $_FILES['file_music']['tmp_name'];

			$path_music = 'admin/upload_music/'.$music;
			$music_url = 'https://polyandrous-teeth.000webhostapp.com/'.$path_music;			
			
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true && in_array($ekstensi_bacaan, $ekstensi_bacaan_diperbolehkan) === true && in_array($ekstensi_music, $ekstensi_music_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'upload/'.$gambar);
					if($ukuran_bacaan < 1044070){			
						move_uploaded_file($file_tmp_bacaan, 'upload_bacaan/'.$gambar_bacaan);
							if($ukuran_music < 91044070){			
								move_uploaded_file($file_tmp_music, 'upload_music/'.$music);
					mysqli_query($conn,"insert into tb_artikel (judul, isi, gambar, gambar_url ,gambar_bacaan, gambar_bacaan_url, music, music_url,id_menu, id_submenu) values ('$judul','$isi','$gambar', '$gambar_url','$gambar_bacaan','$gambar_bacaan_url','$music', '$music_url','$id_menu','$id_submenu')");
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