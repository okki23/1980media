<head>
	<style>
	footer div
	{
		text-align: left;
		padding:0;
	}
	footer li{
		list-style: none;
		margin: 0;
		padding: 0;
		clear:both;
	}
	.left
	{
		text-align:left;
	}
	.col-xs-11{
		padding: 0;
	}
	</style>
</head>

<footer class="container-fluid text-center">
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-4">
			 
				<h4><?php echo $list_footer->title_about; ?></h4>
			  <p>
			  <?php echo $list_footer->desc_about; ?>
			  </p>
		</div>
		<div class="col-md-3">

		</div>
		<div class="col-md-3">
				<h4> <?php echo $list_footer->title_address; ?></h4>
				<p><?php echo $list_footer->address; ?>
				</p>
			<a href="<?php echo $list_footer->fb_link; ?>" class="fa fa-facebook"></a>
		    <a href="<?php echo $list_footer->twitter_link; ?>" class="fa fa-twitter"></a>
		    <a href="<?php echo $list_footer->youtube_link; ?>" class="fa fa-youtube"></a>
		    <a href="<?php echo $list_footer->ig_link; ?>" class="fa fa-instagram"></a>
		</div>
		<div class="col-md-1">
		</div>
    </div>
    <section class="nb-copyright">
    		<div class="container-fluid">
    		<div class="row">
					<div class="col-md-1"></div>
	    		<div class="col-sm-10 col-md-10 text-left">
	    			2018 © 1980media All Rights Reserved
	    		</div>
					<div class="col-sm-1 col-md-1">
						<a href="#" onclick="toTop()" id="topBtn">
						<i class="fa fa-angle-double-up"></i>
					</a>
					<script>
						function toTop(){
							document.body.scrollTop = 0;
	 						document.documentElement.scrollTop = 0;
						}

					</script>
					</div>
    		</div>
    		</div>
		</section>
	</footer>
