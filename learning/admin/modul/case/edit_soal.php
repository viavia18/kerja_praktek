<?php 
$edit = mysqli_query($con,"SELECT * FROM questions WHERE id='$_GET[id]' ");
foreach ($edit as $d) 
$cek1 = '';
$teks1 = '';
$show1 = '';
$cek2 = '';
$teks2 = '';
$show2 = '';
if($d['video']!=""){
	$cek1='checked';
	$teks1='-- Pertanyaan ini memiliki Video tersimpan';
	$show2='style="display: none;"';
}
else if($d['image']!=""){
	$cek2='checked';
	$teks2='-- Pertanyaan ini memiliki Gambar tersimpan';
	$show1='style="display: none;"';
}
else {
	$show1='style="display: none;"';
	$show2='style="display: none;"';
}

$cek1_en = '';
$teks1_en = '';
$show1_en = '';
$cek2_en = '';
$teks2_en = '';
$show2_en = '';
if($d['video_en']!=""){
	$cek1_en='checked';
	$teks1_en='-- Pertanyaan ini memiliki Video tersimpan';
	$show2_en='style="display: none;"';
}
else if($d['image_en']!=""){
	$cek2_en='checked';
	$teks2_en='-- Pertanyaan ini memiliki Gambar tersimpan';
	$show1_en='style="display: none;"';
}
else {
	$show1_en='style="display: none;"';
	$show2_en='style="display: none;"';
}

?>
<div class="content-wrapper">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js">
	</script>
	<h4>
	Pertanyaan <small class="text-muted">/ Edit Pertanyaan</small>
	</h4>
	<hr>
	<div class="row">
		<div class="col-md-9 col-xs-12 d-flex align-items-stretch grid-margin">
			<div class="row flex-grow">
				<div class="col-12 col-xs-12">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Pengaturan Pertanyaan</h4>
							<form class="forms-sample" action="index.php?page=case&act=proses" method="post" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?=$_GET['id']; ?>">
								<input type="hidden" name="id_case" value="<?=$_GET['id_case']; ?>">
								<input type="hidden" name="image_old" value="<?='../../assets/img/img_Questions/'.$target.$d['image']; ?>">
								<input type="hidden" name="image_en_old" value="<?='../../assets/img/img_Questions/'.$target.$d['image_en']; ?>">
								<hr>
								<div class="form-group">
									<b><label>Media *ID (Pilih Salah Satu)</label></b>
									<div class="form-radio form-radio-flat">
										<label class="form-check-label">
										<input type="radio" class="form-check-input" name="tipe" value="1" <?=$cek1 ?> >
										Youtube <?=$teks1?>
										</label>
									</div>
									<div class="form-radio form-radio-flat">
										<label class="form-check-label">
										<input type="radio" class="form-check-input" name="tipe" value="2" <?=$cek2 ?> >
										Gambar <?=$teks2?>
										</label>
									</div>
								</div>
								<div id="Tipe1" class="desc" <?=$show1;?>>
									<div class="form-group" id="Yt1">
										<label>Link Video *</label>
										<input name="video" type="text" class="form-control" placeholder="https://www.youtube.com/watch?v=36h5kHUbBTQ" value="<?='https://www.youtube.com/watch?v='.$d['video']?>">
									</div>
								</div>
								<div id="Tipe2" class="desc" <?=$show2;?>>
									<div class="form-group">
										<label>Gambar *</label>
										<input name="foto" type="file" class="form-control">
									</div>
								</div>    
								
								<div class="form-group">
									<b><label>Media *EN (Select One)</label></b>
									<div class="form-radio form-radio-flat">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="tipe2" value="1" <?=$cek1_en ?>>
										Youtube <?=$teks1_en?>
									</label>
									</div>
									<div class="form-radio form-radio-flat">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="tipe2" value="2" <?=$cek2_en ?>>
										Gambar <?=$teks2_en?>
									</label>
									</div>
								</div>
								<div id="Type1"class="desc2" <?=$show1_en;?>>
									<div class="form-group" id="Yt1">
										<label>Link Video *</label>
										<input name="video_en" type="text" class="form-control" placeholder="https://www.youtube.com/watch?v=36h5kHUbBTQ" value="<?='https://www.youtube.com/watch?v='.$d['video_en']?>">
									</div>
								</div>
								<div id="Type2" class="desc2" <?=$show2_en;?>>
									<div class="form-group">
										<label>Gambar *</label>
										<input name="foto_en" type="file" class="form-control">
									</div>
								</div>
								<hr>
								
								<div class="form-group">
									<b><label for="ckeditor">Deskripsi Materi (ID)</label></b>
									<textarea name="materi" class="ckeditor"><?=$d['content_ind']?></textarea>
									<script type="text/javascript">
										CKEDITOR.replace( 'materi' );
										CKEDITOR.add            
									</script>
								</div>
								<div class="form-group">
									<b><label for="ckeditor">Content Description (EN)</label></b>
									<textarea name="content" class="ckeditor"><?=$d['content_en']?></textarea>
									<script type="text/javascript">
										CKEDITOR.replace( 'content' );
										CKEDITOR.add            
									</script>
								</div>
								<div class="row">
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<b><label>Pertanyaan (ID)</label></b>
											<input type="text" name="pertanyaan" class="form-control" placeholder="Pertanyaan" value="<?=$d['question_ind'] ?>">
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<b><label>Question (EN)</label></b>
											<input type="text" name="question" class="form-control" placeholder="Question" value="<?=$d['question_en'] ?>">
										</div>
									</div>
								</div>
								<hr>
								<button type="submit" name="update_pertanyaan" class="btn btn-info mr-2">Simpan</button>
								<a href="javascript:history.back()" class="btn btn-danger">Batal</a>
							</form>
			  

							<script type="text/javascript">
								$(document).ready(function() {
								$("input[name$='tipe']").click(function() {
								var test = $(this).val();
				
								$("div.desc").hide();
								$("#Tipe" + test).show();
								});
								});
							</script>
							<script type="text/javascript">
								$(document).ready(function() {
								$("input[name$='tipe2']").click(function() {
								var test = $(this).val();
				
								$("div.desc2").hide();
								$("#Type" + test).show();
								});
								});
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>