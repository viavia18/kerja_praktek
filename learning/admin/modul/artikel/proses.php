<?php 


	if (isset($_POST['save_artikel'])) {
		$nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
		//$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
		$materi = $_POST['materi'];
		//$content = $_POST['content'];
		$date = $_POST['tgl'];
		$sumber = @$_FILES['foto']['tmp_name'];
		$temp = explode(".", @$_FILES["foto"]["name"]);
		$extensions = end($temp);
		$target = '../../assets/img/img_Activities/';
		$nama_gambar = @$_FILES['foto']['name'];
		$size_gambar = @$_FILES['foto']['size'];
		$nama_input = md5($nama_gambar.$size_gambar).'.'.$extensions;
		
		$save1 = mysqli_query($con,"INSERT INTO artikel (judul, konten, tanggal)
						VALUES('$nama', '$materi', '$date')");
		
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
					$save = mysqli_query($con,"UPDATE artikel
			                    SET foto='$nama_input'
								WHERE judul='$nama' AND konten='$materi' AND tanggal='$date'");
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
			window.location='?page=artikel';
			</script>";
		}
		
	}
							
	if (isset($_POST['update_artikel'])) {
		
		$id = $_POST['id'];
		$nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
		//$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
		$materi = $_POST['materi'];
		//$content = $_POST['content'];
		$date = $_POST['tgl'];
		$sumber = @$_FILES['foto']['tmp_name'];
		$temp = explode(".", @$_FILES["foto"]["name"]);
		$extensions = end($temp);
		$target = '../../assets/img/img_Activities/';
		$image_old = $target.$d['image'];
		$nama_gambar = @$_FILES['foto']['name'];
		$size_gambar = @$_FILES['foto']['size'];
		$nama_input = md5($nama_gambar.$size_gambar).'.'.$extensions;
		
		$save1 = mysqli_query($con,"UPDATE artikel SET
								judul = '$nama',
								konten = '$materi',
								tanggal = '$date'
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
					$save= mysqli_query($con,"UPDATE artikel SET
										foto = '$nama_input'
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
			window.location='?page=artikel';
			</script>";
		}
	}
		