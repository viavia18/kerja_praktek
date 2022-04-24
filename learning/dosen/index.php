<?php
session_start();
include '../config/db.php';
// memanggil class PHPExcel
  include'../assets/PHPExcel/Classes/PHPExcel.php';
  include'../assets/PHPExcel/Classes/PHPExcel/IOFactory.php';
if (@$_SESSION['Dosen']) {
?>
<?php
if (@$_SESSION['Dosen']) {
$sesi = @$_SESSION['Dosen'];
}
$sql = mysqli_query($con,"SELECT * FROM users WHERE id = '$sesi'") or die(mysqli_error($con));
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
	<style>
	.wrap{
	margin: 10px auto;
	color: #212121;
	/*background: #35a9db;*/
	text-align: justify;
	}      
	::-webkit-scrollbar{
	width: 12px;
	object-position: left;
	}
	::-webkit-scrollbar-track{
	-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,0,3) ;
	background: #666;
	}
	::-webkit-scrollbar-thumb{
	background: #232323;
	}
	</style>
</head>
<body>
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
		<div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center" style="background-color: #0c77c8;">
			<a class="navbar-brand brand-logo" href="index.php" style="font-family:Aegyptus;font-size: 30px;text-decoration: none;">
				<img src="../vendor/images/favicon.png" alt="logo" style="width: 200px;">
			</a>
		</div>
		<div class="navbar-menu-wrapper d-flex align-items-center" style="background-color: #1991eb;">
			<ul class="navbar-nav navbar-nav-right" style="border-top-left-radius:50px;color: black;border-bottom-left-radius:50px;color: #fff; ">
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
						<div class="profile-image"> <img src="../vendor/images/img_Users/<?php if($data['image']){echo $data['image'];} else {echo 'usd.png';}?>" alt="image" style="border:3px solid black;"/> <span class="online-status online"></span> </div>
						<div class="profile-name">
							<p class="name"><?=$data['nama']; ?></p>
							<p class="designation">Dosen</p>
							<div class="badge badge-teal mx-auto mt-3">Online</div>
						</div>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php"><img class="menu-icon" src="../vendor/images/menu_icons/01.png" alt="menu icon"><span class="menu-title">DASHBOARD</span></a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="?page=case"><img class="menu-icon" src="../vendor/images/menu_icons/04.png" alt="menu icon"><span class="menu-title">CASE</span></a>
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
                if ($page=='perangkat') {
                  if ($act=='') {
                    include 'modul/perangkat/data_perangkat.php';
                  }elseif ($act=='add') {
                    include 'modul/perangkat/add_perangkat.php';
                  }elseif ($act=='edit') {
                    include 'modul/perangkat/edit_perangkat.php';
                  }elseif ($act=='del') {
                    include 'modul/perangkat/del_perangkat.php';
                  }elseif ($act=='view') {
                    include 'modul/perangkat/view.php';
                  }
                }elseif ($page=='mapel') {
                  if ($act=='') {
                    include 'modul/role/data_role.php';
                  }elseif ($act=='add') {
                   include 'modul/role/add_role.php';
                  }elseif ($act=='edit') {
                   include 'modul/role/edit_role.php';
                  }elseif ($act=='del') {
                   include 'modul/role/del_role.php';
                  }
                }elseif ($page=='materi') {
                  if ($act=='') {
                    include 'modul/materi/data_materi.php';
                  }elseif ($act=='add') {
                   include 'modul/materi/add_materi.php';
                  }elseif ($act=='edit') {
                   include 'modul/materi/edit_materi.php';
                  }elseif ($act=='del') {
                   include 'modul/materi/del_materi.php';
                  }elseif ($act=='view') {
                   include 'modul/materi/view_materi.php';
                  }elseif ($act=='activate') {
                   include 'modul/materi/activate.php';
                  }
                }elseif ($page=='case') {
                  if ($act=='') {
                    include 'modul/case/data_case.php';
                  }elseif ($act=='proses') {
                    include 'modul/case/proses.php';
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
                }elseif ($page=='nilai') {
                  if ($act=='') {
                    include 'modul/nilai/data_nilai.php';
                  }elseif ($act=='view') {
                    include 'modul/nilai/view_nilaikelas.php';
                  }
                }elseif ($page=='profil') {
                  if ($act=='') {
                    include 'modul/profil/data_profil.php';
                  }
                }elseif ($page=='chat') {
                  if ($act=='del') {
                   include 'modul/chat/del.php';
                  }
                  
                }elseif ($page=='tugas') {
                 if ($act=='') {
                   include 'modul/tugas/v_tugas.php';
                 }elseif ($act=='add') {
                   include 'modul/tugas/add_tugas.php';
                 }elseif ($act=='addkelastugas') {
                   include 'modul/tugas/add_kelastugas.php';
                 }elseif ($act=='delkelas') {
                   include 'modul/tugas/del_kelastugas.php';
                 }elseif ($act=='close') {
                   include 'modul/tugas/close.php';
                 }elseif ($act=='active') {
                   include 'modul/tugas/active.php';
                 }elseif ($act=='edit') {
                   include 'modul/tugas/edit_tugas.php';
                 }elseif ($act=='del') {
                   include 'modul/tugas/del_tugas.php';
                 }elseif ($act=='view') {
                   include 'modul/tugas/data_tugas.php';
                 }elseif ($act=='viewkelas') {
                   include 'modul/tugas/view_tugaskelas.php';
                 }
                }elseif ($page=='setting') {
					if ($act=='') {
					include 'modul/setting/setting.php';
				 }elseif ($act=='user') {
					include 'modul/setting/setting_user.php';
				 }
				}elseif ($page=='proses') {
                 include 'modul/models.php';
                }elseif ($page=='') {
                 include 'Home.php';
                }else{
                  echo "<b>4014!</b> Tidak ada halaman !";
                }

                 ?>
           <!-- End-kontent -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>


<!-- container-scroller -->
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
     CKEDITOR.replace('ckeditor1',{
        
        filebrowserImageBrowseUrl : '../vendor/kcfinder',
        // uiColor:'#1991eb'
    });
      CKEDITOR.replace('ckeditor2',{
        
        filebrowserImageBrowseUrl : '../vendor/kcfinder',
        // uiColor:'#1991eb'
    });
        CKEDITOR.replace('ckeditor3',{
        
        filebrowserImageBrowseUrl : '../vendor/kcfinder',
        // uiColor:'#1991eb'
    });
          CKEDITOR.replace('ckeditor4',{
        
        filebrowserImageBrowseUrl : '../vendor/kcfinder',
        // uiColor:'#1991eb'
    });
          CKEDITOR.replace('ckeditor5',{
        
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
} else{

	include 'modul/500.html';

// echo "<script>
// window.location='../index.php';</script>";

}
