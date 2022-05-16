<?php
session_start();
include '../config/db.php';

if (@$_SESSION['Admin']) {}
?>
<?php
if (@$_SESSION['Admin']) {
$sesi = @$_SESSION['Admin'];
$sql = mysqli_query($con,"SELECT * FROM user WHERE id = '$sesi'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>E-learning | <?=$data['nama']; ?></title>
		<!-- plugins:css -->
		<link rel="stylesheet" href="../vendor/node_modules/mdi/css/materialdesignicons.min.css">
		<link rel="stylesheet" href="../vendor/node_modules/simple-line-icons/css/simple-line-icons.css">
			<!-- plugin css for this page -->
		<link rel="stylesheet" href="../vendor/node_modules/font-awesome/css/font-awesome.min.css" />
		<!-- endinject -->
		<!-- plugin css for this page -->
		<!-- End plugin css for this page -->
		<!-- inject:css -->
		<link rel="stylesheet" href="../vendor/css/style.css">
		<!-- endinject -->
		<link rel="shortcut icon" href="../vendor/images/usd.png" />
		<link href="../vendor/sweetalert/sweetalert.css" rel="stylesheet" />
		<script type="text/javascript" src="../vendor/ckeditor/ckeditor.js"></script>
		<link rel="stylesheet" type="text/css" href="../vendor/css/jquery.dataTables.css">
	</head>
	<body>
		<div class="container-scroller">
			<!-- partial:../../partials/_navbar.html -->
			<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
				<div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center" style="background-color:#aed3fc ;">
					<a class="navbar-brand brand-logo" href="index.php" style="font-family:Aegyptus;font-size: 30px;text-decoration: none;">
						<img src="../vendor/images/logo.png" alt="logo" style="width: 120px;">
					</a>
				</div>
				<div class="navbar-menu-wrapper d-flex align-items-center" style="background-color: #000761;">
					<ul class="navbar-nav navbar-nav-right" style="border-top-left-radius:50px;color: black;border-bottom-left-radius:50px;color: #fff;border:1px">
						<li class="nav-item d-none d-lg-block">
							<a class="nav-link" href="index.php?page=setting&act=user">              
							<b>My Profile</b>
							<img class="img-xs rounded-circle" src="../vendor/images/img_Users/<?php if($data['image']){echo $data['image'];} else {echo 'usd.png';}?>" alt="">
							</a>
						</li>
					</ul>
					<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
						<span class="icon-menu"></span>
					</button>
				</div>
			</nav>
			<!-- partial -->
			<div class="container-fluid page-body-wrapper">
				<!-- partial:../../partials/_sidebar.html -->
				<nav class="sidebar sidebar-offcanvas" id="sidebar">
					<ul class="nav">
						<li class="nav-item nav-profile">
							<div class="nav-link">
								<div class="profile-image"> 
									<img src="../vendor/images/img_Users/<?php if($data['image']){echo $data['image'];} else {echo 'usd.png';}?>" alt="image" style="border:3px solid black;"/> 
									<span class="online-status online"></span> 
								</div>
								<div class="profile-name">
									<p class="name"><?=$data['nama_lengkap']; ?></p>
									<p class="designation">Administrator</p>
									<div class="badge badge-teal mx-auto mt-3">Online</div>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php"><img class="menu-icon" src="../vendor/images/menu_icons/01.png" alt="menu icon"><span class="menu-title">DASHBOARD</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?page=kegiatan"> 
							<i class="fa fa-newspaper-o icon-md"style="font-size:20px;"></i> &nbsp; 
							<span class="menu-title"> BERITA/EVENT</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?page=dosen"> 
							<i class="fa fa-spin fa-gear icon-md" style="font-size:20px;"></i> &nbsp; 
							<span class="menu-title"> STAFF</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?page=case">
							<i class="fa fa-file" aria-hidden="true" ></i> &nbsp;
							<span class="menu-title">GALERI FOTO</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?page=visitors">
							<i class="fa fa-eye" aria-hidden="true" ></i> &nbsp;
							<span class="menu-title">PROGRAM</span></a>
						</li>
						<hr>
						<li class="nav-item purchase-button">
							<a class="nav-link" href="logout.php">
							Logout</a>
						</li>
					</ul>
				</nav>
				<!-- partial -->
				<div class="main-panel">
					<!-- Konten -->
					<?php
					error_reporting();
					$page = @$_GET['page'];
					$act = @$_GET['act'];
			
					
					if ($page=='dosen') {
						if ($act=='') {
						include 'modul/dosen/data_dosen.php';
						}elseif ($act=='del') {
						include 'modul/dosen/del_dosen.php';
						}elseif ($act=='confirm') {
						include 'modul/dosen/confir_dosen.php';
						}elseif ($act=='unconfirm') {
						include 'modul/dosen/unconfir_dosen.php';
						}elseif ($act=='proses') {
						include 'modul/dosen/proses.php';
						}elseif ($act=='add') {
						include 'modul/dosen/add_dosen.php';
						}elseif ($act=='edit') {
						include 'modul/dosen/edit_dosen.php';
					}
					}elseif ($page=='kegiatan') {
						if ($act=='') {
						include 'modul/kegiatan/data_kegiatan.php';
						}elseif ($act=='add') {
						include 'modul/kegiatan/add_kegiatan.php';
						}elseif ($act=='kegiatanedit') {
						include 'modul/kegiatan/edit_kegiatan.php';
						}elseif ($act=='kegiatandel') {
						include 'modul/kegiatan/del_kegiatan.php';
						}elseif ($act=='proses') {
						include 'modul/kegiatan/proses.php';
						}
					}elseif ($page=='case') {
					if ($act=='') {
						include 'modul/case/data_case.php';
					}elseif ($act=='add') {
						include 'modul/case/add_case.php';
					}elseif ($act=='addkelas') {
						include 'modul/case/add_kelas.php';
					}elseif ($act=='soal') {
						include 'modul/case/soal.php';
					}elseif ($act=='soaladd') {
						include 'modul/case/add_soal.php';
					}elseif ($act=='jawabanadd') {
						include 'modul/case/add_jawaban.php';
					}elseif ($act=='ulasanadd') {
						include 'modul/case/add_ulasan.php';
					}elseif ($act=='soaledit') {
						include 'modul/case/edit_soal.php';
					}elseif ($act=='jawabanedit') {
						include 'modul/case/edit_jawaban.php';
					}elseif ($act=='casedel') {
						include 'modul/case/del_case.php';
					}elseif ($act=='soaldel') {
						include 'modul/case/del_soal.php';
					}elseif ($act=='jawabandel') {
						include 'modul/case/del_jawaban.php';
					}elseif ($act=='upSoal') {
						include 'modul/case/upload.php';
					}elseif ($act=='proses') {
						include 'modul/case/proses.php';
					}elseif ($act=='addessay') {
						include 'modul/case/add_essay.php';
					}elseif ($act=='active') {
						include 'modul/case/active.php';
					}elseif ($act=='close') {
						include 'modul/case/close.php';
					}elseif ($act=='caseedit') {
						include 'modul/case/edit_case.php';
					}elseif ($act=='visitors') {
						include 'modul/case/visitors.php';
					}
					}elseif ($page=='visitors') {
						if ($act=='') {
						include 'modul/visitors/visitors.php';
					}
					}elseif ($page=='setting') {
						if ($act=='') {
						include 'modul/setting/setting.php';
					}elseif ($act=='user') {
						include 'modul/setting/setting_user.php';
						}
					}elseif ($page=='proses') {
						include 'modul/procces.php';
						}elseif ($page=='') {
						include 'Home.php';
						}else{
						echo "<b>4014!</b> Tidak ada halaman !";
					}
			
					?>
					<!-- End-kontent -->
				</div>
			</div>
		</div>
		
		
	<!-- plugins:js -->
	<script src="../vendor/js/jquery.min.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
	<script src="../vendor/js/jquery.dataTables.js"></script>
	<script src="../vendor/node_modules/popper.js/dist/umd/popper.min.js"></script>
	<script src="../vendor/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="../vendor/sweetalert/sweetalert.min.js"></script>
	<script src="script.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page-->
	<!-- End plugin js for this page-->
	<!-- inject:js -->
	<script src="../vendor/js/off-canvas.js"></script>
	<script src="../vendor/js/misc.js"></script>
	<!-- endinject -->
	<!-- Custom js for this page-->
	<!-- End custom js for this page-->
	<script>
	CKEDITOR.replace('ckeditor',{
		filebrowserImageBrowseUrl : '../vendor/kcfinder',
		// uiColor:'#1991eb'
	});
	</script>
	<script>
		$(document).ready(function() {
		$('#data').DataTable();
	} );
	</script>
	</body>
</html>


<?php
}else{

	include 'modul/500.html';

// echo "<script>
// window.location='../index.php';</script>";

}?>
