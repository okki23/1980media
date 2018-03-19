



        <div class="page-content">
        <div class="page-header">
							<h1>
								User Management Form
								 
							</h1>

						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
                            <form class="form-horizontal" action="<?php echo base_url('user/save'); ?>" method="POST">
                    <input type="hidden" name="id" value="<?php echo $parseform->id; ?>">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Username
                        </label>
                        <div class="col-md-9">
                            <input type="text" name="username" value="<?php echo $parseform->username; ?>" class="form-control" placeholder="Username" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" name="password" class="form-control" placeholder="Password" />
                            <h4> <span class="label label-danger">  HARAP KOSONGKAN SAJA APABILA PASSWORD TIDAK INGIN DIRUBAH!!!
                                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Email
                        </label>
                        <div class="col-md-9">
                            <input type="text" name="email" value="<?php echo $parseform->email; ?>" class="form-control" placeholder="Email" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">No Telp
                        </label>
                        <div class="col-md-9">
                            <input type="text" name="no_telp" value="<?php echo $parseform->no_telp; ?>" class="form-control" placeholder="No Telp" />
                        </div>
                    </div>
                    

                                    <div  align="center">
                                        <button type="submit" name="save" class="btn btn-large btn-primary" > <i class="fa fa-archive"></i> Save </button>
                                        <a class="btn btn-danger" href="<?php echo base_url('user'); ?>"> <i class="fa fa-reply-all"></i> Back </a>
                                    </div>
            </form>
							 

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
</div>
 
 

 