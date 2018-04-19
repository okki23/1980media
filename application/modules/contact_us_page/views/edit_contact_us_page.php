
        <div class="page-content">
        	<div class="page-header">

							<h1>
							Contact Editor Form  
								 
							</h1>

		
			</div><!-- /.page-header -->
			<div class="page-content">

								<div class="col-md-12"> 
									<form name="contact_us_page" action="<?php echo base_url('contact_us_page/save'); ?>" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="id" value="<?php echo $list->id; ?>">
									<div id="accordion" class="accordion-style1 panel-group">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
															<i class="ace-icon fa fa-angle-down bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
															 Header Image
														</a>
													</h4>
												</div>

												<div class="panel-collapse collapse" id="collapseOne">
													<div class="panel-body">
												 

													<div class="form-group">
														<label class="col-md-3 control-label">Header Image
														</label>
														<div class="col-md-9">
																<input type="file" name="header_imagex" id="header_imagex" class="form-control" />
																<input type="hidden" name="header_image" id="header_image" value="<?php echo $list->header_image; ?>" class="form-control" />
																<?php
																if($list->header_image == '' || $list->header_image == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->header_image); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>
														</div>
													</div>
 

													</div>
												</div>
											</div>

											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
															<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
															Section
														</a>
													</h4>
												</div>

												<div class="panel-collapse collapse" id="collapseTwo">
													<div class="panel-body">
												 
													<div class="form-group">
														<label class="col-md-3 control-label"> Title
														</label>
														<div class="col-md-9">
															<input type="text" name="title" value="<?php echo $list->title; ?>"   class="form-control"   />
														</div>
													</div>

													<div class="form-group">
														&nbsp;
														<hr>
														<br>
												 
													</div>

														<div class="form-group">
														<label class="col-md-3 control-label">Description
														</label>
														<div class="col-md-9">
															<input type="text" name="desc" value="<?php echo $list->desc; ?>"   class="form-control"   />
														</div>
													</div>


	<div class="form-group">
														&nbsp;
														<hr>
														<br>
												 
													</div>

														<div class="form-group">
														<label class="col-md-3 control-label">Link Maps
														</label>
														<div class="col-md-9">
															<input type="text" name="link_maps" value="<?php echo $list->link_maps; ?>"   class="form-control"   />
														</div>
													</div>

												 



													</div>
												</div>
											</div>

											 


											 
										</div>
									</div><!-- /.col -->
								
								    <div  align="center" style="margin-bottom:50px;">
                                        <button type="submit" name="save" class="btn btn-large btn-primary" > <i class="fa fa-archive"></i> Save </button>
                                        <a class="btn btn-large btn-danger" href="<?php echo base_url('contact_us_page'); ?>"> <i class="fa fa-reply-all"></i> Back </a>
                                    </div>
																
								</form>
			</div>
		</div>
