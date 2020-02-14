<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew.php" enctype="multipart/form-data">
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Judul:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="judul">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Isi:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="isi">
						</div>
					</div>
					<div style="height:30px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Gambar Huruf:</label>
						</div>
						<div class="col-lg-10">
							<input type="file" class="control-label" name="file">
						</div>
					</div>
					<div style="height:30px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Gambar Bacaan:</label>
						</div>
						<div class="col-lg-10">
							<input type="file" class="control-label" name="file_dua">
						</div>
					</div>
					<div style="height:30px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Audio:</label>
						</div>
						<div class="col-lg-10">
							<input type="file" class="control-label" name="file_music">
						</div>
					</div>
					<div style="height:30px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">ID Menu:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="id_menu">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">ID Submenu:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="id_submenu">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary" name="upload" value="Save"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
				</form>
                </div>
				
            </div>
        </div>
    </div>
