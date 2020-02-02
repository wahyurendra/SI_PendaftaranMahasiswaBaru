<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PMB STSN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/style.css">
    <!-- Bs -->
    
    
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?=base_url();?>"><span>PMB </span>STSN.</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?=base_url();?>" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="<?=base_url();?>home/prodi" class="nav-link">Prodi</a></li>
            <li class="nav-item"><a href="<?=base_url();?>home/alur" class="nav-link">Alur Pendaftaran</a></li>
            <li class="nav-item"><a href="<?=base_url();?>home/jadwal" class="nav-link">Jadwal Tes</a></li>
	          <li class="nav-item"><a href="<?=base_url();?>home/formulir" class="nav-link">Formulir Pendaftaran</a></li>
            <li class="nav-item"><a href="#" class="nav-link"></a></li>
	          <li class="nav-item cta mr-md-2"><a href="<?=base_url();?>home/formulir" class="nav-link">Daftar</a></li>
	          <li class="nav-item cta mr-md-2"><a href="<?php echo base_url();?>administrator" class="nav-link">Login</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('<?php echo base_url();?>assets/landing/images/bg_1.jpeg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          <?php echo $this->session->flashdata('error_daftar'); ?>
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> Penutupan <br><span>Pendaftaran</span></h1>
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">27 Maret, 2020</p>
            <div id="timer" class="d-flex mb-3">
						  <div class="time" id="days"></div>
						  <div class="time pl-4" id="hours"></div>
						  <div class="time pl-4" id="minutes"></div>
						  <div class="time pl-4" id="seconds"></div>
						</div>
          </div>
        </div>
      </div>
    </div>

   	
    <section class="ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex">
                    <!-- <div class="img d-flex align-self-stretch" style="background-image:url(<?php echo base_url();?>assets/landing/images/about.jpg);"></div> -->
                    <div class="container">
                            <h2>Foto</h2>  
                            
                                <div class="item active">
                                    <img src="<?php echo base_url();?>assets/landing/images/pengumuman.jpeg" alt="Los Angeles" style="width:100%;">
                                </div>

                    </div>
    			</div>
    			<div class="col-md-6 pl-md-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading"></span>
		            <h2 class="mb-4" style="text-align:center;"><span>Informasi</span> Terbaru</h2>
		          </div>
		        </div>
		    	<div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                            <h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"></span> Papan Informasi</h3>
                            </div>
                                <div class="panel-body">
                                    <ul id="gulung">
                                    <?php if ($informasi): ?>

                                        <?php foreach ($informasi as $info):
                                            $d=date('D, d, M H:m',strtotime($info->created_at));
                                        ?>
                                            <li class="news-item"><?=$d  ?><p><?=$info->info ?></p></li>
                                        <?php endforeach ?>

                                    <?php else: ?>
                                        <li class="news-item"><p>Tidak Ada Informasi Terbaru</p></li>	
                                    <?php endif ?>
                        
                                    </ul>
                                </div>
                            <div class="panel-footer"></div>
                        </div>
                        <div class="col-md-4"></div>
                    </div><!-- /col-lg-4 -->
                </div> <!-- row -->
		    
        </div>
    	</div>
    </section>

 

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2> <span class="icon icon-map-marker"></span><span class="text"> Ciseeng, Bogor</span></h2>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2"><a href="#"><span class="icon icon-phone"></span><span class="text"> 0321 121212</span></a></h2>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h3 class="ftco-heading-2"><a href="#"><span class="icon icon-envelope"></span><span class="text"> kontak@pmb-stsn.com</span></a></h3>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<div class="block-23 mb-3">
	              <ul>
	                <li></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="<?php echo base_url();?>assets/landing/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/landing/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/landing/js/popper.min.js"></script>
  <script src="<?php echo base_url();?>assets/landing/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/landing/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url();?>assets/landing/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url();?>assets/landing/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url();?>assets/landing/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/landing/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url();?>assets/landing/js/aos.js"></script>
  <script src="<?php echo base_url();?>assets/landing/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url();?>assets/landing/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url();?>assets/landing/js/jquery.timepicker.min.js"></script>
  <script src="<?php echo base_url();?>assets/landing/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url();?>assets/landing/js/google-map.js"></script>
  <script src="<?php echo base_url();?>assets/landing/js/main.js"></script>
    
  </body>
</html>