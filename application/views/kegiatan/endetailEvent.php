<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url('assets/') ?>img/usd.png" type="image/png">
    <title>School of Business Sanata Dharma University</title>
    <!-- Bootstrap CSS -->
	<style>
	 label {
     margin: 0;
     padding: 0;
     border: 0;
     font-size: 100%;
     font: inherit;
     vertical-align: baseline
 }
 .customRadio input[type="radio"] {
     position: absolute;
     left: -9999px;
 }

 .customRadio input[type="radio"]+label {
     position: relative;
     padding: 0 0 0 40px;
     cursor: pointer;
 }

 .customRadio input[type="radio"]+label:before {
     content: '';
     background: #fff;
     border: 2px solid #311B92;
     height: 25px;
     width: 25px;
     border-radius: 50%;
     position: absolute;
     top: 0;
     left: 0;
 }

 .customRadio input[type="radio"]+label:after {
     content: '';
     background: #311B92;
     width: 15px;
     height: 15px;
     border-radius: 50%;
     position: absolute;
     top: 5px;
     left: 5px;;
     opacity: 0;
     transform: scale(2);
     transition: transform 0.3s linear, opacity 0.3s linear
 }

 .customRadio input[type="radio"]:checked+label:after {
     opacity: 1;
     transform: scale(1)
 }
  .holder {
     padding: 0 0 30px;
     margin: 0 0 30px
 }

 .row {
     margin: 0 0 10px
 }
 
 img {
    max-width: 100%;
    height: auto;
    width: auto\9; /* ie8 */
}
}

 </style>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/linericon/style.css">
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/stylekegiatan.css">   
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/animate-css/animate.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/popup/magnific-popup.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/materi_style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/responsive.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/popper.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(() => {
            $("#nav<?= $this->uri->segment(2); ?>").addClass('active')
        })
    </script>


</head>

<body style="overflow-x:hidden;background-color:#fbf9fa;">


    <!-- Start Navigation Bar -->
    <header class="header_area" style="background-color: white !important;">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="<?= base_url('welcome') ?>"><img src="<?= base_url('assets/') ?>img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item" id="nav"><a class="nav-link" href="<?= base_url('welcome') ?>">Home</a></li>
                            <li class="nav-item" id="navtentang"><a class="nav-link" href="<?= base_url('materi/elearning') ?>">E-learning</a>
                            </li>
                            <li class="nav-item" id="navkontak"><a class="nav-link" href="<?= base_url('welcome/kegiatan') ?>">Event</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('welcome/profile') ?>">Profile</a></li>
							<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Language </a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="<?= base_url('welcome') ?>/id">Indonesia <img src="<?= base_url('assets/') ?>img/id.png" alt=""></a>
								<a class="dropdown-item" href="<?= base_url('welcome') ?>/en">English <img src="<?= base_url('assets/') ?>img/en.png" alt=""></a>
							</div>
							</li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Navigation Bar -->


    <!-- Start Greeting Cards -->
	
    <div class="container">
        <div class="bg-white mx-auto p-4 buat-text">
            <div class="row" style="color: black; font-family: 'poppins';">
                <div class="col-md-12 mt-1 text-center">
					<div class="breadcrumb-area">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
											<li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('/welcome/kegiatan') ?>">Event</a></li>
											<li class="breadcrumb-item active" aria-current="page">
											<?php 
												foreach ($activity as $d) { 
													echo $d->title_en;
												}
											?>
											</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
					</div>
					<h2>
					<?php 
						foreach ($activity as $d) { 
							echo $d->title_en;
					?>
					</h2>
					<br>
					<div>
						<img width="80%" height="200px" src="
						<?php
							echo base_url('assets/img/img_Activities/').$d->image;
						?>" alt="">
					</div>
						
						
						
						<p><i class="fa fa-calendar" aria-hidden="true"></i>
						<?php
							echo date("l, d-F-Y", strtotime($d->timestamp));}
						?>
						</p>
						<hr width="80%">
						<p style="text-align:left;font-size:16px;  text-align:justify;text-justify:inter-word;">
						<?php
							echo $d->content_en;
						?>
						</p>
                </div>
				
				
            </div>
        </div>
    </div>
    <!-- End Greeting Cards -->


    <!-- Start Lesson Cards -->
    <div class="container">
        <div class="row mt-4">
		<!--
            <?php foreach ($materi as $u) { ?>
                <div class="col-md-6 mb-4" data-aos="fade-right" data-aos-duration="1200">
                    <div class="card materi w-150 border-0">
                        <div class="card-body p-5">
                            <h1 class="card-title"><?= $u->nama_guru; ?></h1>
                            <p class=" card-text">
                                <?= substr($u->deskripsi, 0, 100); ?>&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.
                            </p>
                            <a href="<?php echo site_url('materi/belajar/' . $u->id); ?>" class="btn btn-white">Start learning!</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
			--!>
        </div>
    </div>
    <!-- End Lesson Cards -->


    <br>


    <!-- Start Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- End Animate On Scroll -->