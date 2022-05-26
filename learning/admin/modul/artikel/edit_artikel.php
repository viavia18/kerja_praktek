<?php 
$edit= mysqli_query($con,"SELECT * FROM artikel WHERE id='$_GET[id]' ");
foreach ($edit as $d) ?>
<div class="content-wrapper">
	<script src=
	"https://code.jquery.com/jquery-1.12.4.min.js">
	</script>
	<h4>
	Artikel <small class="text-muted">/ Edit</small>
	</h4>
	<hr>
	<div class="row">
		<div class="col-md-9 col-xs-12 d-flex align-items-stretch grid-margin">
			<div class="row flex-grow">
				<div class="col-12 col-xs-12">
					<div class="card">
						<div class="card-body">
						<h4 class="card-title">Pengaturan Artikel</h4>
						<p class="card-description">
							<!-- Basic form layout -->
						</p>
						<form class="forms-sample" action="index.php?page=artikel&act=proses" method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<label>Judul Artikel </label>
										<input type="hidden" name="id" value="<?=$d['id'] ?>">
										<input type="text" name="nama" class="form-control" value="<?=$d['judul'] ?>">
									</div>
								</div>
							</div>	
							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<label>Tanggal Artikel</label>
										<input type="date" name="tgl" class="form-control" value="<?=$d['tanggal'] ?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<label>Gambar </label>
										<input name="foto" type="file" class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="ckeditor">Isi Konten </label>
								<textarea name="materi" class="ckeditor"><?=$d['konten'] ?></textarea>
								<script type="text/javascript">
									CKEDITOR.replace('materi');
									CKEDITOR.add            
								</script>
							</div>
							<hr>
							<button type="submit" name="update_artikel" class="btn btn-info mr-2">Simpan</button>
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