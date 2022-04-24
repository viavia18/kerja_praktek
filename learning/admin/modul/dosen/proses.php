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