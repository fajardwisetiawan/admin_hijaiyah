<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['id_artikel']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from tb_artikel where id_artikel='".$row['id_artikel']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Judul: <strong><?php echo $drow['judul']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?id=<?php echo $row['id_artikel']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['id_artikel']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from tb_artikel where id_artikel='".$row['id_artikel']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['id_artikel']; ?>" enctype="multipart/form-data">
				
					
					<div style="height:10px;"></div>
					
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Judul:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="judul" class="form-control" value="<?php echo $erow['judul']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Isi:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="isi" class="form-control" value="<?php echo $erow['isi']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Gambar Huruf:</label>
						</div>
						<div class="col-lg-10">
							<input type="file" class="control-label" name="file">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Gambar Bacaan:</label>
						</div>
						<div class="col-lg-10">
							<input type="file" class="control-label" name="file_dua">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Audio:</label>
						</div>
						<div class="col-lg-10">
							<input type="file" class="control-label" name="file_music">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">ID Menu:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="id_menu" class="form-control" value="<?php echo $erow['id_menu']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">ID Submenu:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="id_submenu" class="form-control" value="<?php echo $erow['id_submenu']; ?>">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <input type="submit" class="btn btn-warning" name="edit" class="glyphicon glyphicon-check" value="Update">
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Play -->
    <div class="modal fade" id="play<?php echo $row['id_artikel']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Audio</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$play=mysqli_query($conn,"select * from tb_artikel where id_artikel='".$row['id_artikel']."'");
					$drow=mysqli_fetch_array($play);
				?>
				<div class="container-fluid">
					<div class="col-md-12" >
                            <h4><span class="fa fa-music"></span> <?php echo $row['judul'] ?></h4>
                          <?php echo "<audio src='upload_music/".$row['music']."'></audio>" ?>
                        </div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Back</button>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->