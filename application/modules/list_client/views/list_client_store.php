



        <div class="page-content">
        <div class="page-header">
							<h1>
								List Client Form
								 
							</h1>

						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
                            <form class="form-horizontal" action="<?php echo base_url('list_client/save'); ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $parseform->id; ?>">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Client
                        </label>
                        <div class="col-md-9">
                            <input type="text" name="nama_client" value="<?php echo $parseform->nama_client; ?>" class="form-control" placeholder="Nama Client" />
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="col-md-3 control-label">Logo  Client
                        </label>
                        <div class="col-md-9">
                        <input type="file" name="logox" id="logox" class="form-control" />
				              <input type="hidden" name="logo" id="logo" value="<?php echo $parseform->logo; ?>" class="form-control" />
                      <?php
                      if($parseform->logo == '' || $parseform->logo == NULL){
                      ?>
                        <br>
                          <h3> Foto Tidak Ditemukan </h3>
                        </br>
                      <?php
                      }else{
                      ?>
                         <br>
                          <img src="<?php echo base_url('uploads/'.$parseform->logo); ?>" style="width:250px; height:150px;">
                         <br>
                      <?php
                      }
                      ?>
                        </div>
                    </div>
                  





                    

                                    <div  align="center">
                                        <button type="submit" name="save" class="btn btn-large btn-primary" > <i class="fa fa-archive"></i> Save </button>
                                        <a class="btn btn-danger" href="<?php echo base_url('list_client'); ?>"> <i class="fa fa-reply-all"></i> Back </a>
                                    </div>
            </form>
							 

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
</div>
 
 

 