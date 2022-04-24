<div class="content-wrapper">
	<h4> <b>Staff</b> <small class="text-muted">/ Tambah</small>
    </h4>
    <hr>
	<div class="row">
        <div class="col-md-6 d-flex align-items-stretch grid-margin">
			<div class="row flex-grow">
                <div class="col-12">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Form Tambah Data Staff</h4>
							<p class="card-description">
								
							</p>
							<form class="forms-sample" action="" method="post" enctype="multipart/form-data">
								<div class="form-group">
								<label>Nama Lengkap</label>
								<input name="nama" type="text" class="form-control" placeholder="Nama Lengkap">
								</div>
		
								<div class="form-group">
								<label>Kontak</label>
								<input name="email" type="email" class="form-control" placeholder="Kontak">
								</div>
								
								<div class="form-group">
								<label>Jabatan</label>
								<input name="nik" type="text" class="form-control" placeholder="Jabatan">
								</div>
		
								<div class="form-group">
								<label>Foto</label>
								<input name="foto" type="file" class="form-control">
								</div>
		
								<button name="save_dosen" type="submit" class="btn btn-success mr-2">Simpan</button>
								<button class="btn btn-light">Batal</button>
							</form>
	
							<?php 
			
							if (isset($_POST['save_dosen'])) {
								$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
								$pass = sha1($_POST['pass']);
								$nik = filter_input(INPUT_POST, 'nik', FILTER_SANITIZE_STRING);
								$nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
								$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
								$level = 1;
								
								$sumber = @$_FILES['foto']['tmp_name'];
								
								$temp = explode(".", @$_FILES["foto"]["name"]);
								$extensions = end($temp);
								
								$target = '../vendor/images/img_Users/';
								
								$nama_gambar = @$_FILES['foto']['name'];
								$size_gambar = @$_FILES['foto']['size'];
								$nama_input = md5($nama_gambar.$size_gambar).'.'.$extensions;
								
								if(!empty($sumber)){
									if(($_FILES["foto"]["type"] == "image/gif")
										|| ($_FILES["foto"]["type"] == "image/jpeg")
										|| ($_FILES["foto"]["type"] == "image/jpg")
										|| ($_FILES["foto"]["type"] == "image/pjpeg")
										|| ($_FILES["foto"]["type"] == "image/x-png")
										|| ($_FILES["foto"]["type"] == "image/png"))
									{
										$pindah = move_uploaded_file($sumber, $target.$nama_input);
										
										if ($pindah) {
											$save= mysqli_query($con,"INSERT INTO users (`username`, `password`, `nik`, `nama`, `email`, `image`, `level`)
																	VALUES('$username', '$pass', '$nik', '$nama', '$email', '$nama_input', '$level')");
											if ($save) {
												echo " <script>
												alert('Data Berhasil disimpan !');
												window.location='?page=dosen';
												</script>";
											}
										}	
										unlink($sumber);
									}
									else {
										echo " <script>
										alert('File Extension tidak diizinkan');
										</script>";
									}
								}
								else {
									$save= mysqli_query($con,"INSERT INTO users (`username`, `password`, `nik`, `nama`, `email`, `level`)
															VALUES('$username', '$pass', '$nik', '$nama', '$email', '$level')");
									if ($save) {
										echo " <script>
										alert('Data Berhasil disimpan !');
										window.location='?page=dosen';
										</script>";
									}
								}
							}
							?>
						</div>
					</div>
                </div>
			</div>
        </div>
    </div>
</div>
