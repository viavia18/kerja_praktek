<div class="content-wrapper">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js">
	</script>
	<h4>
	Pertanyaan <small class="text-muted">/ Tambah Jawaban</small>
	</h4>
	<hr>
	<div class="row">
		<div class="col-md-10 col-xs-12 d-flex align-items-stretch grid-margin">
			<div class="row flex-grow">
				<div class="col-12 col-xs-12">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Form Jawaban</h4>
							<form class="forms-sample" action="index.php?page=case&act=proses" method="post" enctype="multipart/form-data">
								<input type="hidden" name="id_question" value="<?=$_GET['id_question']; ?>">
								<input type="hidden" name="id_case" value="<?=$_GET['id_case']; ?>">
								<div class="row">
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<b><label>Jawaban (ID)</label></b>
											<input type="text" name="jawaban" class="form-control" placeholder="Jawaban">
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<b><label>Answer (EN)</label></b>
											<input type="text" name="answer" class="form-control" placeholder="Answer">
										</div>
									</div>
								</div>	
								<div class="form-group">
									<b><label>Media *ID (Pilih Salah Satu)</label></b>
									<div class="form-radio form-radio-flat">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" name="tipe" value="1">Youtube
										</label>
									</div>
									<div class="form-radio form-radio-flat">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" name="tipe" value="2">Gambar
										</label>
									</div>
								</div>
								
								<div id="Tipe1" class="desc" style="display: none;">
									<div class="form-group" id="Yt1">
										<label>Link Video *</label>
										<input name="video" type="text" class="form-control" placeholder="https://www.youtube.com/watch?v=36h5kHUbBTQ">
									</div>
								</div>
								<div id="Tipe2" class="desc" style="display: none;">
									<div class="form-group">
										<label>Gambar *</label>
										<input name="foto" type="file" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<b><label>Media *EN (Select One)</label></b>
									<div class="form-radio form-radio-flat">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="tipe2" value="1">
										Youtube <?=$teks1?>
									</label>
									</div>
									<div class="form-radio form-radio-flat">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="tipe2" value="2">
										Gambar <?=$teks2?>
									</label>
									</div>
								</div>
								<div id="Type1"class="desc2" style="display: none;">
									<div class="form-group" id="Yt1">
										<label>Link Video *</label>
										<input name="video" type="text" class="form-control" placeholder="https://www.youtube.com/watch?v=36h5kHUbBTQ">
									</div>
								</div>
								<div id="Type2" class="desc2" style="display: none;">
									<div class="form-group">
										<label>Gambar *</label>
										<input name="foto" type="file" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<b><label for="ckeditor">Penjelasan (ID)</label></b>
									<textarea name="materi" class="ckeditor"></textarea>
									<script type="text/javascript">
										CKEDITOR.replace( 'materi' );
										CKEDITOR.add            
									</script>
								</div>
								<div class="form-group">
									<b><label for="ckeditor">Explanation (EN)</label></b>
									<textarea name="content" class="ckeditor"></textarea>
									<script type="text/javascript">
										CKEDITOR.replace( 'content' );
										CKEDITOR.add            
									</script>
								</div>
								<hr>
								<button type="submit" name="save_jawaban" class="btn btn-info mr-2">Simpan</button>
								<a href="javascript:history.back()" class="btn btn-danger">Batal</a>
							</form>
							
							<?php 
							
							?>
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
