
        <div class="page-content">
        	<div class="page-header">

							<h1>
							About Editor Form  
								 
							</h1>

		
			</div><!-- /.page-header -->
			<div class="page-content">

								<div class="col-md-12"> 
									<form name="page_about" action="<?php echo base_url('page_about/save'); ?>" method="POST" enctype="multipart/form-data">
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
															First Section
														</a>
													</h4>
												</div>

												<div class="panel-collapse collapse" id="collapseTwo">
													<div class="panel-body">
												 
													<div class="form-group">
														<label class="col-md-3 control-label">First Title
														</label>
														<div class="col-md-9">
															<input type="text" name="first_title" value="<?php echo $list->first_title; ?>"   class="form-control"   />
														</div>
													</div>

													<div class="form-group">
														&nbsp;
														<hr>
														<br>
												 
													</div>

														<div class="form-group">
														<label class="col-md-3 control-label">First Description
														</label>
														<div class="col-md-9">
															<input type="text" name="first_desc" value="<?php echo $list->first_desc; ?>"   class="form-control"   />
														</div>
													</div>

													<div class="form-group">
														&nbsp;
														<hr>
														<br>
												 
													</div>

													<div class="form-group">
														<label class="col-md-3 control-label">Picture A
														</label>
														<div class="col-md-9">

														<input type="file" name="pict_ax" id="pict_ax" class="form-control" />
														<input type="hidden" name="pict_a" id="pict_a" value="<?php echo $list->pict_a; ?>" class="form-control" />
																<?php
																if($list->pict_a == '' || $list->pict_a == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->pict_a); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>
 
														</div>
													</div>

													<br>
													&nbsp;


														<div class="form-group">
														<label class="col-md-3 control-label"> Description A
														</label>
														<div class="col-md-9">
															<input type="text" name="desc_a" value="<?php echo $list->desc_a; ?>"   class="form-control"   />
														</div>
													</div>
												 

													<div class="form-group">
														&nbsp;
														<hr>
														<br>
												 
													</div>

													<div class="form-group">
														<label class="col-md-3 control-label">Picture B
														</label>
														<div class="col-md-9">

														<input type="file" name="pict_bx" id="pict_bx" class="form-control" />
														<input type="hidden" name="pict_b" id="pict_b" value="<?php echo $list->pict_b; ?>" class="form-control" />
																<?php
																if($list->pict_b == '' || $list->pict_b == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->pict_b); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>
 
														</div>
													</div>

												
													<br>
													&nbsp;

														<div class="form-group">
														<label class="col-md-3 control-label"> Description B
														</label>
														<div class="col-md-9">
															<input type="text" name="desc_b" value="<?php echo $list->desc_b; ?>"   class="form-control"   />
														</div>
													</div>

													<div class="form-group">
														&nbsp;
														<hr>
														<br>
												 
													</div>

													<div class="form-group">
														<label class="col-md-3 control-label">Picture C
														</label>
														<div class="col-md-9">

														<input type="file" name="pict_cx" id="pict_cx" class="form-control" />
														<input type="hidden" name="pict_c" id="pict_c" value="<?php echo $list->pict_c; ?>" class="form-control" />
																<?php
																if($list->pict_c == '' || $list->pict_c == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->pict_c); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>
 
														</div>
													</div>

												
													<br>
													&nbsp;

														<div class="form-group">
														<label class="col-md-3 control-label"> Description C
														</label>
														<div class="col-md-9">
															<input type="text" name="desc_c" value="<?php echo $list->desc_c; ?>"   class="form-control"   />
														</div>
													</div>

													<div class="form-group">
														&nbsp;
														<hr>
														<br>
												 
													</div>

												<div class="form-group">
														<label class="col-md-3 control-label">Picture D
														</label>
														<div class="col-md-9">

														<input type="file" name="pict_dx" id="pict_dx" class="form-control" />
														<input type="hidden" name="pict_d" id="pict_d" value="<?php echo $list->pict_d; ?>" class="form-control" />
																<?php
																if($list->pict_d == '' || $list->pict_d == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->pict_d); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>
 
														</div>
													</div>

												
													<br>
													&nbsp;

														<div class="form-group">
														<label class="col-md-3 control-label"> Description D
														</label>
														<div class="col-md-9">
															<input type="text" name="desc_d" value="<?php echo $list->desc_d; ?>"   class="form-control"   />
														</div>
													</div>

													<div class="form-group">
														&nbsp;
														<hr>
														<br>
												 
													</div>

													
													



													</div>
												</div>
											</div>

											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
															<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
															Second Section </a>
													</h4>
												</div>

												 	<div class="panel-collapse collapse" id="collapseThree">
													<div class="panel-body">
														
													
													<div class="form-group">
														<label class="col-md-3 control-label">Second Title
														</label>
														<div class="col-md-9">
															<input type="text" name="second_title" value="<?php echo $list->second_title; ?>"   class="form-control"   />
														</div>
													</div>

													<div class="form-group">
														<label class="col-md-3 control-label">Second Desc
														</label>
														<div class="col-md-9">
															<input type="text" name="second_desc" value="<?php echo $list->second_desc; ?>"   class="form-control"   />
														</div>
													</div>

													<div class="form-group">
														&nbsp;
														<hr>
														<br>
													</div>
 




													</div>
												</div>
											</div>


											 
										</div>
									</div><!-- /.col -->
								
								    <div  align="center" style="margin-bottom:50px;">
                                        <button type="submit" name="save" class="btn btn-large btn-primary" > <i class="fa fa-archive"></i> Save </button>
                                        <a class="btn btn-large btn-danger" href="<?php echo base_url('page_about'); ?>"> <i class="fa fa-reply-all"></i> Back </a>
                                    </div>
																
								</form>
			</div>
		</div>
