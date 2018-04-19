<!DOCTYPE html>
<html lang="en">
<head>
  <title>1980media | Online Performance Marketing Agency</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/style.css');?> ">
  <link href="https://fonts.googleapis.com/css?family=Lato|Merriweather|Montserrat|Open+Sans|Roboto+Condensed" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="icon" href="<?php  echo base_url(); ?>images/logo1980.png" type="image/png" sizes="16x16">
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
		<img src="<?php echo base_url('uploads/'.$content->header_image); ?>" class="row-fluid img1">
	</header>
	<div class="container-fluid">
		<h3 class="title"><u> <?php echo $content->first_title; ?> </u></h3>
		<br>
    <div class="row">
      <div class="col-sm-1 col-md-1"></div>
      <div class="col-sm-10">
		  
		  <p align="justify">
      <?php echo $content->first_desc; ?>
		  </p>
      </div>
    </div>
    <div class="col-sm-1 col-md-1"></div>
	</div>

	<div class="container-fluid text-center middle">
		<div class="row">
      <div class="col-sm-2 col-md-2"></div>
      <div class="col-sm-2 col-md-2"> <img src="<?php echo base_url('uploads/'.$content->pict_a); ?>"><h5> <?php echo $content->desc_a; ?> </h5></div>
			<div class="col-sm-2 col-md-2"> <img src="<?php echo base_url('uploads/'.$content->pict_b); ?>"><h5> <?php echo $content->desc_b; ?> </h5></div>
			<div class="col-sm-2 col-md-2"> <img src="<?php echo base_url('uploads/'.$content->pict_c); ?>"><h5> <?php echo $content->desc_c; ?> </h5></div>
			<div class="col-sm-2 col-md-2"> <img src="<?php echo base_url('uploads/'.$content->pict_d); ?>"><h5> <?php echo $content->desc_d; ?> </h5></div>
      <div class="col-sm-2 col-md-2"></div>
		</div>
	</div>

  <div class="container-fluid">
		<h3 class="title"><u>  <?php echo $content->second_title; ?> </u></h3>
		<br>
    <div class="row">
      <div class="col-sm-1 col-md-1"></div>
      <div class="col-sm-10 col-md-10">
    		<p>
        <?php echo $content->second_desc; ?>
    		</p>
      </div>
      <div class="col-sm-1 col-md-1"></div>
    </div>
  </div>

<?php echo $this->load->view('footer'); ?>
</body>
</html>
