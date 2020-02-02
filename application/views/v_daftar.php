<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Formulir Pendaftaran</title>
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

    <!-- form -->
    <link rel="stylesheet" href="<?= base_url('assets/css/datepicker/bootstrap-datepicker3.css')  ?>"/>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/jasny-bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/scrolling-nav.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css') ?>">

    <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/jasny-bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.easing.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/scrolling-nav.js') ?>"></script>
    <script src="<?=base_url('assets/plugins/newsticker/jquery.bootstrap.newsbox.min.js') ?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/datepicker/bootstrap-datepicker.min.js')  ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/datepicker/bootstrap-datepicker.id.min.js')  ?>" charset="UTF-8"></script>
	 <script src="<?= base_url('assets/js/wow.min.js')  ?>"></script>
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
              <li class="nav-item"><a href="<?=base_url();?>home/jadwal" class="nav-link">Jadwal Tes</a></li>
	          <li class="nav-item active"><a href="<?=base_url();?>home/formulir" class="nav-link">Formulir Pendaftaran</a></li>
              <li class="nav-item"><a href="#" class="nav-link"></a></li>
	          <li class="nav-item cta mr-md-2"><a href="<?=base_url();?>home/formulir" class="nav-link">Daftar</a></li>
	          <li class="nav-item cta mr-md-2"><a href="<?php echo base_url();?>administrator" class="nav-link">Login</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    

    <section id="services" class="services-section ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="700ms">
				<h1>Formulir Pendaftaran</h1>
                	<?php if ($cek_reg === 'Ditutup'): ?>

					      <div class="alert alert-danger">
			                <h3><i class="icon fa fa-4x fa-warning"></i><br><strong>Maaf, Pendaftaran Belum Dibuka atau Sudah Ditutup!</strong></h3>
			                <h2>Come Back Soon !<i class="fa fa-fw fa-frown-o"></i> </h2>
			              </div>

					<?php else: ?>
					<hr>
					<p>&nbsp;</p>
					<?=form_open_multipart('home/daftar','class="form-horizontal"') ?>
						<div class="form-group">
							<label class="col-sm-2 control-label">NISN</label>
							<div class="col-sm-6">
								<input type="text" name="nisn" class="form-control" placeholder="NISN" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Nama Lengkap</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
							</div>
						</div>
						<div class="form-group">
							
							<label class="col-sm-2 control-label">Agama</label>
							<div class="col-sm-2">
								<select class="form-control" name="agama" required>
									<option>Islam</option>
									<option>Kristen</option>
									<option>Katolik</option>
									<option>Hindu</option>
									<option>Budha</option>
								</select>
							</div>
							<label class="col-sm-2 control-label">Jenis Kelamin</label>
							<div class="col-sm-4" style="text-align:left">
								<div class="radio" required>
									<label>
										<input type="radio" name="jenisKelamin" value="L" checked>
										Laki-laki
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="jenisKelamin" value="P">
										Perempuan
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Tanggal Lahir</label>
							<div class="col-sm-2">
								<input type="" class="form-control date-picker" name="tgl_lahir" placeholder="yyyy-mm-dd" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Alamat Domisili</label>
							<div class="col-sm-6">
								<textarea name="alamat" class="form-control" placeholder="Alamat Domisili" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Telp/Hp</label>
							<div class="col-sm-4">
								<input type="" name="hp" class="form-control" placeholder="Telepon/Hp" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">E-Mail</label>
							<div class="col-sm-4">
								<input type="email" name="email" class="form-control" placeholder="E-Mail">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Asal Sekolah</label>
							<div class="col-sm-3">
								<input type="text" name="sekolah" class="form-control" placeholder="contoh : SMAN 1 JAKARTA" required>
							</div>
							<label class="col-sm-1 control-label">Kab/Kota</label>
							<div class="col-sm-2">
								<input type="text" name="kota_sekolah" class="form-control" placeholder="contoh : JAKARTA" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Nilai UNAS</label>
							<div class="col-sm-2">
								<input type="nilai" name="nilai_un" class="form-control" data-mask="99.99" placeholder="00.00" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Pilihan Prodi</label>
							<div class="col-sm-10" style="text-align:left">
								<?php foreach ($prodi as $prodi): ?>
								<div class="radio">
									<label>
										<input type="radio" name="prodi" value="<?=$prodi->kode_prodi ?>" required>
										<?=$prodi->jenjang ?> <?=$prodi->nama_prodi ?>
									</label>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Foto</label>
							<div class="col-sm-10" style="text-align:left">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 150px; height: 200px;"></div>
									<div>
										<span class="btn btn-default btn-file">
											<span class="fileinput-new">Pilih gambar</span>
											<span class="fileinput-exists">Ganti</span>
											<input type="file" name="userfile" required>
										</span>
										<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Hapus</a>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group" style="text-align:left">
							<div class="col-sm-offset-2 col-sm-10">
								<hr>
								<button type="submit" class="btn btn-primary">Daftar !</button>
								<button type="reset" class="btn btn-danger">Batal !</button>
							</div>
						</div>
					<?=form_close();     ?>

					<?php endif; ?>

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
  <script type="text/javascript">
   $(".date-picker").datepicker( {
          format: " yyyy-mm-dd",
          autoclose: true
     		 });
  </script>
  </body>
</html>