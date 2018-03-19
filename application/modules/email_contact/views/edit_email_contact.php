 



        <div class="page-content">
        <div class="page-header">
							<h1>
								Email Contact Form
								 
							</h1>

						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
                            <form action="<?php echo base_url('email_contact/save') ;?>" method="POST">
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
                    <a class="btn btn-danger" href="<?php echo base_url('email_contact'); ?>"> <i class="fa fa-reply-all"></i> Back </a>
                </div>
			 			 
		</form>
 
							 

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
</div>
 
 

 

 