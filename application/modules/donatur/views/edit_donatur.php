 
<div class="row">
<div class="col-md-12"> 
<form action="<?php echo base_url('donatur/save') ;?>" method="POST" enctype="multipart/form-data">
		<div class="col-md-12">
		 		<input type="hidden" name="id" value="<?php echo $donatur->id; ?>" >
				<div class="form-group">
					<label for="exampleInputEmail1">
						Nama Donatur  
					</label>
					 <input type="text" name="nama_donatur" class="form-control"  value="<?php echo $donatur->nama_donatur;?>"  >
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">
						Jumlah Donasi  
					</label>
					 <input type="text" name="jumlah_donasi" class="form-control"  value="<?php echo $donatur->jumlah_donasi;?>"  >
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">
						Tanggal Donasi  
					</label>
					 <input type="text" name="tanggal_donasi" id="dp1" class="form-control"  value="<?php echo $donatur->tanggal_donasi;?>"  >
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">
						Bukti Pembayaran  
					</label>
					<input type="hidden" name="path_upload" id="path_upload" value="<?php echo $donatur->path_upload;?>"  >
					 <input type="file" name="path_uploadx" id="path_uploadx" class="form-control"     >

					 
				</div>
				 

				<hr>
				<br>
				<div  align="center">
                    <button type="submit" name="save" class="btn btn-large btn-primary" > <i class="fa fa-archive"></i> Save </button>
                    <a class="btn btn-danger" href="<?php echo base_url('donatur'); ?>"> <i class="fa fa-reply-all"></i> Back </a>
                </div>
				<br>
				<br>
				<br>				 
		</form>
        </div>
</div>
