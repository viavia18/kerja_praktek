<?php 
$sesi = @$_SESSION['Dosen'];

$edit= mysqli_query($con,"SELECT * FROM users WHERE id='$sesi' ");
foreach ($edit as $data)
?>

<div class="content-wrapper">
	<div class="row">
	<style>
	body {font-family: Arial;}
	
	/* Style the tab */
	.tab {
	overflow: hidden;
	background-color: #ddd;
	}
	
	/* Style the buttons inside the tab */
	.tab button {
	background-color: inherit;
	float: left;
	border: none;
	outline: none;
	cursor: pointer;
	padding: 14px 16px;
	transition: 0.3s;
	font-size: 17px;
	}
	
	/* Change background color of buttons on hover */
	.tab button:hover {
	background-color: #ddd;
	}
	
	/* Create an active/current tablink class */
	.tab button.active {
	background-color: #ffffff;
	}
	
	/* Style the tab content */
	.tabcontent {
	display: none;
	border-top: none;
	}
	</style>
		<div class="col-12">
			<div class="tab">
				<button class="tablinks" id="defaultOpen" onclick="openCity(event, 'Biodata')">Biodata</button>
				<button class="tablinks" onclick="openCity(event, 'Password')">Ganti Password</button>
			</div>
				
			<div id="Biodata" class="tabcontent">
				<div class="row flex-grow">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title text-center">My Profile</h4>
								<p class="card-description text-center">
									<img src="../vendor/images/img_Users/<?php if($data['image']){echo $data['image'];} else {echo 'usd.png';}?>" style="border:3px solid black;width: 100px;height: 100px;border-radius: 7px;"/>
								</p>
						
								<form class="forms-sample" method="post" action="" enctype="multipart/form-data">
									<div class="form-group">
									<label>Username</label>
									<input type="text" class="form-control" name="username" value="<?=$data['username'] ?>" disabled>
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
									<label>Foto</label>
									<input id="file" type="file" name="foto" class="form-control">                      
									</div>
							
									<button type="submit" name="update_profil" class="btn btn-info mr-2">Simpan Perubahan</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="Password" class="tabcontent">
				<div class="row flex-grow">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<form class="forms-sample" method="post" action="" enctype="multipart/form-data">
									<div class="form-group">
									<label>Password Lama</label>
									<input type="password" class="form-control" name="oldpassword">
									</div>
									<div class="form-group">
									<label>Password Baru</label>
									<input type="password" class="form-control" name="newpassword">
									</div>
									<div class="form-group">
									<label>Konfirmasi Password Baru</label>
									<input type="password" class="form-control" name="confirmpassword">
									</div>
							
									<button type="submit" name="update_password" class="btn btn-info mr-2">Simpan Perubahan</button>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php 
				if (isset($_POST['update_profil'])) {
					$id = $sesi;
					$nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
					$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
					
					$sumber = @$_FILES['foto']['tmp_name'];
					
					$temp = explode(".", @$_FILES["foto"]["name"]);
					$extensions = end($temp);
					
					$target = '../vendor/images/img_Users/';
					$image_old = $target.$data['image'];
					
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
								unlink($image_old);
								$save= mysqli_query($con,"UPDATE users SET
													nama = '$nama',
													email = '$email',
													image = '$nama_input'
												  WHERE id = '$id'");
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
						$save = mysqli_query($con,"UPDATE users SET
													nama = '$nama',
													email = '$email'
												  WHERE id = '$id'");
						
					}
					
					if ($save) {
						echo " <script>
							alert('Data Berhasil disimpan !');
							window.location='?page=setting&act=user';
							</script>";
					}					
				}
				
				if (isset($_POST['update_password'])) {
					
					$id = $sesi;
					$oldpassword = sha1($_POST['oldpassword']);
					$newpassword = sha1($_POST['newpassword']);
					$confirmpassword = sha1($_POST['confirmpassword']);
					
					if($data['password']==$oldpassword){
						if($newpassword==$confirmpassword){
							$save= mysqli_query($con,"UPDATE users SET
														password = '$newpassword'
													  WHERE id = '$id'");
							if ($save) {
								echo " <script>
									alert('Data Berhasil disimpan !');
									window.location='?page=setting&act=user';
									</script>";
							}
						}
						else {
							echo " <script>
								alert('Konfirmasi Password Baru tidak sesuai');
								window.location='?page=setting&act=user';
								</script>";
						}
					}
					else {
						echo " <script>
							alert('Password Lama tidak sesuai');
							window.location='?page=setting&act=user';
							</script>";
					}
				}
		    ?>
			
			<script>
			window.onload = function () {
					startTab();
				};
			
				function startTab() {
					document.getElementById("defaultOpen").click();
			
				}
				
			function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
				
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
			}
			</script>
		</div>
	</div>
</div>
