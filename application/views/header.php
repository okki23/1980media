<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<img src="<?php echo base_url(); ?>images/logo.png" class="logo navbar-brand">
			</div>
			<div class="collapse navbar-collapse" id="MyNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url(); ?>">HOME</a></li>
					<li><a href="<?php echo base_url('about'); ?>">ABOUT</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" >SERVICES<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url('services'); ?>">All Services</a></li>
							<li><a href="<?php echo base_url('seo'); ?>">SEO & SEM</a></li>
							<li><a href="<?php echo base_url('digital'); ?>">Digital Advertising</a></li>
							<li><a href="<?php echo base_url('marketing'); ?>">Social Media Marketing</a></li>
							<li><a href="<?php echo base_url('analytic'); ?>">Analytic</a></li>
							<li><a href="<?php echo base_url('graphic'); ?>">Graphic Design</a></li>
							<li><a href="javascript:void(0);">Web Dev. & Mobile Apps.</a></li>
						</ul>

					</li>
					<li><a href="<?php echo base_url('news_update'); ?>">NEWS & EVENTS</a></li>
					<li><a href="<?php echo base_url('contact'); ?>">CONTACT</a></li>
					<li><a href="<?php echo base_url('login'); ?>">LOGIN</a></li>
				</ul>
			</div>
		</div>
</nav>
