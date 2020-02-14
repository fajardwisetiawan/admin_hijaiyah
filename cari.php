<?php 

	require_once('koneksi.php');
	
	$cari = $_POST['cari'];
	
		$sql = "SELECT * FROM tb_menu LEFT JOIN tb_submenu ON tb_submenu.id_menutajwid = tb_menu.id_menu LEFT JOIN tb_artikel ON tb_artikel.id_submenu = tb_submenu.id_submenu OR tb_artikel.id_menu = tb_menu.id_menu WHERE isi_menu LIKE '%$cari%' OR isi_submenu LIKE '%$cari%' OR isi LIKE '%$cari%'";
	$json = mysqli_query($con,$sql);
	
if($row = mysqli_fetch_assoc($json)){
	while($row = mysqli_fetch_assoc($json)){
		$jsn[] = $row;
	}	
}else {
	$jsn[] = $row;
}
	echo json_encode($jsn);	
	mysqli_close($con);	

?>