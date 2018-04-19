
        <div class="page-content">
        	<div class="page-header">

							<h1>
							Services Editor Form  
								 
							</h1>

		
			</div><!-- /.page-header -->
			<div class="page-content">

								<div class="col-md-12"> 
									<form name="services_page" action="<?php echo base_url('services_page/save'); ?>" method="POST" enctype="multipart/form-data">
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
														<label class="col-md-3 control-label">Center Image
														</label>
														<div class="col-md-9">
																<input type="file" name="logo_gx" id="logo_gx" class="form-control" />
																<input type="hidden" name="logo_g" id="logo_g" value="<?php echo $list->logo_g; ?>" class="form-control" />
																<?php
																if($list->logo_g == '' || $list->logo_g == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->logo_g); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>
														</div>
													</div>

													<br>
													&nbsp;
													<div class="form-group">
														<label class="col-md-3 control-label">Picture A
														</label>
														<div class="col-md-9">

														<input type="file" name="logo_ax" id="logo_ax" class="form-control" />
														<input type="hidden" name="logo_a" id="logo_a" value="<?php echo $list->logo_a; ?>" class="form-control" />
																<?php
																if($list->logo_a == '' || $list->logo_a == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->logo_a); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>
 
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Caption Picture A
														</label>
														<div class="col-md-9">
															<input type="text" name="caption_logo_a" value="<?php echo $list->caption_logo_a; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													 
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">URL Picture A
														</label>
														<div class="col-md-9">
															<input type="text" name="url_logo_a" value="<?php echo $list->url_logo_a; ?>"   class="form-control"   />
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

														<input type="file" name="logo_bx" id="logo_bx" class="form-control" />
														<input type="hidden" name="logo_b" id="logo_b" value="<?php echo $list->logo_b; ?>" class="form-control" />
																<?php
																if($list->logo_b == '' || $list->logo_b == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->logo_b); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>
 
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Caption Picture B
														</label>
														<div class="col-md-9">
															<input type="text" name="caption_logo_b" value="<?php echo $list->caption_logo_b; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													 
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">URL Picture B
														</label>
														<div class="col-md-9">
															<input type="text" name="url_logo_b" value="<?php echo $list->url_logo_b; ?>"   class="form-control"   />
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

														<input type="file" name="logo_cx" id="logo_cx" class="form-control" />
														<input type="hidden" name="logo_c" id="logo_c" value="<?php echo $list->logo_c; ?>" class="form-control" />
																<?php
																if($list->logo_c == '' || $list->logo_c == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->logo_c); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>
 
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Caption Picture C
														</label>
														<div class="col-md-9">
															<input type="text" name="caption_logo_c" value="<?php echo $list->caption_logo_c; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													 
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">URL Picture C
														</label>
														<div class="col-md-9">
															<input type="text" name="url_logo_c" value="<?php echo $list->url_logo_c; ?>"   class="form-control"   />
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

														<input type="file" name="logo_dx" id="logo_dx" class="form-control" />
														<input type="hidden" name="logo_d" id="logo_d" value="<?php echo $list->logo_d; ?>" class="form-control" />
																<?php
																if($list->logo_d == '' || $list->logo_d == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->logo_d); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>
 
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Caption Picture D
														</label>
														<div class="col-md-9">
															<input type="text" name="caption_logo_d" value="<?php echo $list->caption_logo_d; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													 
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">URL Picture D
														</label>
														<div class="col-md-9">
															<input type="text" name="url_logo_d" value="<?php echo $list->url_logo_d; ?>"   class="form-control"   />
														</div>
													</div>

													 
																
													<div class="form-group">
														&nbsp;
														<hr>
														<br>
												 
													</div>

 

													<div class="form-group">
														<label class="col-md-3 control-label">Picture E
														</label>
														<div class="col-md-9">

														<input type="file" name="logo_ex" id="logo_ex" class="form-control" />
														<input type="hidden" name="logo_e" id="logo_e" value="<?php echo $list->logo_e; ?>" class="form-control" />
																<?php
																if($list->logo_e == '' || $list->logo_e == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->logo_e); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>
 
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Caption Picture E
														</label>
														<div class="col-md-9">
															<input type="text" name="caption_logo_e" value="<?php echo $list->caption_logo_e; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													 
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">URL Picture E
														</label>
														<div class="col-md-9">
															<input type="text" name="url_logo_e" value="<?php echo $list->url_logo_e; ?>"   class="form-control"   />
														</div>
													</div>

													 
																
													<div class="form-group">
														&nbsp;
														<hr>
														<br>
												 
													</div>
					
												 

														<div class="form-group">
														&nbsp;
														<hr>
														<br>
												 
													</div>

 

													<div class="form-group">
														<label class="col-md-3 control-label">Picture F
														</label>
														<div class="col-md-9">

														<input type="file" name="logo_fx" id="logo_fx" class="form-control" />
														<input type="hidden" name="logo_f" id="logo_f" value="<?php echo $list->logo_f; ?>" class="form-control" />
																<?php
																if($list->logo_f == '' || $list->logo_f == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->logo_f); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>
 
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Caption Picture E
														</label>
														<div class="col-md-9">
															<input type="text" name="caption_logo_f" value="<?php echo $list->caption_logo_f; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													 
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">URL Picture E
														</label>
														<div class="col-md-9">
															<input type="text" name="url_logo_f" value="<?php echo $list->url_logo_f; ?>"   class="form-control"   />
														</div>
													</div>

													 
												 
					
												 
													
													



													</div>
												</div>
											</div>

											 
											 

										</div>
									</div><!-- /.col -->
								
								    <div  align="center" style="margin-bottom:50px;">
                                        <button type="submit" name="save" class="btn btn-large btn-primary" > <i class="fa fa-archive"></i> Save </button>
                                        <a class="btn btn-large btn-danger" href="<?php echo base_url('services_page'); ?>"> <i class="fa fa-reply-all"></i> Back </a>
                                    </div>
																
								</form>
			</div>
		</div>
