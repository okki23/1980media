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
  <style>
  section {
    padding-top: 60px;
    padding-bottom: 60px;
}
section:last-child {
	padding-bottom: 0px;
}
  /*- blog post -*/
.blog-post {
    float:left;
	padding-bottom: 30px;
	margin-bottom: 60px;
	border-bottom: 1px solid #CECECE;
}
.blog-post:last-child {
	border-bottom: none;
}
.blog-post .blog-post-body {
    
	text-align: center;
	padding: 20px 0;
}
.blog-post .blog-post-body h2 {
	margin: 0;
	padding: 15px 0px 20px;
	font-size: 41px;
	line-height: 49px;
}
.blog-post .blog-post-body p {
 
	text-align: justify;
	font-size: 20px;
	font-weight: 300;
	line-height: 30px;
	color: #000;
}
.blog-post .blog-post-body a {
	color: #4A4A4A;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	transition: all 0.2s ease-out;
}
.blog-post .blog-post-body a:hover  {
	color: #dddddd;
}
.blog-post .post-meta {
	margin: 5px 0 20px;
	font-weight: 400;
	font-size: 16px;
	color: #B1B1B1;
	font-family: "Lora";
	font-style: italic;
}
.blog-post .post-meta a {
	color: #B1B1B1;
}
.blog-post .post-meta a:hover {
	color: #fed136;
}
.blog-post .post-meta span {
	padding-left: 15px;
	padding-right: 15px;
}
.blog-post .post-meta span:first-child {
	padding-left: 0;
	padding-right: 15px;
}
.blog-post .post-meta i {
	padding-right: 5px;
	font-size: 12px;
}
.blog-post .read-more a {
	display: inline-block;
	padding: 12px 40px;
	margin: 30px 0 0px;
	border: 1px solid;
	border-radius: 25px;
	border-color: #E6E6E6;
	background-color: #F3F3F3;
	font-family: "Open Sans", Sans-serif;
	text-transform: uppercase;
	font-weight: 600;
	font-size: 12px;
	letter-spacing: 1.7px;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	transition: all 0.2s ease-out;
}
.blog-post .read-more a:hover {
	background-color: #fed136;
	border-color: #fed136;
	color: #fff;
}
.blog-post .blog-post-text {
	text-align: left;
}
.blog-post .blog-post-text p {
	text-align: justify;
	font-size: 17px;
	font-weight: 400;
	line-height: 28px;
	color: #000;
	letter-spacing: 0.1px;
	margin-bottom: 30px;
}

.sidebar-widget {
	margin-bottom: 40px;	
}
.sidebar-widget li {
	font-size: 17px;
	margin-bottom: 10px;
}
.widget-socials {
	text-align: center;
}
.widget-socials a {
	margin: 3px 8px;
	padding: 5px;
	font-size: 17px;
	color: #3C3C3C;
}
.widget-about img {
	width: 100%;
}
.widget-about h4 {
	text-align: center;
	margin: 20px 0 5px;
}
.widget-about .author-title {
	font-size: 13px;
	font-weight: 400;
	line-height: 20px;
	color: #B5B5B5;
	text-align: center;
}
.widget-about p {
	margin-top: 10px;
	font-size: 17px;
	line-height: 24px;
	color: #000000;
}
.widget-post {
	display: table;
	margin: 0 0 20px 0;
	border-bottom: 1px solid;
	border-color: #E4E4E4;
	padding-bottom: 20px;
	width: 100%;
}
.widget-post:last-child {
	border-bottom: none;
	padding-bottom: 0px;
	margin: 0px;
}
.widget-post .post-image {
	float: left;
	width: 90px;
	vertical-align: middle;
	position: relative;
	margin-right: 20px;
}
.widget-review .post-image {
	width: 70px;
	margin-right: 15px;
}
.widget-post .post-body {
	overflow: hidden;
}
.widget-post h2 {
	margin: 0;
	font-size: 14px;
	font-weight: 500;
	line-height: 20px;
}
.widget-post h2 a {
	color: #4A4A4A;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	transition: all 0.2s ease-out;
}
.widget-post h2 a:hover {
	color: #969696;
}
.widget-post .post-meta {
	margin-top: 5px;
	font-weight: 400;
	font-size: 11px;
	color: #000;
 
}
.widget-post .post-meta span {
	margin-right: 8px;
}
.widget-post .post-meta span a {
	color: #B1B1B1;
}
  .sidebar-gutter {
	padding-left: 50px;
}

