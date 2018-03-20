 
 
<h1 align="center"> Email Contact Form    </h1>
<form action="<?php echo base_url('list_contact/save') ;?>" method="POST">
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
                    <a class="btn btn-danger" href="<?php echo base_url('list_contact'); ?>"> <i class="fa fa-reply-all"></i> Back </a>
                </div>
				<br>
				<br>
				<br>				 
		</form>
 