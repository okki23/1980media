<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/jquery-ui/css/base/jquery-ui.css'); ?> " />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/elFinder/css/theme.css'); ?> " />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/elFinder/css/elfinder.min.css'); ?> " />
<script type="text/javascript" src="<?php echo base_url('assets/jquery-1.7.2.min.js'); ?> "></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery-ui/js/jquery-ui.min.js'); ?> "></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/elFinder/js/elfinder.min.js'); ?> "></script>



<script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery-ui/js/jquery-ui.min.js'); ?>"></script>
<script type="text/javascript">

    function cancelbtn() {
        $("#hasil").val('');
    }

    $(document).ready(function () {

        $("#elfinder-tag").hide();

        $("#getfile").click(function () {
            $("#elfinder-tag").toggle();
        });

    });
    jQuery(document).ready(function () {
        jQuery('#elfinder-tag').elfinder({
            url: '<?php echo base_url('file_manager/elfinder_init'); ?>',
            getFileCallback: function (file) {
                var filePath = file; //file contains the relative url.
                console.log(filePath);
                //var imgPath = "<img src = '"+filePath+"'/>";
                //$('#selectedImages').append(imgPath); //add the image to a div so you can see the selected images
                $("#hasil").val(filePath);
                $('#elfinder-tag').hide(); //close the window after image is selected
            }
        }).elfinder('instance');
    });
</script>


 
<h1 align="center"> Email Contact Form    </h1>
<form action="<?php echo base_url('consultant/save') ;?>" method="POST">
		<div class="col-md-12">
		 		<input type="hidden" name="id" value="<?php echo $list->id; ?>" >
				 

		 

				<div class="form-group">
					<label for="exampleInputEmail1">
						Nama Akun 
					</label>
					 <input type="text" name="nama_akun" class="form-control"  value="<?php echo $list->nama_akun;?>"  >
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">
						Nama Email  
					</label>
					 <input type="text" name="nama_email" class="form-control"  value="<?php echo $list->nama_email;?>"  >
				</div>
				 
				
				<br>
				<div  align="center">
                    <button type="submit" name="save" class="btn btn-large btn-primary" > <i class="fa fa-archive"></i> Save </button>
                    <a class="btn btn-danger" href="<?php echo base_url('consultant'); ?>"> <i class="fa fa-reply-all"></i> Back </a>
                </div>
				<br>
				<br>
				<br>				 
		</form>
 