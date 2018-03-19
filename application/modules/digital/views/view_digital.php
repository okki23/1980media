<!DOCTYPE html>
<html lang="en">
<head>
  <title>1980 Media</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/style.css'); ?>">
  <link href="https://fonts.googleapis.com/css?family=Lato|Merriweather|Montserrat|Open+Sans|Roboto+Condensed" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>

<body id="digital">
  <!-- Navbar -->
  <?php echo $this->load->view('header'); ?>
	<header class="jumbotron">
	   <img src="<?php echo base_url(); ?>images/digital.jpg" />
	</header>

  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-1 col-sm-1"></div>
        <div class="col-md-10 col-sm-10">
          <div class="title">
            <h3 class="title"><u>Digital Advertising</u></h3>
          </div>
          <br />
          <p>Tingkatkan ROI dari anggaran pemasaran anda.!</p>
          <p>kami selangkah lebih maju dari semua tren pemasaran online terdepan & terbaru. menciptakan kampanye iklan digital yang dinamis dan dipesan lebih dahulu serta difokuskan pada target objective perusahaan Anda dan memberikan laba atas investasi yang substansial.</p>
        </div>
        <div class="col-md-1 col-sm-1"></div>
      </div>
      <div class="row">
        <div class="col-md-1 col-sm-1"></div>
        <div class="col-md-10 col-sm-10">
            <div class="service left-icon">
              <div class="icon"><i class="glyphicon glyphicon-ok"></i></div>
              <div class="text">
                <p>Meningkatkan prospek & penjualan melalui online campaign berbasis kinerja</p>
              </div>
            </div>
            <div class="service left-icon">
              <div class="icon"><i class="glyphicon glyphicon-ok"></i></div>
              <div class="text">
                <p>Kekuatan akses penargetan ulang yang unik (Remarketing)</p>
              </div>
            </div>
            <div class="service left-icon">
              <div class="icon"><i class="glyphicon glyphicon-ok"></i></div>
              <div class="text">
                <p>Langsung focus kepada target pasar Anda untuk penjualan dimasa depan</p>
              </div>
            </div>
            <div class="service left-icon">
              <div class="icon"><i class="glyphicon glyphicon-ok"></i></div>
              <div class="text">
                <p>Meningkatkan Merek/Brand secara efektif di Internet</p>
              </div>
            </div>
        </div>
        <div class="col-md-1 col-sm-1"></div>
      </div>
    </div>
  </div>



  <div id="form" class="container-fluid bg-center bg-grey">
        <div class="container">
          <div class="row">
		  <h3 class="title"><u>Form Permintaan</u></h3>
            <div class="col-lg-12">
                



              <br />
              <form id="contactForm" name="sentMessage" novalidate>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input class="form-control" id="name" type="text" placeholder="Nama Anda" required data-validation-required-message="Please enter your name.">
                      <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                      <input class="form-control" id="email" type="email" placeholder="Email" required data-validation-required-message="Please enter your email address.">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input class="form-control" id="phone" placeholder="Phone" required data-validation-required-message="Please enter a message.">
                      <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                      <input class="form-control" id="web" placeholder="http://" required data-validation-required-message="Please enter a message.">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <textarea class="form-control" id="pesan" placeholder="Pesan Anda" required data-validation-required-message="Please enter a message."></textarea>
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-lg-12">

                    <button class="btn btn-default pull-left" type="submit">Kirim</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
  </div>
  <?php echo $this->load->view('footer'); ?>
</body>
</html>
