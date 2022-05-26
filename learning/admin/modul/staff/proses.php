<?php 
			
							if (isset($_POST['save_staff'])) {
								//$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
								//$pass = sha1($_POST['pass']);
								$jabatan = filter_input(INPUT_POST, 'jabatan', FILTER_SANITIZE_STRING);
								$nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
								$kontak = filter_input(INPUT_POST, 'kontak', FILTER_SANITIZE_NUMBER_INT);
								$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
								//$level = 1;
								
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
											$save= mysqli_query($con,"INSERT INTO staff (`nama`,`foto`, `jabatan`, `email`, `kontak`)
																	VALUES('$nama', '$foto', '$jabatan', '$email', '$kontak')");
											if ($save) {
												echo " <script>
												alert('Data Berhasil disimpan !');
												window.location='?page=staff';
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
									$save= mysqli_query($con,"INSERT INTO users (`nama`,`foto`, `jabatan`, `email`, `kontak`)
															VALUES('$nama', '$foto', '$jabatan', '$email', '$kontak')");
									if ($save) {
										echo " <script>
										alert('Data Berhasil disimpan !');
										window.location='?page=staff';
										</script>";
									}
								}
							}
							if (isset($_POST['update_staff'])){
				
							//$pass = sha1($_POST['pass']);
							//$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
							$id = $_POST['id'];
							$jabatan = filter_input(INPUT_POST, 'jabatan', FILTER_SANITIZE_STRING);
							$nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
							$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
							$kontak = filter_input(INPUT_POST, 'kontak', FILTER_SANITIZE_NUMBER_INT);
							
							
							$sumber = @$_FILES['foto']['tmp_name'];
							
							$temp = explode(".", @$_FILES["foto"]["name"]);
							$extensions = end($temp);
							
							$target = '../vendor/images/img_Users/';
							$image_old = $target.$d['image'];
							
							$nama_gambar = @$_FILES['foto']['name'];
							$size_gambar = @$_FILES['foto']['size'];
							$nama_input = md5($nama_gambar.$size_gambar).'.'.$extensions;
							
							//if(!empty($_POST['pass'])){
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
											unlink($image_old);
											$save= mysqli_query($con,"UPDATE staff SET
																nama = '$nama',
																foto = '$nama_input',
																jabatan = '$jabatan',
																email= '$email',
																kontak = '$kontak'
															WHERE id = '$id'");
											if ($save) {
												echo " <script>
												alert('Data Berhasil disimpan !');
												window.location='?page=staff';
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
								else{
									$save= mysqli_query($con,"UPDATE staff SET
																nama = '$nama',
																jabatan = '$jabatan',
																email ='$email',
																kontak = '$kontak'
															WHERE id = '$id'");
										if ($save) {
											echo " <script>
											alert('Data Berhasil disimpan !');
											window.location='?page=staff';
											</script>";
										}
								}
							/*}
							else{
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
											unlink($image_old);
											$save= mysqli_query($con,"UPDATE staff SET
																jabatan = '$jabatan',
																nama = '$nama',
																email = '$email',
																kontak = '$kontak',
																foto = '$nama_input'
															WHERE id = '$id'");
											if ($save) {
												echo " <script>
												alert('Data Berhasil disimpan !');
												window.location='?page=staff';
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
								else{
									$save= mysqli_query($con,"UPDATE staff SET
																jabatan = '$jabatan',
																nama = '$nama',
																email ='$email',
																kontak = '$kontak'
															WHERE id = '$id'");
									if ($save) {
										echo " <script>
										alert('Data Berhasil disimpan !');
										window.location='?page=staff';
										</script>";
									}
								}
							}*/
							}	
							?>