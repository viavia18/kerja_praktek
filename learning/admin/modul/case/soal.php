<div class="content-wrapper">
	<h4>
		<b>Pertanyaan </b>
		<small class="text-muted">/
		Data Pertanyaan
		</small>
	</h4>
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Data Pertanyaan</h4>
					<div class="table-responsive">
						<table class='table table-striped'>
							<thead>
								<tr>
									<th width="10">No</th>	
									<th>Pertanyaan</th>
									<th>Question</th>
									<th>Jawaban</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$nomor = 1;
								$tampil_pertanyaan = mysqli_query($con, "SELECT * FROM questions WHERE id_case='$_GET[id]' ORDER BY id ASC");
								while($r=mysqli_fetch_array($tampil_pertanyaan)){ ?>
			
								<tr>
									<td><?=$nomor++; ?> .</td>
									<td><b><?=$r['question_ind']; ?></b></td>
									<td><b><?=$r['question_en']; ?></b></td>
									<td>
										<ol type='A'>		
										<?php 
											$tampil_jawaban = mysqli_query($con, "SELECT * FROM answers WHERE id_question='$r[id]' ORDER BY id ASC");
											
											$count=mysqli_num_rows($tampil_jawaban);
											foreach ($tampil_jawaban as $d){
												
												?>
												
												<li>
												<?=$d['option_ind'] ?><br>
												<br>
												<?=$d['option_en'] ?><br>
												<br>
												<a href='?page=case&act=jawabanedit&id=<?=$d['id'] ?>&id_case=<?=$_GET[id] ?>'>[ Edit ]</a>
												<a href='?page=case&act=jawabandel&id=<?=$d['id'] ?>&id_case=<?=$_GET[id] ?>' style='color:red;'>[ Delete ]</a>
												<br> 
												</li>
												<?php
											}
										?>
										</ol>
									</td>
									<td>
									<a href="?page=case&act=soaledit&id=<?=$r['id']; ?>&id_case=<?=$_GET[id] ?>"class='btn btn-dark btn-sm'><i class='fa fa-pencil'></i></a>   
									<a href="?page=case&act=soaldel&id=<?=$r['id']; ?>&id_case=<?=$_GET[id] ?>" class='btn btn-dark btn-sm text-danger'><i class='fa fa-trash'></i></a>
									</td>
								</tr>
								<?php
								} 
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


