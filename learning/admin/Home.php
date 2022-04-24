<?php 
include 'config/db.php';
$keg = mysqli_query($con,"select * from activities");
$jum_keg = mysqli_num_rows($keg);

$dos = mysqli_query($con,"select * from users where level='1'");
$jum_dos = mysqli_num_rows($dos);

$case = mysqli_query($con,"select * from cases");
$jum_case = mysqli_num_rows($case);

 ?>
<div class="content-wrapper">
  <h3> <b>Dashboard</b> <small class="text-muted">/Admin</small>
  </h3>
  <hr>
  <div class="row">
	<div class="col-md-9 col-xs-12">
		<div class="row">

			<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 grid-margin stretch-card">
				<div class="card card-statistics" style="background-color: #00BCD4;border-radius: 10px;">
					<div class="card-body">
						<div class="clearfix">
							<div class="float-left">
								<i class="fa fa-pencil icon-lg text-white"></i>
							</div>
							<div class="float-right">
								<p class="card-text text-right font-weight-bold text-white">Jumlah Kegiatan</p>
								<div class="fluid-container">
								<h3 class="card-title font-weight-bold text-center mb-0 text-white"><?=$jum_keg; ?></h3>
								</div>
							</div>
						</div>
						<hr>            
						<a href="?page=kegiatan" class="text-white"><i class="fa fa-chevron-circle-right text-white" aria-hidden="true"></i> Views</a>           
					</div>
				</div>
			</div>
			<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 grid-margin stretch-card">
				<div class="card card-statistics" style="background-color: #9C27B0;border-radius: 10px;">
					<div class="card-body">
						<div class="clearfix">
							<div class="float-left">
								<i class="fa fa-pencil icon-lg text-white"></i>
							</div>
							<div class="float-right">
								<p class="card-text text-right font-weight-bold text-white">Jumlah Dosen</p>
								<div class="fluid-container">
								<h3 class="card-title font-weight-bold text-center mb-0 text-white"><?=$jum_dos; ?></h3>
								</div>
							</div>
						</div>
						<hr>            
						<a href="?page=dosen" class="text-white"><i class="fa fa-chevron-circle-right text-white" aria-hidden="true"></i> Views</a>           
					</div>
				</div>
			</div>
			<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 grid-margin stretch-card">
				<div class="card card-statistics" style="background-color: #FF5722;border-radius: 10px;">
					<div class="card-body">
						<div class="clearfix">
							<div class="float-left">
								<i class="fa fa-pencil icon-lg text-white"></i>
							</div>
							<div class="float-right">
								<p class="card-text text-right font-weight-bold text-white">Jumlah Case</p>
								<div class="fluid-container">
								<h3 class="card-title font-weight-bold text-center mb-0 text-white"><?=$jum_case; ?></h3>
								</div>
							</div>
						</div>
						<hr>            
						<a href="?page=case" class="text-white"><i class="fa fa-chevron-circle-right text-white" aria-hidden="true"></i> Views</a>           
					</div>
				</div>
			</div>
		</div>
    </div> 

<!-- style="overflow:scroll;height:600px;border-radius:10px;background-color:#fff;border:7px solid;" -->

</div>
  </div>