<?php
if (@$_SESSION['Dosen']) {
$sesi = @$_SESSION['Dosen'];
}
?>

<div class="content-wrapper">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js">
	</script>
	<h4>
	Case <small class="text-muted">/ Tambah</small>
	</h4>
	<hr>
	<div class="row">

		<div class="col-md-9 col-xs-12 d-flex align-items-stretch grid-margin">
			<div class="row flex-grow">
				<div class="col-12 col-xs-12">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Pengaturan Case</h4>
							<form class="forms-sample" action="index.php?page=case&act=proses" method="post" enctype="multipart/form-data">
								<input type="hidden" name="id_dosen" value="<?=$sesi; ?>">
								<div class="row">
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<label>Nama Case (ID)</label>
											<input type="text" name="nama" class="form-control" placeholder="Nama Case">
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<label>Case Name (EN)</label>
											<input type="text" name="name" class="form-control" placeholder="Case Name">
										</div>
									</div>
								</div>
								<div class="form-group">
										<label>Thumbnail *</label>
										<input name="foto" type="file" class="form-control">
								</div>
								<div class="form-group">
									<label for="ckeditor">Deskripsi Materi (ID)</label>
									<textarea name="materi" class="ckeditor"></textarea>
									<script type="text/javascript">
										CKEDITOR.replace( 'materi' );
										CKEDITOR.add            
									</script>
								</div>
								<div class="form-group">
									<label for="ckeditor">Content Description (EN)</label>
									<textarea name="content" class="ckeditor"></textarea>
									<script type="text/javascript">
										CKEDITOR.replace( 'content' );
										CKEDITOR.add            
									</script>
								</div>
								<hr>
								<button type="submit" name="save_case" class="btn btn-info mr-2">Simpan</button>
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>