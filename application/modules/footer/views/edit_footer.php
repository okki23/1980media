  



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
                
				<div class="form-group">
					<label for="exampleInputEmail1">
						Title 
					</label>
					 <input type="text" name="title_about" class="form-control"  value="<?php echo $list->title_about;?>"  >
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">
						Description 
					</label>
					<input type="text" name="desc_about" class="form-control"  value="<?php echo $list->desc_about;?>"  >
  				 
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">
						Title Address 
					</label>
					<input type="text" name="title_address" class="form-control"  value="<?php echo $list->title_address;?>"  >
  				 
				</div>
				
				<div class="form-group">
					<label for="exampleInputEmail1">
						Address 
					</label>
					<textarea name="address" class="form-control" > <?php echo $list->desc_about; ?> </textarea>
					<!-- <input type="text" name="address" class="form-control"  value="<?php echo $list->desc_about;?>"  > -->
  				 
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">
						FB link 
					</label>
					<input type="text" name="fb_link" class="form-control"  value="<?php echo $list->fb_link;?>"  >
  				 
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">
						Twitter link 
					</label>
					<input type="text" name="twitter_link" class="form-control"  value="<?php echo $list->twitter_link;?>"  >
  				 
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">
						Youtube link 
					</label>
					<input type="text" name="youtube_link" class="form-control"  value="<?php echo $list->youtube_link;?>"  >
  				 
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">
						Instagram link 
					</label>
					<input type="text" name="ig_link" class="form-control"  value="<?php echo $list->ig_link;?>"  >
  				 
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
 
 

 

    