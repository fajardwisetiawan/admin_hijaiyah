<form method="post" action="addnew.php" enctype="multipart/form-data">
<input type="file" name="file" multiple="true" >
<input type="submit" name="upload" value="upload">
</form>

</br>
<p>Hasil: </p>
</br>
<?php
				include('conn.php');
				
				$query=mysqli_query($conn,"select * from `tb_artikel`");
				while($row=mysqli_fetch_array($query)){
					?>`
					<tr>
					
					<td><?php echo "<audio controls src='upload_music/".$row['music']."' width='100' height='100'></audio>" ?></td>
					</tr>
				<?php }?>

