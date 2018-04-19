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

<style>

.carousel-control.left, .carousel-control.right {
	background-image:none;
}
@media(max-width:768px){
  header .img1{
  display: none;
	}
	header .img2{
		max-width:768px;
	}
}
@media(min-width:768px){
	header .img1{
		min-width:1200px;
	}
	header .img2{
		display:none;
	}
}
@media (min-width: 992px ) {
  	.carousel-inner .active.left {
  		left: -25%;
  }
  .carousel-inner .next {
  		left:  25%;
  }
  .carousel-inner .prev {
  		left: -25%;
  	}
}

@media (min-width: 768px) and (max-width: 991px ) {
  .carousel-inner .active.left {
		left: -7.69
	.carousel-inner .next {
		left:  7.69%;
	}
	.carousel-inner .prev {
		left: -7.69%;
	}
	.active > div:first-child {
		display:block;
	}
	.active > div:first-child + div {
		display:block;
	}
	.active > div:last-child {
		display:none;
	}

}

@media (max-width: 767px) {

	.carousel-inner .active.left {
		left: -100%;
	}
	.carousel-inner .next {
		left:  100%;
	}
	.carousel-inner .prev {
		left: -100%;
	}
	.active > div {
		display:none;
	}
	.active > div:first-child {
		display:block;
	}
}
</style>
</head>
<body>
	 
	<?php echo $this->load->view('header'); ?>
	   <header>
			<img src="<?php echo base_url('uploads/'.$content->header_image); ?>" class="row-fluid img1">
			<!-- <img src="<?php echo base_url('images/main-crop.jpg'); ?>" class="row-fluid img2">
		 -->
		  <form class="kons_box" method="POST" action="<?php echo base_url('consultant/save'); ?>">
      <h4>
        Gratis Konsultasi
      </h4>
      Mulailah promosi menggunakan digital marketing dengan 1980media.com<br>
      <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <div class="input-group">
            <div class="input-group-addon">
              <span class="glyphicon glyphicon-user"></span>
            </div>
            <input class="form-control" id="nama_lengkap" name="nama" type="text"/>
        </div>
      </div>
      <div class="form-group">
        <label for="email">Alamat Email</label>
        <div class="input-group">
            <div class="input-group-addon">@</div>
            <input class="form-control" id="alamat_email" name="email" type="text"/>
        </div>
      </div>
      <div class="form-group">
        <label for="nomer_hp">Nomer Handphone</label>
        <div class="input-group">
            <div class="input-group-addon">
              <span class="glyphicon glyphicon-phone"></span>
            </div>
            <input class="form-control" id="nomer_hp" name="no_telp" type="text"/>
        </div>
      </div>
      
      <button type="submit" name="submit" value="simpan" class="pull-left">Kirim</button>
    </form>
  </header>
	<div class="container-fluid text-center middle">
		<div class="row">
      <h3 class="title"><u><?php echo $content->first_title; ?></u></h3>
      <div class="col-sm-1 col-md-1">
      </div>
      <div class="col-sm-3 col-md-3">
				<img src="<?php echo base_url('uploads/'.$content->service_picture_a); ?> " id="icon">
				<h4><a href="<?php echo base_url($content->url_service_a); ?>"> <?php echo $content->service_title_a; ?> </a></h4>
				<p><?php echo $content->service_desc_a; ?>.</p>
			</div>
			<div class="col-sm-4 col-md-4">
			<img src="<?php echo base_url('uploads/'.$content->service_picture_b); ?> " id="icon">
				<h4><a href="<?php echo base_url($content->url_service_b); ?>"> <?php echo $content->service_title_b; ?> </a></h4>
				<p><?php echo $content->service_desc_b; ?>.</p>
			</div>
			<div class="col-sm-3 col-md-3">
			<img src="<?php echo base_url('uploads/'.$content->service_picture_c); ?> " id="icon">
				<h4><a href="<?php echo base_url($content->url_service_c); ?>"> <?php echo $content->service_title_c; ?> </a></h4>
				<p><?php echo $content->service_desc_c; ?>.</p>
			</div>
      <div class="col-sm-1 col-md-1"></div>
		</div>

		<div class="row">
      <div class="col-sm-1 col-md-1"></div>
			<div class="col-sm-3 col-md-3">
				<img src="<?php echo base_url('uploads/'.$content->service_picture_d); ?> " id="icon">
				<h4><a href="<?php echo base_url($content->url_service_d); ?>"> <?php echo $content->service_title_d; ?> </a></h4>
				<p><?php echo $content->service_desc_d; ?>.</p>
			</div>
			<div class="col-sm-4 col-md-4">
			<img src="<?php echo base_url('uploads/'.$content->service_picture_e); ?> " id="icon">
				<h4><a href="<?php echo base_url($content->url_service_e); ?>"> <?php echo $content->service_title_e; ?> </a></h4>
				<p><?php echo $content->service_desc_e; ?>.</p>
			</div>
			<div class="col-sm-3 col-md-3">
			<img src="<?php echo base_url('uploads/'.$content->service_picture_f); ?> " id="icon">
				<h4><a href="<?php echo base_url($content->url_service_f); ?>"> <?php echo $content->service_title_f; ?> </a></h4>
				<p><?php echo $content->service_desc_f; ?>.</p>
			</div>
      <div class="col-sm-1 col-md-1"></div>
		</div>
	</div>

	<div class="container bottom">
  <div class="row">
    <div class="col-md-8">

		  <div class="row">
        <h3 class="title"><u><?php echo $content->second_title; ?></u></h3>

          <div class="col-xs-12 col-sm-6">
    						<div class="media-left media-top">
    								<img src="<?php echo base_url('uploads/'.$content->advg_picture_a); ?>" class="small-icon">
    						</div>
    						<div class="media-body">
    							<h4 class="media-heading"><?php echo $content->advg_title_a; ?></h4>
    							<p><?php echo $content->advg_desc_a; ?>.</p>
    					  </div>
          </div>

				<div class="col-xs-12 col-sm-6">
    						<div class="media-left media-top">
    								<img src="<?php echo base_url('uploads/'.$content->advg_picture_b); ?>" class="small-icon">
    						</div>
    						<div class="media-body">
    							<h4 class="media-heading"><?php echo $content->advg_title_b; ?></h4>
    							<p><?php echo $content->advg_desc_b; ?>.</p>
    					  </div>
          </div>
      </div>
      <div class="row">
			<div class="col-xs-12 col-sm-6">
    						<div class="media-left media-top">
    								<img src="<?php echo base_url('uploads/'.$content->advg_picture_c); ?>" class="small-icon">
    						</div>
    						<div class="media-body">
    							<h4 class="media-heading"><?php echo $content->advg_title_c; ?></h4>
    							<p><?php echo $content->advg_desc_c; ?>.</p>
    					  </div>
          </div>
					<div class="col-xs-12 col-sm-6">
    						<div class="media-left media-top">
    								<img src="<?php echo base_url('uploads/'.$content->advg_picture_d); ?>" class="small-icon">
    						</div>
    						<div class="media-body">
    							<h4 class="media-heading"><?php echo $content->advg_title_d; ?></h4>
    							<p><?php echo $content->advg_desc_d; ?>.</p>
    					  </div>
          </div>
      </div>
      <div class="row">
			<div class="col-xs-12 col-sm-6">
    						<div class="media-left media-top">
    								<img src="<?php echo base_url('uploads/'.$content->advg_picture_e); ?>" class="small-icon">
    						</div>
    						<div class="media-body">
    							<h4 class="media-heading"><?php echo $content->advg_title_e; ?></h4>
    							<p><?php echo $content->advg_desc_e; ?>.</p>
    					  </div>
          </div>
					<div class="col-xs-12 col-sm-6">
    						<div class="media-left media-top">
    								<img src="<?php echo base_url('uploads/'.$content->advg_picture_f); ?>" class="small-icon">
    						</div>
    						<div class="media-body">
    							<h4 class="media-heading"><?php echo $content->advg_title_f; ?></h4>
    							<p><?php echo $content->advg_desc_f; ?>.</p>
    					  </div>
          </div>

    </div>
 
   
</div>
<div class="col-md-4">
  				<div class="embed-responsive embed-responsive-4by3">
  					<iframe width="560" height="315" src="<?php echo $content->link_video_youtube; ?>" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
  				</div>
  	</div>

	

		<div class="container-fluid">
    <div class="row"><div class="col-md-12">
		<br>
	 	<hr>
		 
		
		<iframe src="<?php echo $content->link_embed_map; ?>" frameborder="0" style="border:0;width:100%;height:450px;" allowfullscreen></iframe>
   
  </div>
	</div>
	</div>
	
</div>
</div>



	<div class="container-fluid">
		<div class="container text-center">
      <h3 class="title"><u>Klien Kami</u></h3>
			<div class="carousel slide row" data-ride="carousel" data-type="multi" data-interval="2000" id="fruitscarousel">
				<div class="carousel-inner">

				<?php
					foreach($client as $k => $v){

						if($v->id == 2){
							echo '
							<div class="item active">
							<div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="uploads/'.$v->logo.'" class="img-responsive"></a></div>
							</div>';
						}else{
							echo '
							<div class="item">
							<div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="uploads/'.$v->logo.'" class="img-responsive"></a></div>
							</div>';
						}
					
					}
				?>
			 
				</div>
        <a class="left carousel-control" href="#fruitscarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#fruitscarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>

			</div>
		</div>
	</div>

  <div class="container-fluid bg-grey">
  		<div class="row">
        <h3 class="title"><u>Berlangganan Artikel</u></h3>
        <div class="col-sm-3"></div>
  			<div class="col-sm-5 col-md-5">
          <p align="center">Silahkan masukkan email anda untuk berlangganan artikel kami.</p>

  				<form action="<?php echo base_url('email_subscriber/save'); ?>" method="POST">
  					<div class="form-group">
  					  <input type="text" class="form-control" id="nama_akun" placeholder="Nama anda" name="nama_akun">
  					</div>
            <div class="form-group">
  					  <input type="email" class="form-control" id="nama_email" placeholder="Email anda" name="nama_email">
						</div>
						<div align="center">
						<button type="submit" class="btn btn-primary btn-large"> <i class="fa fa-rss"></i> Berlangganan</button>
		</div>
  				</form>
  			</div>
         
  		</div>
			</div>
			</div>
 

<?php echo $this->load->view($footer); ?>
  <script>
  jQuery(document).ready(function() {
	   jQuery('.carousel[data-type="multi"] .item').each(function(){
		     var next = jQuery(this).next();
		     if (!next.length) {
			           next = jQuery(this).siblings(':first');
		        }
		          next.children(':first-child').clone().appendTo(jQuery(this));
              for (var i=0;i<2;i++) {
			             next=next.next();
        			if (!next.length) {
        				next = jQuery(this).siblings(':first');
        			}
			        next.children(':first-child').clone().appendTo($(this));
		       }
	     });
     });
</script>
</body>
</html>
