<div class="content-wrapper">
	<div class="row">
		<div class="col-md-4 d-flex align-items-stretch grid-margin">
			<div class="row flex-grow">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title text-center">My Profile</h4>
							<p class="card-description text-center">
								<img src="../vendor/images/img_Users/<?=$data['image']; ?>" alt="" style="border:3px solid black;width: 100px;height: 100px;border-radius: 7px;"/>
							</p>
	
							<form class="forms-sample" method="post" action="?page=proses" enctype="multipart/form-data">
								<div class="form-group">
									<label>NPP</label>
									<input type="hidden"  name="ID" value="<?=$data['id'] ?>">
									<input type="text" class="form-control" name="nik" value="<?=$data['nik'] ?>" disabled>
								</div>
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" class="form-control" name="nama" value="<?=$data['nama'] ?>">
								</div>
								<div class="form-group">
									<label>Email address</label>
									<input type="text" name="email" class="form-control" value="<?=$data['email'] ?>">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="password" class="form-control">
								</div>
								<div class="form-group">
									<label>Foto</label>
									<input id="file" type="file" name="foto" class="form-control">                      
								</div>
								<button type="submit" name="profilUpdate" class="btn btn-info mr-2">Update</button>
								<a href="javascript:history.back()" class="btn btn-light">Batal</a>
							</form>
						</div>
					</div>
                </div>
			</div>
		</div>
     </div>
</div>


