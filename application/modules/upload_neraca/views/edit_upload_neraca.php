 

 
<div class="row">
<div class="col-md-12"> 
<form action="<?php echo base_url('upload_neraca/save') ;?>" method="POST" enctype="multipart/form-data" >
		<div class="col-md-12">
		 		<input type="hidden" name="id" value="<?php echo $upload_neraca->id; ?>" >
				 
				 <label for="exampleInputEmail1">
						Tipe Transaksi <?php echo $upload_neraca->type_trans; ?>
					</label>
					<table>
					<tr>
					<td> <input type="radio" name="type_trans" class="form-control"  value="debet" <?php if($upload_neraca->type_trans == 'debet'){ echo "checked=checked";}  ?>  > Debet &nbsp; </td>
					<td> <input type="radio" name="type_trans" class="form-control"  value="kredit" <?php if($upload_neraca->type_trans == 'kredit'){ echo "checked=checked";}  ?>  > Kredit &nbsp; </td>
					</tr>
					</table>
				 
					 
					  
				 <br>
				<div class="form-group">
					<label for="exampleInputEmail1">
						Nama File  
					</label>
					 <input type="text" name="nama_file" class="form-control"  value="<?php echo $upload_neraca->nama_file;?>"  >
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">
						Posisi Kas Terakhir
					</label>
					 <input type="text" name="last_post" class="form-control"  value="<?php echo $upload_neraca->last_post;?>"  >
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">
						Upload File  
					</label>
					<input type="hidden" name="path_upload" id="path_upload" value="<?php echo $upload_neraca->path_upload;?>">
					 <input type="file" name="path_uploadx" id="path_uploadx" class="form-control"     >
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">
						Tanggal Upload 
					</label>
					 <input type="text" name="date_upload" id="dp1" class="form-control"  value="<?php echo $upload_neraca->date_upload;?>"  >
				</div>
			 
				<hr>
				<br>
				<div  align="center">
                    <button type="submit" name="save" class="btn btn-large btn-primary" > <i class="fa fa-archive"></i> Save </button>
                    <a class="btn btn-danger" href="<?php echo base_url('upload_neraca'); ?>"> <i class="fa fa-reply-all"></i> Back </a>
                </div>
				<br>
				<br>
				<br>				 
		</form>
        </div>
</div>
