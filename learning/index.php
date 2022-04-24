<?php 
session_start();
include 'config/db.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="icon" href="../assets/img/usd.png" type="image/png">
    <title>School of Busines Sanata Dharma</title>
    <link rel="icon" href="../assets/img/usd.png" type="image/png">
    <!-- General CSS Files -->
	
	
	
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Libraries -->
	
    <link rel="stylesheet"
        href="../assets/stisla-assets/node_modules/bootstrap-social/bootstrap-social.css">
    <!-- Template CSS -->
	 
    <link rel="stylesheet" href="../assets/stisla-assets/css/style.css">
    <link rel="stylesheet" href="../assets/stisla-assets/css/components.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>

</head>
<body>
	<div id="app">
        <section class="section">
            <div class="d-flex flex-wrap align-items-stretch">
                <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                    <div class="p-4 m-3">
                        <center>
						<a href="../index.php"> <img src="../assets/img/logo.png" alt="logo"
                                width="150" class=" mb-5 mt-2"></a>
								</center>
                        <h4 class="text-dark font-weight-normal">Selamat datang di <span
                                class="font-weight-bold">TK KANISIUS YOGYAKARTA</span>
                        </h4>
                        <p class="text-muted">Sebelum masuk ke halaman admin, anda harus login terlebih dahulu sebagai admin. silahkan isi data dibawah untuk melanjutkan.</p>
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="email">Username</label>
                                <input id="email" class="form-control" name="email" tabindex="1" required
                                    autofocus>
                                <div class="invalid-feedback">
                                    Harap isi bidang email
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Password</label>
                                </div>
                                <input id="password" type="password" class="form-control" name="password" tabindex="2"
                                    required>
                                <div class="invalid-feedback">
                                    Harap isi bidang password
                                </div>
                            </div>
                            <br>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-block btn-success btn-lg btn-icon icon-right"
                                    tabindex="4">
                                    Masuk
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
                    data-background="../assets/stisla-assets/img/unsplash/login-bg.jpg">
                    <div class="absolute-bottom-left index-2">
                        <div class="text-light p-5 pb-2">
                            <div class="mb-5 pb-3">
                                <h1 class="mb-2 display-4 font-weight-bold text-white">Selamat datang!</h1>
                                <h5 class="font-weight-normal text-muted-transparent text-white">Silahkan login untuk
                                    masuk ke
                                    halaman dashboard.</h5>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
	
<?php

  if($_SERVER['REQUEST_METHOD']=='POST'){
   $email = trim(mysqli_real_escape_string($con, $_POST['email']));
   $pass = sha1($_POST['password']); 

      $sql = mysqli_query($con,"SELECT * FROM users WHERE username='$email' AND password='$pass'") or die(mysqli_error($con)) ;
      $data = mysqli_fetch_array($sql);
      $level = $data ['level'];
	  $id = $data ['id'];
      $cek = mysqli_num_rows($sql);

      if ($cek >0 ){
		  if($level==0){
			  $_SESSION['Admin'] = $id;
              $_SESSION['upload_gambar']= TRUE;
			  echo "
                  <script type='text/javascript'>
                  window.location.replace('admin/index.php');
                  </script>";
		  } else {
			  $_SESSION['Dosen'] = $id;
			  $_SESSION['upload_gambar']= TRUE;
			  echo "
                  <script type='text/javascript'>
                  window.location.replace('dosen/index.php');
                  </script>";
		  }
      }else{
          echo "
          <script type='text/javascript'>
          window.location.replace('?pages=login');
          </script>";
      }
  }
?>

			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/stisla-assets/js/stisla.js"></script>
    <!-- Template JS File -->
    <script src="../assets/stisla-assets/js/scripts.js"></script>
    <script src="../assets/stisla-assets/js/custom.js"></script>
    <!-- Page Specific JS File -->
</body>
</html>