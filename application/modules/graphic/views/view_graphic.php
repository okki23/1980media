<!DOCTYPE html>
<html lang="en">
<head>
  <title>1980media | Online Performance Marketing Agency</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/style.css'); ?>">
  <link href="https://fonts.googleapis.com/css?family=Lato|Merriweather|Montserrat|Open+Sans|Roboto+Condensed" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="icon" href="<?php echo base_url('images/logo1980.png'); ?>" type="image/png" sizes="16x16">
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a7c1a99d7591465c7077b9d/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</head>
<body>
<?php echo $this->load->view('header'); ?>
  <header class="jumbotron">
   <img src="<?php echo base_url(); ?>images/graphic.jpg" />
  </header>

  <div class="container-fluid">
      <div class="row">
        <h3 class="title"><u>Apa itu Graphic Design ?</u></h3>
        <div class="col-md-1 col-sm-1"></div>
        <div class="col-md-10 col-sm-10">
          <h4><strong>Increase Brand Image with Graphic Design</strong></h4>
          <br />
          <p>Branding Consultan untuk kebutuhan meningkatkan bisnis dan visibility Anda. Perlengkapi bisnis dengan berbagai kebutuhan design anda</p>
        </div>
        <div class="col-md-1 col-sm-1"></div>
      </div>
      <div class="row">
        <div class="col-md-1 col-sm-1"></div>
        <div class="col-md-10">
          <div class="service left-icon">
              <div class="icon"><i class="glyphicon glyphicon-ok"></i></div>
              <div class="text">
                <p>Creative & Professional Design</p>
              </div>
            </div>
          <div class="service left-icon">
              <div class="icon"><i class="glyphicon glyphicon-ok"></i></div>
              <div class="text">
                <p>Design Logo hingga Company Profile</p>
              </div>
            </div>
          <div class="service left-icon">
              <div class="icon"><i class="glyphicon glyphicon-ok"></i></div>
              <div class="text">
                <p>Dibuat untuk meningkatkan bisnis & penjualan</p>
              </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
  </div>



  <div id="form" class="container-fluid bg-center" style="background-color:#efefef;">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="title">
                <h3><u>Form Permintaan</u></h3>
              </div>
              <form id="contactForm" name="sentMessage" novalidate>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" id="name" type="text" placeholder="Nama Anda" required data-validation-required-message="Please enter your name.">
                      <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                      <input class="form-control" id="email" type="email" placeholder="Email" required data-validation-required-message="Please enter your email address.">
                      <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                      <input class="form-control" id="phone" placeholder="Phone" required data-validation-required-message="Please enter a message.">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <textarea class="form-control" id="pesan" rows = "6" placeholder="Pesan Anda" required data-validation-required-message="Please enter a message."></textarea>
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-lg-12">
                    <div id="success"></div>
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
