
        <div class="page-content">
        	<div class="page-header">

							<h1>
							Services Editor Form  
								 
							</h1>

		
			</div><!-- /.page-header -->
			<div class="page-content">

								<div class="col-md-12"> 
									<form name="page_seo" action="<?php echo base_url('page_seo/save'); ?>" method="POST" enctype="multipart/form-data">
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
														<label class="col-md-3 control-label">First Title </label>
														<div class="col-md-9">
															
															<input type="text" name="first_title" value="<?php echo $list->first_title; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													 
													&nbsp;
													<div class="form-group">
														<label class="col-md-3 control-label">First Description Title </label>
														<div class="col-md-9">
															<textarea name="first_desc_title"> <?php echo $list->first_desc_title; ?> </textarea>
														 
														</div>
													</div>

													<br>
													 
													&nbsp;
													<div class="form-group">
														<label class="col-md-3 control-label">First Image
														</label>
														<div class="col-md-9">

														<input type="file" name="first_image_titlex" id="first_image_titlex" class="form-control" />
														<input type="hidden" name="first_image_title" id="first_image_title" value="<?php echo $list->first_image_title; ?>" class="form-control" />
																<?php
																if($list->first_image_title == '' || $list->first_image_title == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->first_image_title); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>
 
														</div>
													</div>

												 
													<div class="form-group">
														&nbsp;
														<hr>
														<br>
												 
													</div>


													<div class="form-group">
														<label class="col-md-3 control-label">Second Title </label>
														<div class="col-md-9">
															<input type="text" name="second_title" value="<?php echo $list->second_title; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													 
													&nbsp;
													<div class="form-group">
														<label class="col-md-3 control-label">Second Description Title </label>
														<div class="col-md-9">
														<textarea name="second_desc_title"> <?php echo $list->second_desc_title; ?> </textarea>
														 
														</div>
													</div>

													<br>
													 
													&nbsp;
													<div class="form-group">
														<label class="col-md-3 control-label">Second Image
														</label>
														<div class="col-md-9">

														<input type="file" name="second_image_titlex" id="second_image_titlex" class="form-control" />
														<input type="hidden" name="second_image_title" id="second_image_title" value="<?php echo $list->second_image_title; ?>" class="form-control" />
																<?php
																if($list->second_image_title == '' || $list->second_image_title == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->second_image_title); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>
 
														</div>
													</div>
													 
												 
					
												 
													
													



													</div>
												</div>
											</div>

											 
											 

										</div>
									</div><!-- /.col -->
								
								    <div  align="center" style="margin-bottom:50px;">
                                        <button type="submit" name="save" class="btn btn-large btn-primary" > <i class="fa fa-archive"></i> Save </button>
                                        <a class="btn btn-large btn-danger" href="<?php echo base_url('page_seo'); ?>"> <i class="fa fa-reply-all"></i> Back </a>
                                    </div>
																
								</form>
			</div>
		</div>
