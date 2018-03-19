  



        <div class="page-content">
        <div class="page-header">
							<h1>
							Footer Form  
								 
							</h1>

						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
							<form action="<?php echo base_url('footer/save') ;?>" method="POST">
		<div class="col-md-12">
                 <input type="hidden" name="id" value="<?php echo $list->id; ?>" >
                 <input type="hidden" name="last_update" value="<?php echo date('Y-m-d H:i:s'); ?>" >
				 
               
		 

				<div class="form-group">
					<label for="exampleInputEmail1">
						Isi Konten 
					</label>
					 <input type="text" name="konten" class="form-control"  value="<?php echo $list->konten;?>"  >
				</div>
				 
				 
				
				<br>
				<div  align="center">
                    <button type="submit" name="save" class="btn btn-large btn-primary" > <i class="fa fa-archive"></i> Save </button>
                    <a class="btn btn-danger" href="<?php echo base_url('footer'); ?>"> <i class="fa fa-reply-all"></i> Back </a>
                </div>
				<br>
				<br>
				<br>				 
		</form>
 
							 

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
</div>
 
 

 

    