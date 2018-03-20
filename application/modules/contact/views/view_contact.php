<!DOCTYPE html>
<html lang="en">
<head>
  <title>1980media | Online Performance Marketing Agency</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/style.css'); ?>">
  <link href="https://fonts.googleapis.com/css?family=Lato|Merriweather|Montserrat|Open+Sans|Roboto+Condensed" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <link rel="icon" href="<?php echo base_url(); ?>images/logo1980.png" type="image/png" sizes="16x16">
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

  <style>
  .main
	{
		border:1px solid #000;
		width:100%;
		height:500px;
		background-color:#034900;
		position:relative;
		z-index:0;
    margin: 0px;
    padding:0;
	}
	.main p{
		color:white;
		font-size:150px;
	}

	.maps
	{
		width:100%;
		margin:0%;

		padding:0px;
		position:relative;
		z-index:0;
	}
	
	@media(max-width:768px){
		body{
			overflow-x:hidden;
		}
	}
  </style>

 </head>
<body>
<?php echo $this->load->view('header'); ?>
	<header>
		<img src="<?php echo base_url(); ?>images/contact1.jpg">
	</header>
	
	<div class="container-fluid maps">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.443426318679!2d106.7789503143133!3d-6.205090995507988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6db3dac5da3%3A0xe876541c9ae59eb2!2sJl.+Salam+Raya+Blok+Ilyas+No.65%2C+Sukabumi+Utara%2C+Kb.+Jeruk%2C+Kota+Jakarta+Barat%2C+Daerah+Khusus+Ibukota+Jakarta+11540!5e0!3m2!1sen!2sid!4v1518455013148" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="col-sm-6" style="">
			<form id="contactForm" name="sentMessage" action="<?php echo base_url('list_contact/save'); ?>" method="POST">
              <input type="hidden" class="form-control"  name="source" type="text" value="contact">
					<div class="form-group">
					  <input type="text" class="form-control" id="nama" placeholder="Nama Anda" name="nama">
					</div>
					<div class="form-group">
					  <input type="text" class="form-control" id="email" placeholder="Email anda" name="email">
					</div>
					<div class="form-group">
					  <input type="text" class="form-control" id="phone" placeholder="No. HP Anda" name="no_telp">
					</div>
					<div class="form-group">
					  <textarea class="form-control" name="pesan" id="pesan" placeholder="Pesan Anda..." style="width:100%;" rows="5"></textarea>
					</div>
					<button type="submit" class="btn btn-default pull-left">Kirim</button>
				  </form>
			</div>
		</div>
	</div>
  <?php echo $this->load->view('footer'); ?>
</body>
