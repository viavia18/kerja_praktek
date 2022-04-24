<?php 


	if (isset($_POST['save_case'])) {
		$nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
		$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
		$materi = $_POST['materi'];
		$content = $_POST['content'];
		$creator = $_POST['id_dosen'];
		$date = date('Y-m-d');
		
		$sumber = @$_FILES['foto']['tmp_name'];
		
		$temp = explode(".", @$_FILES["foto"]["name"]);
		$extensions = end($temp);
		
		$target = '../../assets/img/img_Cases/';
		
		$nama_gambar = @$_FILES['foto']['name'];
		$size_gambar = @$_FILES['foto']['size'];
		$nama_input = md5($nama_gambar.$size_gambar).'.'.$extensions;
		
		$save1= mysqli_query($con,"INSERT INTO cases(`title_ind`, `title_en`, `content_ind`, `content_en`, `creator`, `timestamp`)
								VALUES ('$nama','$name','$materi','$content','$creator','$date')");
							
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
					$save = mysqli_query($con,"UPDATE cases
			                    SET image='$nama_input'
								WHERE title_ind='$title_ind' AND title_en='$title_en' AND content_ind='$materi' AND content_en='$content' AND creator='$creator' AND creator='$date'");
				}	
				unlink($sumber);
			}
			else {
				echo " <script>
				alert('File Extension tidak diizinkan');
				</script>";
			}
		}
								
		$edit = mysqli_query($con,"SELECT * FROM cases ORDER BY id DESC LIMIT 1");
		
		foreach ($edit as $d) {
			$id = $d['id'];
		    $save= mysqli_query($con,"INSERT INTO visitors(id_case)
								VALUES ('$id')");
								if ($save1) {
			echo " <script>
			alert('Data Berhasil disimpan !');
			window.location='?page=case';
			</script>";
		}
		}
		
		
		
	}
							
	if (isset($_POST['update_case'])) {
		$nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
		$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
		$materi = $_POST['materi'];	
		$content = $_POST['content'];
		$date = date('Y-m-d');
		$id = $_POST['id'];
		$image_old = $_POST['image_old'];
		
		$sumber = @$_FILES['foto']['tmp_name'];
		
		$temp = explode(".", @$_FILES["foto"]["name"]);
		$extensions = end($temp);
		
		$target = '../../assets/img/img_Cases/';
		
		$nama_gambar = @$_FILES['foto']['name'];
		$size_gambar = @$_FILES['foto']['size'];
		$nama_input = md5($nama_gambar.$size_gambar).'.'.$extensions;
		
		$save = mysqli_query($con,"UPDATE cases SET
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
				if($pindah){
					unlink($image_old);
					$save = mysqli_query($con,"UPDATE cases SET
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
			window.location='?page=case';
			</script>";
		}
	}
	
	if (isset($_POST['save_jawaban'])) {
		
		$media = $_POST['tipe'];
		$media_en = $_POST['tipe2'];
		$id_question = $_POST['id_question'];
		$id_case = $_POST['id_case'];
		
		$jawaban = filter_input(INPUT_POST, 'jawaban', FILTER_SANITIZE_STRING);
		$answer = filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_STRING);
		
		$materi = $_POST['materi'];
		$content = $_POST['content'];
		
		$save1= mysqli_query($con,"INSERT INTO `answers`(`id_question`, `content_ind`, `content_en`, `option_ind`, `option_en`)
										VALUES ('$id_question','$materi','$content','$jawaban','$answer')");
										
		if($media=='1'){
			
			$video = filter_input(INPUT_POST, 'video', FILTER_SANITIZE_STRING);
			$temp = explode("=", $video);
			$link = end($temp);
			
			if(!empty($video)){
				$save = mysqli_query($con,"UPDATE answers
			                    SET video='$link'
								WHERE id_question='$id_question' AND content_ind='$materi' AND content_en='$content' AND option_ind='$jawaban' AND option_en='$answer'");
			}
			
		} else if($media=='2'){
			
			$sumber = @$_FILES['foto']['tmp_name'];
			$temp = explode(".", @$_FILES["foto"]["name"]);
			$extensions = end($temp);
			$target = '../../assets/img/img_Answers/';
			$nama_gambar = @$_FILES['foto']['name'];
			$size_gambar = @$_FILES['foto']['size'];
			$nama_input = md5($nama_gambar.$size_gambar.'ID').'.'.$extensions;
			
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
						$save = mysqli_query($con,"UPDATE answers
			                    SET image='$nama_input'
								WHERE id_question='$id_question' AND content_ind='$materi' AND content_en='$content' AND option_ind='$jawaban' AND option_en='$answer'");
					}	
					unlink($sumber);
				} else {
					echo " <script>
					alert('File Extension tidak diizinkan');
					</script>";
				}
			}
		}
		
		if($media_en=='1'){
			
			$video_en = filter_input(INPUT_POST, 'video_en', FILTER_SANITIZE_STRING);
			$temp = explode("=", $video_en);
			$link = end($temp);
			
			if(!empty($video_en)){
				$save = mysqli_query($con,"UPDATE answers
			                    SET video_en='$link'
								WHERE id_question='$id_question' AND content_ind='$materi' AND content_en='$content' AND option_ind='$jawaban' AND option_en='$answer'");
			}
			
		} else if($media_en=='2'){
			
			$sumber = @$_FILES['foto_en']['tmp_name'];
			$temp = explode(".", @$_FILES["foto_en"]["name"]);
			$extensions = end($temp);
			$target = '../../assets/img/img_Answers/';
			$nama_gambar = @$_FILES['foto_en']['name'];
			$size_gambar = @$_FILES['foto_en']['size'];
			$nama_input = md5($nama_gambar.$size_gambar.'EN').'.'.$extensions;
			
			if(!empty($sumber)){
				if(($_FILES["foto_en"]["type"] == "image/gif")
					|| ($_FILES["foto_en"]["type"] == "image/jpeg")
					|| ($_FILES["foto_en"]["type"] == "image/jpg")
					|| ($_FILES["foto_en"]["type"] == "image/pjpeg")
					|| ($_FILES["foto_en"]["type"] == "image/x-png")
					|| ($_FILES["foto_en"]["type"] == "image/png"))
				{
					$pindah = move_uploaded_file($sumber, $target.$nama_input);
					
					if ($pindah) {
						$save = mysqli_query($con,"UPDATE answers
			                    SET image_en='$nama_input'
								WHERE id_question='$id_question' AND content_ind='$materi' AND content_en='$content' AND option_ind='$jawaban' AND option_en='$answer'");
					}	
					unlink($sumber);
				} else {
					echo " <script>
					alert('File Extension tidak diizinkan');
					</script>";
				}
			}
		}
		
		if ($save1) {
			echo " <script>
			alert('Data Berhasil disimpan !');
			window.location='?page=case&act=soal&id=$id_case';
			</script>";
		}
	}
	
	if (isset($_POST['update_jawaban'])) {
	
		$id = $_POST['id'];
		$id_case = $_POST['id_case'];
		$media = $_POST['tipe'];
		$media_en = $_POST['tipe2'];
		$image_old = $_POST['image_old'];
		$image_en_old = $_POST['image_en_old'];
		$materi = $_POST['materi'];
		$content = $_POST['content'];
		$jawaban = filter_input(INPUT_POST, 'jawaban', FILTER_SANITIZE_STRING);
		$answer = filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_STRING);
		$target = '../../assets/img/img_Answers/';
		
		$save1 = mysqli_query($con,"UPDATE answers SET
								content_ind = '$materi',
								content_en = '$content',
								option_ind = '$jawaban',
								option_en = '$answer'
							WHERE id = '$id'");	
							
		if($media=='1'){
			unlink($image_old);
			$video = filter_input(INPUT_POST, 'video', FILTER_SANITIZE_STRING);
			$temp = explode("=", $video);
			$link = end($temp);
			
			if(!empty($video)){
				$save = mysqli_query($con,"UPDATE answers SET
										video = '$link',
										image = ''
									WHERE id = '$id'");
			} else {
				$save = mysqli_query($con,"UPDATE answers SET
										image = ''
									WHERE id = '$id'");	
			}
			
		} else if($media=='2') {
			$sumber = @$_FILES['foto']['tmp_name'];
			$temp = explode(".", @$_FILES["foto"]["name"]);
			$extensions = end($temp);
			$nama_gambar = @$_FILES['foto']['name'];
			$size_gambar = @$_FILES['foto']['size'];
			$nama_input = md5($nama_gambar.$size_gambar.'ID').'.'.$extensions;
			
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
						$save = mysqli_query($con,"UPDATE answers SET
										video = '',
										image = '$nama_input'
									WHERE id = '$id'");	
					}	
					unlink($sumber);
				} else {
					echo " <script>
					alert('File Extension tidak diizinkan');
					</script>";
				}
			} else {
				$save = mysqli_query($con,"UPDATE answers SET
										video = ''
									WHERE id = '$id'");	
			}
		}
		
		if($media_en=='1'){
			unlink($image_en_old);
			$video = filter_input(INPUT_POST, 'video_en', FILTER_SANITIZE_STRING);
			$temp = explode("=", $video);
			$link = end($temp);
			
			if(!empty($video)){
				$save = mysqli_query($con,"UPDATE answers SET
										video_en = '$link',
										image_en = ''
									WHERE id = '$id'");
			} else {
				$save = mysqli_query($con,"UPDATE answers SET
										image_en = ''
									WHERE id = '$id'");	
			}
			
		} else if($media_en=='2') {
			$sumber = @$_FILES['foto_en']['tmp_name'];
			$temp = explode(".", @$_FILES["foto_en"]["name"]);
			$extensions = end($temp);
			$nama_gambar = @$_FILES['foto_en']['name'];
			$size_gambar = @$_FILES['foto_en']['size'];
			$nama_input = md5($nama_gambar.$size_gambar.'EN').'.'.$extensions;
			
			if(!empty($sumber)){
				if(($_FILES["foto_en"]["type"] == "image/gif")
					|| ($_FILES["foto_en"]["type"] == "image/jpeg")
					|| ($_FILES["foto_en"]["type"] == "image/jpg")
					|| ($_FILES["foto_en"]["type"] == "image/pjpeg")
					|| ($_FILES["foto_en"]["type"] == "image/x-png")
					|| ($_FILES["foto_en"]["type"] == "image/png"))
				{
					$pindah = move_uploaded_file($sumber, $target.$nama_input);
					
					if ($pindah) {
						unlink($image_en_old);
						$save = mysqli_query($con,"UPDATE answers SET
										video_en = '',
										image_en = '$nama_input'
									WHERE id = '$id'");	
					}	
					unlink($sumber);
				} else {
					echo " <script>
					alert('File Extension tidak diizinkan');
					</script>";
				}
			} else {
				$save = mysqli_query($con,"UPDATE answers SET
										video_en = ''
									WHERE id = '$id'");	
			}
		}
		
		if ($save1) {
			echo " <script>
			alert('Data Berhasil disimpan !');
			window.location='?page=case&act=soal&id=$id_case';
			</script>";
		}
	
	}
	
	if (isset($_POST['save_pertanyaan'])) {
		
		$media = $_POST['tipe'];
		$media_en = $_POST['tipe2'];
		$id_case = $_POST['id_case'];
		
		$materi = $_POST['materi'];
		$content = $_POST['content'];
		
		$pertanyaan = filter_input(INPUT_POST, 'pertanyaan', FILTER_SANITIZE_STRING);
		$question = filter_input(INPUT_POST, 'question', FILTER_SANITIZE_STRING);
		
		$save1 = mysqli_query($con,"INSERT INTO questions (id_case, content_ind, content_en, question_ind, question_en)
										VALUES ('$id_case', '$materi', '$content', '$pertanyaan', '$question')");
										
		if($media=='1'){
			
			$video = filter_input(INPUT_POST, 'video', FILTER_SANITIZE_STRING);
			$temp = explode("=", $video);
			$link = end($temp);
			
			$save = mysqli_query($con,"UPDATE questions
			                    SET video='$link'
								WHERE id_case='$id_case' AND content_ind='$materi' AND content_en='$content' AND question_ind='$pertanyaan' AND question_en='$question'");
		} else if($media=='2'){
			
			$sumber = @$_FILES['foto']['tmp_name'];
			$temp = explode(".", @$_FILES["foto"]["name"]);
			$extensions = end($temp);
			$target = '../../assets/img/img_Questions/';
			$nama_gambar = @$_FILES['foto']['name'];
			$size_gambar = @$_FILES['foto']['size'];
			$nama_input = md5($nama_gambar.$size_gambar.'ID').'.'.$extensions;
			
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
						$save = mysqli_query($con,"UPDATE questions
			                    SET image='$nama_input'
								WHERE id_case='$id_case' AND content_ind='$materi' AND content_en='$content' AND question_ind='$pertanyaan' AND question_en='$question'");
					}	
					unlink($sumber);
				}
				else {
					echo " <script>
					alert('File Extension tidak diizinkan');
					</script>";
				}
			}
		}
		
		if($media_en=='1'){
			
			$video_en = filter_input(INPUT_POST, 'video_en', FILTER_SANITIZE_STRING);
			$temp = explode("=", $video_en);
			$link = end($temp);
			
			$save = mysqli_query($con,"UPDATE questions
			                    SET video_en='$link'
								WHERE id_case='$id_case' AND content_ind='$materi' AND content_en='$content' AND question_ind='$pertanyaan' AND question_en='$question'");
		} else if($media_en=='2'){
			
			$sumber = @$_FILES['foto_en']['tmp_name'];
			$temp = explode(".", @$_FILES["foto_en"]["name"]);
			$extensions = end($temp);
			$target = '../../assets/img/img_Questions/';
			$nama_gambar = @$_FILES['foto_en']['name'];
			$size_gambar = @$_FILES['foto_en']['size'];
			$nama_input = md5($nama_gambar.$size_gambar.'EN').'.'.$extensions;
			
			if(!empty($sumber)){
				if(($_FILES["foto_en"]["type"] == "image/gif")
					|| ($_FILES["foto_en"]["type"] == "image/jpeg")
					|| ($_FILES["foto_en"]["type"] == "image/jpg")
					|| ($_FILES["foto_en"]["type"] == "image/pjpeg")
					|| ($_FILES["foto_en"]["type"] == "image/x-png")
					|| ($_FILES["foto_en"]["type"] == "image/png"))
				{
					$pindah = move_uploaded_file($sumber, $target.$nama_input);
					
					if ($pindah) {
						$save = mysqli_query($con,"UPDATE questions
			                    SET image_en='$nama_input'
								WHERE id_case='$id_case' AND content_ind='$materi' AND content_en='$content' AND question_ind='$pertanyaan' AND question_en='$question'");
					}	
					unlink($sumber);
				}
				else {
					echo " <script>
					alert('File Extension tidak diizinkan');
					</script>";
				}
			}
		}
		
		if ($save1) {
			echo " <script>
			alert('Data Berhasil disimpan !');
			window.location='?page=case&act=soal&id=$id_case';
			</script>";
		}
	}
	
	if (isset($_POST['update_pertanyaan'])) {
		$id = $_POST['id'];
		$id_case = $_POST['id_case'];
		$media = $_POST['tipe'];
		$media_en = $_POST['tipe2'];
		$image_old = $_POST['image_old'];
		$image_en_old = $_POST['image_en_old'];
		$materi = $_POST['materi'];
		$content = $_POST['content'];
		$pertanyaan = filter_input(INPUT_POST, 'pertanyaan', FILTER_SANITIZE_STRING);
		$question = filter_input(INPUT_POST, 'question', FILTER_SANITIZE_STRING);
		$target = '../../assets/img/img_Questions/';
		
		$save1 = mysqli_query($con,"UPDATE questions SET
								content_ind = '$materi',
								content_en = '$content',
								question_ind = '$pertanyaan',
								question_en = '$question'
							WHERE id = '$id'");	
							
		if($media=='1'){
			unlink($image_old);
			$video = filter_input(INPUT_POST, 'video', FILTER_SANITIZE_STRING);
			$temp = explode("=", $video);
			$link = end($temp);
			
			if(!empty($video)){
				$save = mysqli_query($con,"UPDATE questions SET
										video = '$link',
										image = ''
									WHERE id = '$id'");	
			} else {
				$save = mysqli_query($con,"UPDATE questions SET
										image = ''
									WHERE id = '$id'");	
			}
			
		} else if($media=='2'){
			$sumber = @$_FILES['foto']['tmp_name'];
			$temp = explode(".", @$_FILES["foto"]["name"]);
			$extensions = end($temp);
			$nama_gambar = @$_FILES['foto']['name'];
			$size_gambar = @$_FILES['foto']['size'];
			$nama_input = md5($nama_gambar.$size_gambar.'ID').'.'.$extensions;
			
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
						$save = mysqli_query($con,"UPDATE questions SET
										video = '',
										image = '$nama_input'
									WHERE id = '$id'");	
					}	
					unlink($sumber);
				} else {
					echo " <script>
					alert('File Extension tidak diizinkan');
					</script>";
				}
			} else {
				$save = mysqli_query($con,"UPDATE questions SET
										video = ''
									WHERE id = '$id'");	
			}
		}
		
		if($media_en=='1'){
			unlink($image_en_old);
			$video_en = filter_input(INPUT_POST, 'video_en', FILTER_SANITIZE_STRING);
			$temp = explode("=", $video_en);
			$link = end($temp);
			
			if(!empty($video)){
				$save = mysqli_query($con,"UPDATE questions SET
										video_en = '$link',
										image_en = ''
									WHERE id = '$id'");	
			} else {
				$save = mysqli_query($con,"UPDATE questions SET
										image_en = ''
									WHERE id = '$id'");	
			}
			
		} else if($media_en=='2'){
			$sumber = @$_FILES['foto_en']['tmp_name'];
			$temp = explode(".", @$_FILES["foto_en"]["name"]);
			$extensions = end($temp);
			$nama_gambar = @$_FILES['foto_en']['name'];
			$size_gambar = @$_FILES['foto_en']['size'];
			$nama_input = md5($nama_gambar.$size_gambar.'EN').'.'.$extensions;
			
			if(!empty($sumber)){
				if(($_FILES["foto_en"]["type"] == "image/gif")
					|| ($_FILES["foto_en"]["type"] == "image/jpeg")
					|| ($_FILES["foto_en"]["type"] == "image/jpg")
					|| ($_FILES["foto_en"]["type"] == "image/pjpeg")
					|| ($_FILES["foto_en"]["type"] == "image/x-png")
					|| ($_FILES["foto_en"]["type"] == "image/png"))
				{
					$pindah = move_uploaded_file($sumber, $target.$nama_input);
					if ($pindah) {
						unlink($image_en_old);
						$save = mysqli_query($con,"UPDATE questions SET
										video_en = '',
										image_en = '$nama_input'
									WHERE id = '$id'");	
					}	
					unlink($sumber);
				} else {
					echo " <script>
					alert('File Extension tidak diizinkan');
					</script>";
				}
			} else {
				$save = mysqli_query($con,"UPDATE questions SET
										video_en = ''
									WHERE id = '$id'");	
			}
		}
		
		if ($save1) {
			echo " <script>
			alert('Data Berhasil disimpan !');
			window.location='?page=case&act=soal&id=$id_case';
			</script>";
		}
	}
	
	if (isset($_POST['save_ulasan'])) {
		$media = $_POST['tipe'];
		$media_en = $_POST['tipe2'];
		$id = $_POST['id'];
		$materi = $_POST['materi'];
		$content = $_POST['content'];
		$target = '../../assets/img/img_Reviews/';
		
		$save1 = mysqli_query($con,"INSERT INTO reviews(id, content_ind, content_en)
										VALUES ('$id','$materi','$content')");
										
		if($media=='1'){
			$video = filter_input(INPUT_POST, 'video', FILTER_SANITIZE_STRING);
			$temp = explode("=", $video);
			$link = end($temp);
			
			if(!empty($video)){
				$save = mysqli_query($con,"UPDATE reviews SET
										video = '$link'
									WHERE id = '$id' AND content_ind = '$materi' AND content_en = '$content'");
			}
		} else if ($media=='2') {
			$sumber = @$_FILES['foto']['tmp_name'];
			$temp = explode(".", @$_FILES["foto"]["name"]);
			$extensions = end($temp);
			$nama_gambar = @$_FILES['foto']['name'];
			$size_gambar = @$_FILES['foto']['size'];
			$nama_input = md5($nama_gambar.$size_gambar.'ID').'.'.$extensions;
			
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
						$save = mysqli_query($con,"UPDATE reviews SET
										image = '$nama_input'
									WHERE id = '$id' AND content_ind = '$materi' AND content_en = '$content'");
					}	
					unlink($sumber);
				}
				else {
					echo " <script>
					alert('File Extension tidak diizinkan');
					</script>";
				}
			}
		}
		
		if($media_en=='1'){
			$video = filter_input(INPUT_POST, 'video_en', FILTER_SANITIZE_STRING);
			$temp = explode("=", $video);
			$link = end($temp);
			
			if(!empty($video)){
				$save = mysqli_query($con,"UPDATE reviews SET
										video_en = '$link'
									WHERE id = '$id' AND content_ind = '$materi' AND content_en = '$content'");
			}
		} else if ($media_en=='2') {
			$sumber = @$_FILES['foto_en']['tmp_name'];
			$temp = explode(".", @$_FILES["foto_en"]["name"]);
			$extensions = end($temp);
			$nama_gambar = @$_FILES['foto_en']['name'];
			$size_gambar = @$_FILES['foto_en']['size'];
			$nama_input = md5($nama_gambar.$size_gambar.'EN').'.'.$extensions;
			
			if(!empty($sumber)){
				if(($_FILES["foto_en"]["type"] == "image/gif")
					|| ($_FILES["foto_en"]["type"] == "image/jpeg")
					|| ($_FILES["foto_en"]["type"] == "image/jpg")
					|| ($_FILES["foto_en"]["type"] == "image/pjpeg")
					|| ($_FILES["foto_en"]["type"] == "image/x-png")
					|| ($_FILES["foto_en"]["type"] == "image/png"))
				{
					$pindah = move_uploaded_file($sumber, $target.$nama_input);
					
					if ($pindah) {
						$save = mysqli_query($con,"UPDATE reviews SET
										image_en = '$nama_input'
									WHERE id = '$id' AND content_ind = '$materi' AND content_en = '$content'");
					}	
					unlink($sumber);
				}
				else {
					echo " <script>
					alert('File Extension tidak diizinkan');
					</script>";
				}
			}
		}
		
		if ($save1) {
			echo " <script>
			alert('Data Berhasil disimpan !');
			window.location='?page=case';
			</script>";
		}
	}
	
	if (isset($_POST['update_ulasan'])) {
		$media = $_POST['tipe'];
		$media_en = $_POST['tipe2'];
		$id = $_POST['id'];
		$materi = $_POST['materi'];
		$content = $_POST['content'];
		$image_old = $_POST['image_old'];
		$image_en_old = $_POST['image_en_old'];
		$target = '../../assets/img/img_Reviews/';
		
		$save1 = mysqli_query($con,"UPDATE reviews SET
								content_ind = '$materi',
								content_en = '$content'
							WHERE id = '$id'");
							
		if ($media=='1') {	
			unlink($image_old);		
			$video = filter_input(INPUT_POST, 'video', FILTER_SANITIZE_STRING);
			$temp = explode("=", $video);
			$link = end($temp);
			
			if(!empty($video)){
				$save = mysqli_query($con,"UPDATE reviews SET
										video = '$link',
										image = ''
									WHERE id = '$id'");	
			}
			else {
				$save = mysqli_query($con,"UPDATE reviews SET
										image = ''
									WHERE id = '$id'");	
			}
		} else if ($media=='2') {
			$sumber = @$_FILES['foto']['tmp_name'];
			$temp = explode(".", @$_FILES["foto"]["name"]);
			$extensions = end($temp);
			$nama_gambar = @$_FILES['foto']['name'];
			$size_gambar = @$_FILES['foto']['size'];
			$nama_input = md5($nama_gambar.$size_gambar.'ID').'.'.$extensions;
			
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
						$save = mysqli_query($con,"UPDATE reviews SET
										video = '',
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
			} else {
				$save = mysqli_query($con,"UPDATE reviews SET
										video = ''
									WHERE id = '$id'");
			}
		}
		
		if ($media_en=='1') {	
			unlink($image_en_old);		
			$video = filter_input(INPUT_POST, 'video_en', FILTER_SANITIZE_STRING);
			$temp = explode("=", $video);
			$link = end($temp);
			
			if(!empty($video)){
				$save = mysqli_query($con,"UPDATE reviews SET
										video_en = '$link',
										image_en = ''
									WHERE id = '$id'");	
			}
			else {
				$save = mysqli_query($con,"UPDATE reviews SET
										image_en = ''
									WHERE id = '$id'");	
			}
		} else if ($media_en=='2') {
			$sumber = @$_FILES['foto_en']['tmp_name'];
			$temp = explode(".", @$_FILES["foto_en"]["name"]);
			$extensions = end($temp);
			$nama_gambar = @$_FILES['foto_en']['name'];
			$size_gambar = @$_FILES['foto_en']['size'];
			$nama_input = md5($nama_gambar.$size_gambar.'EN').'.'.$extensions;
			
			if(!empty($sumber)){
				if(($_FILES["foto_en"]["type"] == "image/gif")
					|| ($_FILES["foto_en"]["type"] == "image/jpeg")
					|| ($_FILES["foto_en"]["type"] == "image/jpg")
					|| ($_FILES["foto_en"]["type"] == "image/pjpeg")
					|| ($_FILES["foto_en"]["type"] == "image/x-png")
					|| ($_FILES["foto_en"]["type"] == "image/png"))
				{
					$pindah = move_uploaded_file($sumber, $target.$nama_input);
					if ($pindah) {
						unlink($image_en_old);
						$save = mysqli_query($con,"UPDATE reviews SET
										video_en = '',
										image_en = '$nama_input'
									WHERE id = '$id'");	
					}	
					unlink($sumber);
				}
				else {
					echo " <script>
					alert('File Extension tidak diizinkan');
					</script>";
				}
			} else {
				$save = mysqli_query($con,"UPDATE reviews SET
										video_en = ''
									WHERE id = '$id'");
			}
		}
		
		if ($save1) {
			echo " <script>
			alert('Data Berhasil disimpan !');
			window.location='?page=case';
			</script>";
		}
	}
?>