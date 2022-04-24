<?php
if (@$_SESSION['Dosen']) {
$sesi = @$_SESSION['Dosen'];
}
?>
<div class="content-wrapper">
	<h4>
	<b>CASE</b>
	</h4>
	<div class="row purchace-popup">
        <div class="col-md-12 col-xs-12">
			<span class="d-flex alifn-items-center">
			<a class="btn btn-dark" href="?page=case&act=add"> <i class="fa fa-plus"></i> Tambah Case</a>
			</span>
        </div>
    </div>
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="alert alert-info alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Petunjuk LANGKAH!</strong> <br> 
				<ul>
					<li> Klik <b>Tambah Case</b> Untuk Menambahkan Case.</li>
					<li> Klik <b>Buat Pertanyaan</b> Untuk Menambahkan Soal.</li>
					<li> Klik <b>Buat Evaluasi</b> Untuk Menambahkan Evaluasi.</li>
					<li> Klik <b>Status Case</b> Untuk Membuka dan Menutup Case. </li>
				</ul>
			</div>
			<div class="card">
                <div class="card-body">
					<h4 class="card-title">Data Case</h4>
					<div class="table-responsive">
						<table class="table table-striped table-hover table-condensed" id="data">
							<thead>
							<tr>
								<th>#</th>
								<th>Nama Case (ID)</th>
								<th>Case Title (EN)</th>
								<th>Pertanyaan</th>
								<th>Ulasan</th>
								<th>Pengunjung</th>
								<th>Status Case</th>
								<th>Opsi</th>
							</tr>
							</thead>
							<tbody>
								<?php 
								$no=1;
								$sqlrole = mysqli_query($con,"SELECT * FROM cases WHERE creator='$sesi'");
								foreach ($sqlrole as $row) { ?>       
								<tr>
									<td><?=$no++; ?>.</td>
									<td><?=$row['title_ind']; ?></td>
									<td><?=$row['title_en']; ?></td>
									<td> 
									<?php $jmlSoal = mysqli_num_rows(mysqli_query($con,"SELECT * FROM questions WHERE id_case='$row[id]' ")) ?>
										<a href="?page=case&act=soal&id=<?=$row['id']; ?>" class="btn btn-primary btn-sm text-white">Buat Pertanyaan  ( <b><?=$jmlSoal; ?></b> )</a>
									</td>
									<td> 
										<a href="?page=case&act=ulasanadd&id=<?=$row['id']; ?>" class="btn btn-sm text-white" style="background-color: #FF5722;">Buat Ulasan</a>
									</td>
									<td class="text-center">
										<a href="?page=case&act=visitors&case=<?=$row['id']; ?>" class="btn btn-sm btn-warning">Detail</a>
									</td>
									<td>
									<?php 
										$klsu= mysqli_query($con,"SELECT * FROM cases WHERE id='$row[id]' AND status='1'");
										$jml = mysqli_num_rows($klsu);
										// foreach ($klsu as $u)
										if ($jml > 0) {
									?>
										<a data-toggle="modal" data-target="#tutup<?=$row['id']; ?>" class="btn btn-success btn-sm text-white"><i class="fa fa-check-square-o"></i> Aktif </a>
										<!-- MODAL TUTUP UJIAN -->
										<div class="modal fade" id="tutup<?=$row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title">
															<center>
															Apakah Anda Ingin <b>Non Aktifkan</b> Case Ini <br> Sekarang ?
															</center>
														</h4>
													</div>
													<div class="modal-body">                                    
													<center>
														<a href="?page=case&act=close&case=<?php echo $row['id']; ?>" class="btn btn-dark"><i class="fa fa-check-square-o"></i> Ya</a>
														<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-window-close-o"></i> Tidak</button>
													</center>
													</div>
												
												</div>
											</div>
										</div>
				
									<?php
										}else{
									?>
										<!-- <a class="badge badge-pill badge-warning">Tidak Aktif</a> -->
										<a data-toggle="modal" data-target="#Aktif<?=$row['id']; ?>" class="btn btn-danger btn-sm text-white"><i class="fa fa-window-close-o"></i> Tutup </a> 
											<!-- Modal Aktifkan ujian -->
											<div class="modal fade" id="Aktif<?=$row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
														<h4 class="modal-title">
															<center>
															Apakah Anda Ingin <b>Mengaktifkan</b> Ujian Ini Sekarang ?
															</center>
														</h4>
														</div>
														<div class="modal-body">                                    
															<center>
																<a href="?page=case&act=active&case=<?php echo $row['id']; ?>" class="btn btn-dark"><i class="fa fa-check-square-o"></i> Ya</a>
																<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-window-close-o"></i> Tidak</button>
															</center>
														</div>
													</div>
												</div>
											</div>
											<?php
											}                              
											?> 
									</td>
									<td>
										<!-- Modal -->
										<div class="modal fade" id="kelasUjian<?=$row['id_ujian']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
											<div class="modal-dialog" role="document">
												<div class="modal-content" style="overflow:scroll;height=600px;">
													</form>
												</div>
											</div>
										</div>
										<a href="?page=case&act=caseedit&id=<?=$row['id']; ?>" class="btn btn-dark btn-sm"><i class="fa fa-pencil"></i> Edit </a>
										<a href="?page=case&act=casedel&id=<?=$row['id']; ?>" onclick="return confirm('Yakin Hapus Data ?')" class="btn btn-dark btn-sm text-danger"><i class="fa fa-trash"></i> Del </a>
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