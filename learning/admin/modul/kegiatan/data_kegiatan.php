<div class="content-wrapper">
	<style>
	td {
	text-align: left;
	}
	</style>
	<h4>
	<b>Berita atau Event</b>
	</h4>
	<div class="row purchace-popup">
		<div class="col-md-12 col-xs-12">
		<span class="d-flex alifn-items-center">
		<a class="btn btn-dark" href="?page=kegiatan&act=add"> <i class="fa fa-plus"></i> Tambah Artikel</a>
		</span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="alert alert-info alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Petunjuk LANGKAH!</strong> <br> 
			<ul>
				<li> Klik <b>Tambah Artikel</b> Untuk Menambahkan Artikel.</li>
				<li> Klik <b>Edit</b> Untuk Mengedit Artikel.</li>
				<li> Klik <b>Hapus</b> Untuk Menghapus Artikel.</li>
			</ul>
	
	
			</div>
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Data Artikel</h4>
					<div class="table-responsive">
						<table class="table table-striped table-hover table-condensed" id="data">
							<thead>
								<tr>
									<th>#</th>
									<th style="text-align: left;">Tanggal Atikel</th>
									<th>Nama Artikel</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$no=1;
								$sql = mysqli_query($con,"SELECT * FROM event");
								foreach ($sql as $d) { ?>
								<tr>								
									<td width="50"><b><?=$no++; ?>.</b> </td>
									<td><?=date("d-m-Y", strtotime($d['tanggal']));?> </td>
									<td><?=$d['judul']?> </td>
									<td>
										<a href="?page=kegiatan&act=kegiatanedit&id=<?=$d['id']; ?>" class="btn btn-dark btn-sm"><i class="fa fa-pencil"></i> Edit </a>
										<a href="?page=kegiatan&act=kegiatandel&id=<?=$d['id']; ?>" onclick="return confirm('Yakin Hapus Data ?')" class="btn btn-dark btn-sm text-danger"><i class="fa fa-trash"></i> Hapus </a>
									</td>
								</tr>
								<?php } ?>  
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>