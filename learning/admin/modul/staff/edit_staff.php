<?php 
$edit= mysqli_query($con,"SELECT * FROM staff WHERE id='$_GET[id]' ");
foreach ($edit as $d) ?>
<div class="content-wrapper">
    <h4> <b>Staff</b> <small class="text-muted">/ Edit Data</small>
    </h4>
    <hr>
    <div class="row">
		<div class="col-md-6 d-flex align-items-stretch grid-margin">
			<div class="row flex-grow">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Form Edit Data Staff</h4>
							<form class="forms-sample" action="index.php?page=staff&act=proses" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input name="nama" type="text" class="form-control" value="<?=$d['nama'] ?>">
									<input name="id" type="hidden" class="form-control" value="<?=$d['id'] ?>">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input name="email" type="text" class="form-control" value="<?=$d['email'] ?>">
								</div>
								
								<div class="form-group">
								<label>Kontak</label>
								<input name="kontak" type="text" class="form-control" value="<?=$d['kontak'] ?>">
								</div>
								
								<div class="form-group">
								<label>Jabatan</label>
									<input name="jabatan" type="text" class="form-control" value="<?=$d['jabatan'] ?>">
								</div>
								<div class="form-group">
									<label>Foto</label>
									<input name="foto" type="file" class="form-control">
								</div>
								<button name="update_staff" type="submit" class="btn btn-success mr-2">Edit</button>
								<button class="btn btn-light">Batal</button>
							</form>
			
							<?php 
				
							
							?> 
			
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>