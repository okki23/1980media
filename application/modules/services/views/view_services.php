<!DOCTYPE html>
<html lang="en">
<head>
  <title>1980media | Online Performance Marketing Agency</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/style.css'); ?>">
 
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

</head>
<body>

<?php echo $this->load->view('header'); ?>
	<header class="jumbotron">
	<img src="<?php echo base_url('uploads/'.$content->header_image); ?>" class="row-fluid img1">
 
	</header>
	<div class="container-fluid service">
		<div class="row">
		 
			<div class="col-md-5">
				<div class="grey-icon-left">
					<p><a href="<?php echo base_url($content->url_logo_a); ?>"><?php echo $content->caption_logo_a; ?></a></p>
					<img src="<?php echo base_url('uploads/'.$content->logo_a); ?>">
				 
				</div>
				<div class="grey-icon-left">
					<p><a href="<?php echo base_url($content->url_logo_b); ?>"><?php echo $content->caption_logo_b; ?></a></p>
					<img src="<?php echo base_url('uploads/'.$content->logo_b); ?>">
				 
				</div>
				<div class="grey-icon-left">
					<p><a href="<?php echo base_url($content->url_logo_c); ?>"><?php echo $content->caption_logo_c; ?></a></p>
					<img src="<?php echo base_url('uploads/'.$content->logo_c); ?>">
				 
				</div>
		</div>
		<div class="col-md-2 text-center">
		<img src="<?php echo base_url('uploads/'.$content->logo_g); ?>">
		</div>
		<div class="col-md-5">
		<div class="grey-icon-right">
				<div class="grey-icon-right">
				<img src="<?php echo base_url('uploads/'.$content->logo_d); ?>">
							<p><a href="<?php echo base_url($content->url_logo_c); ?>"><?php echo $content->caption_logo_d; ?></a></p>
				</div>
				<div class="grey-icon-right">
				<img src="<?php echo base_url('uploads/'.$content->logo_e); ?>">
							<p><a href="<?php echo base_url($content->url_logo_e); ?>"><?php echo $content->caption_logo_e; ?></a></p>
				</div>
				<div class="grey-icon-right">
				<img src="<?php echo base_url('uploads/'.$content->logo_f); ?>">
							<p><a href="<?php echo base_url($content->url_logo_f); ?>"><?php echo $content->caption_logo_f; ?></a></p>
				</div>
		</div>
	</div>
</div>
</div>

<?php echo $this->load->view('footer'); ?>
</body>
</html>
