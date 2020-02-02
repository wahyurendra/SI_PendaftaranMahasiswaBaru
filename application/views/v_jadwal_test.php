<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jadwal Test</title>
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

    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

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
	          <li class="nav-item"><a href="<?=base_url();?>" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="<?=base_url();?>home/prodi" class="nav-link">Prodi</a></li>
              <li class="nav-item"><a href="<?=base_url();?>home/alur" class="nav-link">Alur Pendaftaran</a></li>
              <li class="nav-item active"><a href="<?=base_url();?>home/jadwal" class="nav-link">Jadwal Tes</a></li>
	          <li class="nav-item"><a href="<?=base_url();?>home/formulir" class="nav-link">Formulir Pendaftaran</a></li>
              <li class="nav-item"><a href="#" class="nav-link"></a></li>
	          <li class="nav-item cta mr-md-2"><a href="<?=base_url();?>home/formulir" class="nav-link">Daftar</a></li>
	          <li class="nav-item cta mr-md-2"><a href="<?php echo base_url();?>administrator" class="nav-link">Login</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-3 bread"><span>Jadwal </span> Tes</h1>
          </div>
        </div>
      </div>
    </section>

    
    <section id="alur" class="ftco-section bg-light alur-section">
            <div class="row">
            	<div class="col-md-10 col-md-offset-1">
            		<table class="table table-bordered">
            			<thead>
            				<tr class="info">
            					<th style="text-align: center;">TES</th>
            					<th style="text-align: center;">Tanggal Tes</th>
            					<th style="text-align: center;">Waktu</th>
            					<th style="text-align: center;">Keterangan</th>
            				</tr>
            			</thead>
            			<tbody>
            			<?php if ($jadwal_tes): ?>
            					<?php foreach ($jadwal_tes as $tes): ?>
            						<tr>
								        <td><?=$tes->nama_tes?></td>
								        <td><?=$tes->tgl_tes?></td>
								       <td><?=$tes->mulai?> <strong>s/d </strong><?=$tes->sampai?> </td>
								        <td><?=$tes->ket?></td>
								    </tr>
								<?php endforeach; ?>
						<?php else: ?>
							<tr>
								<td colspan="4">Tidak Ada Tes</td>
							</tr>
						<?php endif; ?>
            				
            			</tbody>
					</table>
            	</div>	
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
  <script src="<?php echo base_url();?>assets/landing/js/google-map.js"></script>
  <script src="<?php echo base_url();?>assets/landing/js/main.js"></script>
    
  </body>
</html>