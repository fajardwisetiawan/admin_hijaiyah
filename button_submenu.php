<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['id_submenu']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from tb_submenu where id_submenu='".$row['id_submenu']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>ID: <strong><?php echo $drow['id_submenu']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete_submenu.php?id=<?php echo $row['id_submenu']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['id_submenu']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from tb_submenu where id_submenu='".$row['id_submenu']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit_submenu.php?id=<?php echo $erow['id_submenu']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">ID:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="id_submenu" class="form-control" value="<?php echo $erow['id_submenu']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Isi Submenu:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="isi_submenu" class="form-control" value="<?php echo $erow['isi_submenu']; ?>">
						</div>
                </div> 
				<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">ID Menu Tajwid:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="id_menutajwid" class="form-control" value="<?php echo $erow['id_menutajwid']; ?>">
						</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->