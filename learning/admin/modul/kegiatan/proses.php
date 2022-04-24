<?php 


	if (isset($_POST['save_kegiatan'])) {
		$nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
		$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
		$materi = $_POST['materi'];
		$content = $_POST['content'];
		$date = $_POST['tgl'];
		$sumber = @$_FILES['foto']['tmp_name'];
		$temp = explode(".", @$_FILES["foto"]["name"]);
		$extensions = end($temp);
		$target = '../../assets/img/img_Activities/';
		$nama_gambar = @$_FILES['foto']['name'];
		$size_gambar = @$_FILES['foto']['size'];
		$nama_input = md5($nama_gambar.$size_gambar).'.'.$extensions;
		
		$save1 = mysqli_query($con,"INSERT INTO activities (title_ind, title_en, content_ind, content_en, timestamp)
						VALUES('$nama', '$name', '$materi', '$content', '$date')");
		
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
					$save = mysqli_query($con,"UPDATE activities
			                    SET image='$nama_input'
								WHERE title_ind='$nama' AND title_en='$name' AND content_ind='$materi' AND content_en='$content' AND timestamp='$date'");
				}	
				unlink($sumber);
			}
			else {
				echo " <script>
				alert('File Extension tidak diizinkan');
				</script>";
			}
		}	
		
		if ($save1) {
			echo " <script>
			alert('Data Berhasil disimpan !');
			window.location='?page=kegiatan';
			</script>";
		}
		
	}
							
	if (isset($_POST['update_kegiatan'])) {
		
		$id = $_POST['id'];
		$nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
		$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
		$materi = $_POST['materi'];
		$content = $_POST['content'];
		$date = $_POST['tgl'];
		$sumber = @$_FILES['foto']['tmp_name'];
		$temp = explode(".", @$_FILES["foto"]["name"]);
		$extensions = end($temp);
		$target = '../../assets/img/img_Activities/';
		$image_old = $target.$d['image'];
		$nama_gambar = @$_FILES['foto']['name'];
		$size_gambar = @$_FILES['foto']['size'];
		$nama_input = md5($nama_gambar.$size_gambar).'.'.$extensions;
		
		$save1 = mysqli_query($con,"UPDATE activities SET
								title_ind = '$nama',
								title_en = '$name',
								content_ind = '$materi',
								content_en = '$content',
								timestamp = '$date'
							WHERE id = '$id'");
							
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
					$save= mysqli_query($con,"UPDATE activities SET
										image = '$nama_input'
									WHERE id = '$id'");
				}	
				unlink($sumber);
			} else {
				echo " <script>
				alert('File Extension tidak diizinkan');
				</script>";
			}
		}
		
		if ($save1) {
			echo " <script>
			alert('Data Berhasil disimpan !');
			window.location='?page=kegiatan';
			</script>";
		}
	}
		