.sidebar-title {
	background-color: #2B2B2B;
	color: #fff;
	text-align: center;
	text-transform: uppercase;
	font-weight: 800;
	letter-spacing: 0.8px;
	font-size: 14px;
	padding: 15px 0;
	margin: 0 0 25px;
	font-family: "Raleway", Sans-serif;
}
.sidebar-widget {
	margin-bottom: 40px;	
}
.sidebar-widget li {
	font-size: 17px;
	margin-bottom: 10px;
}
  .blog-post {
	padding-bottom: 30px;
	margin-bottom: 60px;
	border-bottom: 1px solid #CECECE;
}
.blog-post:last-child {
	border-bottom: none;
}
.blog-post .blog-post-body {
	text-align: center;
	padding: 20px 0;
}
.blog-post .blog-post-body h2 {
	margin: 0;
	padding: 15px 0px 20px;
	font-size: 41px;
	line-height: 49px;
}
.blog-post .blog-post-body p {
	text-align: justify;
	font-size: 20px;
	font-weight: 300;
	line-height: 30px;
	color: #000;
}
.blog-post .blog-post-body a {
	color: #4A4A4A;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	transition: all 0.2s ease-out;
}
.blog-post .blog-post-body a:hover  {
	color: #dddddd;
}
.blog-post .post-meta {
	margin: 5px 0 20px;
	font-weight: 400;
	font-size: 16px;
	color: #B1B1B1;
	font-family: "Lora";
	font-style: italic;
}
.blog-post .post-meta a {
	color: #B1B1B1;
}
.blog-post .post-meta a:hover {
	color: #fed136;
}
.blog-post .post-meta span {
	padding-left: 15px;
	padding-right: 15px;
}
.blog-post .post-meta span:first-child {
	padding-left: 0;
	padding-right: 15px;
}
.blog-post .post-meta i {
	padding-right: 5px;
	font-size: 12px;
}
.blog-post .read-more a {
	display: inline-block;
	padding: 12px 40px;
	margin: 30px 0 0px;
	border: 1px solid;
	border-radius: 25px;
	border-color: #E6E6E6;
	background-color: #F3F3F3;
	font-family: "Open Sans", Sans-serif;
	text-transform: uppercase;
	font-weight: 600;
	font-size: 12px;
	letter-spacing: 1.7px;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	transition: all 0.2s ease-out;
}
.blog-post .read-more a:hover {
	background-color: #fed136;
	border-color: #fed136;
	color: #fff;
}
.blog-post .blog-post-text {
	text-align: left;
}
.blog-post .blog-post-text p {
	text-align: justify;
	font-size: 17px;
	font-weight: 400;
	line-height: 28px;
	color: #000;
	letter-spacing: 0.1px;
	margin-bottom: 30px;
}
  </style>
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
	<header>
   <img src="<?php echo base_url('uploads/'.$list_head->header_image); ?>" class="row-fluid img1">
		 
	</header>
	<div class="container">
 

                <section>
                <div class="row">
				<div class="col-md-8">
                   <?php
						  
							 echo '	<article class="blog-post">
							 <div class="blog-post-image" align="center">
								 <a href="'.base_url('news_update/detail_news/').$content->id.'"><img src="'.base_url('uploads/'.$content->picture_news).'" alt="" style="width:750px; height:500px;"></a>
							 </div>
							 <div class="blog-post-body">
								 <h2><a href="'.base_url('news_update/detail_news/').$content->id.'">'.$content->title_news.'</a></h2>
								 <div class="post-meta"><span> Diposkan Oleh  '.$content->user_update_news.' </span> Pada<span><i class="fa fa-clock-o"></i> '.tanggalan($content->update_news).'</span>  </div>
								 <p>'.$content->desc_news.' </p>
								 
							 </div>
						 </article>
						 ';
					 
					?>
               
 
                   
					 
				</div>
				<div class="col-md-4 sidebar-gutter">
					<aside>
					<!-- sidebar-widget -->
				 
					<!-- sidebar-widget -->
					<div class="sidebar-widget">
						<h3 class="sidebar-title">Recent Posts</h3>
						<div class="widget-container">

							 <?php
								foreach($list_recent as $ky => $vs){
									echo '<article class="widget-post">
									<div class="post-image">
										<a href="'.base_url('news_update/detail_news/').$vs->id.'"><img src="'.base_url('uploads/'.$vs->picture_news).'" alt="" style="width:100px; height:75px;"></a>
									</div>
									<div class="post-body">
										<h2><a href="'.base_url('news_update/detail_news/').$vs->id.'">'.$vs->title_news.'</a></h2>
										<div class="post-meta">
										<i class="icon-calendar"></i> '.tanggalan($vs->update_news).'
										</div>
									</div>
								</article>';
								}
							 ?>
							
 
						</div>
					</div>
		 

					</div>
					</aside>
				</div>

                </section>
			</div>

        
      <!---list artikel end-->
      <!--sidebar start-->
      
      
        <!--sidebar end-->
    </div>
    </div>
    <?php echo $this->load->view('footer'); ?>
</body>
</html>
