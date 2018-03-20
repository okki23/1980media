<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title><?php echo $title; ?></title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/css/jquery-ui.custom.min.css" />
		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url(); ?>assets/backend/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-fixed-top">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-home"></i>
							<?php echo $title; ?>
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
					 
					 
						 

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url(); ?>assets/backend/images/avatars/avatar2.png" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $username; ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							 
						 
								<li>
									<a href="<?php echo base_url(); ?>" target="_blank">
										<i class="ace-icon fa fa-desktop"></i>
										View Site
									</a>
								</li>

								<li>
									<a href="<?php echo base_url('login/logout'); ?>">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar sidebar-fixed responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

			 
				<ul class="nav nav-list">
					<li>
						<a href="<?php echo base_url('dashboard'); ?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li>
						<a href="javascript:void(0);" class="dropdown-toggle">
							<i class="menu-icon fa fa-cogs"></i>
							<span class="menu-text">
								Config
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
						 
							<li class="">
								<a href="<?php echo base_url('user'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									User Management
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="javascript:void(0);" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Email Config
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="<?php echo base_url('email_contact'); ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Email Contact
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?php echo base_url('email_permintaan'); ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Email Permintaan
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?php echo base_url('email_subscribe'); ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Email Subscribe
										</a>

										<b class="arrow"></b>
									</li>
 
								</ul>
							</li>


							<li class="">
								<a href="<?php echo base_url('footer'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Footer
								</a>

								<b class="arrow"></b>
							</li>

							 
						</ul>
					</li>


					<li>
						<a href="javascript:void(0);" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Home
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
						 
							<li class="">
								<a href="<?php echo base_url('homepage'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Homepage
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url('consultant'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									List Consultant
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url('list_client'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									List Client
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url('email_subscriber'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									List Email Subscriber
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url('list_contact'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									List Contact Us
								</a>

								<b class="arrow"></b>
							</li>

							 
						</ul>
					</li>
					<li>
						<a href="<?php echo base_url('page_about'); ?>">
							<i class="menu-icon fa fa-star"></i>
							<span class="menu-text"> About </span>
						</a>

						<b class="arrow"></b>
					</li>


					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-lightbulb-o"></i>
							<span class="menu-text">
								Services
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
						 
							<li class="">
								<a href="<?php echo base_url('services_page'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Content All Services
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url('page_seo'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Content SEO & SEM Services
								</a>

								<b class="arrow"></b>
							</li>


							<li class="">
								<a href="<?php echo base_url('digital_adv_page'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Digital Advertising
								</a>

								<b class="arrow"></b>
							</li>


							<li class="">
								<a href="<?php echo base_url('socmed_page'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Social Media Marketing
								</a>

								<b class="arrow"></b>
							</li>


							<li class="">
								<a href="<?php echo base_url('analytic_page'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Analytic
								</a>

								<b class="arrow"></b>
							</li>


							<li class="">
								<a href="<?php echo base_url('graphdesign_page'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Graphic Design
								</a>

								<b class="arrow"></b>
							</li>


							<li class="">
								<a href="<?php echo base_url('webdev_page'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Web Dev & Mobile Appps
								</a>

								<b class="arrow"></b>
							</li>


							<li class="">
								<a href="<?php echo base_url('list_request'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Request List
								</a>

								<b class="arrow"></b>
							</li>
							 
							 
						</ul>
					</li>



					<li>
						<a href="<?php echo base_url('news_event_page'); ?>">
							<i class="menu-icon fa fa-star"></i>
							<span class="menu-text"> News and Event </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li>
						<a href="<?php echo base_url('contact_us_page'); ?>">
							<i class="menu-icon fa fa-star"></i>
							<span class="menu-text"> Contact Us</span>
						</a>

						<b class="arrow"></b>
					</li>

					 
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
			<div class="main-content-inner">
					
				<?php echo $this->load->view($content); ?>
			</div><!-- /.main-content -->
			<div id="fixing"> 
					<div class="ace-settings-item">
										<input type="checkbox" checked="checked" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" checked="checked" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

					</div>
			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
						 
							1980 Media &copy; 2018
						</span>

						&nbsp; &nbsp;
					 
					</div>
				</div>
			</div>
 
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
</div>
		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo base_url(); ?>assets/backend/js/jquery-2.1.4.min.js"></script>
		

		<script src="<?php echo base_url(); ?>assets/backend/js/tinymce.min.js"> </script>
      
      	<script src="<?php echo base_url(); ?>assets/backend/plugins/elFinder/js/elfinder.min.js"></script>


		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url(); ?>assets/backend/js/bootstrap.min.js"></script>
 
						
		<!--datatable-->
		<script src="<?php echo base_url(); ?>assets/backend/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/js/jquery.dataTables.bootstrap.min.js"></script>
 

		<!--wysiwyg-->
		<script src="<?php echo base_url(); ?>assets/backend/js/jquery-ui.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/js/markdown.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/js/bootstrap-markdown.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/js/jquery.hotkeys.index.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/js/bootstrap-wysiwyg.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/js/bootbox.js"></script>
		

		<!-- ace scripts -->
		<script src="<?php echo base_url(); ?>assets/backend/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/js/ace.min.js"></script>

    <!-- inline scripts related to this page -->
   
    <script type="text/javascript">
	$("#fixing").hide();
	
    $("#logox").on("change",function(){
      var filename = $('#logox').val().replace(/C:\\fakepath\\/i, '');
      $("#logo").val(filename);
      readURL(this);
    });
	$(function($){
	
	$('textarea[data-provide="markdown"]').each(function(){
        var $this = $(this);

		if ($this.data('markdown')) {
		  $this.data('markdown').showEditor();
		}
		else $this.markdown()
		
		$this.parent().find('.btn').addClass('btn-white');
    })
	
	
	
	function showErrorAlert (reason, detail) {
		var msg='';
		if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
		else {
			//console.log("error uploading file", reason, detail);
		}
		$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
		 '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
	}

	//$('#editor1').ace_wysiwyg();//this will create the default editor will all buttons

	//but we want to change a few buttons colors for the third style
	$('#editor1').ace_wysiwyg({
		toolbar:
		[
			'font',
			null,
			'fontSize',
			null,
			{name:'bold', className:'btn-info'},
			{name:'italic', className:'btn-info'},
			{name:'strikethrough', className:'btn-info'},
			{name:'underline', className:'btn-info'},
			null,
			{name:'insertunorderedlist', className:'btn-success'},
			{name:'insertorderedlist', className:'btn-success'},
			{name:'outdent', className:'btn-purple'},
			{name:'indent', className:'btn-purple'},
			null,
			{name:'justifyleft', className:'btn-primary'},
			{name:'justifycenter', className:'btn-primary'},
			{name:'justifyright', className:'btn-primary'},
			{name:'justifyfull', className:'btn-inverse'},
			null,
			{name:'createLink', className:'btn-pink'},
			{name:'unlink', className:'btn-pink'},
			null,
			{name:'insertImage', className:'btn-success'},
			null,
			'foreColor',
			null,
			{name:'undo', className:'btn-grey'},
			{name:'redo', className:'btn-grey'}
		],
		'wysiwyg': {
			fileUploadError: showErrorAlert
		}
	}).prev().addClass('wysiwyg-style2');

	
	/**
	//make the editor have all the available height
	$(window).on('resize.editor', function() {
		var offset = $('#editor1').parent().offset();
		var winHeight =  $(this).height();
		
		$('#editor1').css({'height':winHeight - offset.top - 10, 'max-height': 'none'});
	}).triggerHandler('resize.editor');
	*/
	 
	


	$('[data-toggle="buttons"] .btn').on('click', function(e){
		var target = $(this).find('input[type=radio]');
		var which = parseInt(target.val());
		var toolbar = $('#editor1').prev().get(0);
		if(which >= 1 && which <= 4) {
			toolbar.className = toolbar.className.replace(/wysiwyg\-style(1|2)/g , '');
			if(which == 1) $(toolbar).addClass('wysiwyg-style1');
			else if(which == 2) $(toolbar).addClass('wysiwyg-style2');
			if(which == 4) {
				$(toolbar).find('.btn-group > .btn').addClass('btn-white btn-round');
			} else $(toolbar).find('.btn-group > .btn-white').removeClass('btn-white btn-round');
		}
	});


	
 
	if ( typeof jQuery.ui !== 'undefined' && ace.vars['webkit'] ) {
		
		var lastResizableImg = null;
		function destroyResizable() {
			if(lastResizableImg == null) return;
			lastResizableImg.resizable( "destroy" );
			lastResizableImg.removeData('resizable');
			lastResizableImg = null;
		}

		var enableImageResize = function() {
			$('.wysiwyg-editor')
			.on('mousedown', function(e) {
				var target = $(e.target);
				if( e.target instanceof HTMLImageElement ) {
					if( !target.data('resizable') ) {
						target.resizable({
							aspectRatio: e.target.width / e.target.height,
						});
						target.data('resizable', true);
						
						if( lastResizableImg != null ) {
							//disable previous resizable image
							lastResizableImg.resizable( "destroy" );
							lastResizableImg.removeData('resizable');
						}
						lastResizableImg = target;
					}
				}
			})
			.on('click', function(e) {
				if( lastResizableImg != null && !(e.target instanceof HTMLImageElement) ) {
					destroyResizable();
				}
			})
			.on('keydown', function() {
				destroyResizable();
			});
	    }

		enableImageResize();
 
	}


});


function elFinderBrowser(callback, value, meta) {
    tinymce.activeEditor.windowManager.open({
        file: '<?php echo base_url("file_manager/filetes"); ?>', // use an absolute path!
        title: 'Files Manager',
        width: 900,
        height: 450,
        resizable: 'yes'
    }, {
        oninsert: function (file, elf) {
            var url, reg, info;

            // URL normalization
            url = file;

            reg = "\/[^/]+?\/\.\.\/";
            while (url.match(reg)) {
                url = url.replace(reg, '/');
            }

            var split_info = file.split("/");

            var filename = split_info[split_info.length - 1];
            
            var getsize = 0;
            get_filesize(file, function (size) {
                //alert("The size of " + filename + " is: " + size + " bytes.");
                getsize = size;
            });
            
            // Make file info
            info = filename + ' (' + elf.formatSize(getsize) + ')';

            // Provide file and text for the link dialog
            if (meta.filetype == 'file') {
                callback(url, {text: info, title: info});
            }

            // Provide image and alt text for the image dialog
            if (meta.filetype == 'image') {
                callback(url, {alt: info});
            }

            // Provide alternative source and posted for the media dialog
            if (meta.filetype == 'media') {
                callback(url);
            }
        }
    });
    return false;
}

// TinyMCE init
tinymce.init({
    selector: "textarea",
    height: 400,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    relative_urls: false,
    remove_script_host: false,
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    file_picker_callback: elFinderBrowser
});

function get_filesize(url, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open("HEAD", url, true); // Notice "HEAD" instead of "GET",
    //  to get only the header
    xhr.onreadystatechange = function () {
        if (this.readyState == this.DONE) {
            callback(parseInt(xhr.getResponseHeader("Content-Length")));
        }
    };
    xhr.send();
}
	 
		</script>

 
		<script type="text/javascript">
			 
				$('#dynamic-table').DataTable();
			
				 
			 
		</script>

	</body>
</html>
