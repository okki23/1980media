
        <div class="page-content">
        	<div class="page-header">

							<h1>
							Home Editor Form  
								 
							</h1>

		
			</div><!-- /.page-header -->
			<div class="page-content">

								<div class="col-md-12"> 
									<form name="homepage" action="<?php echo base_url('homepage/save'); ?>" method="POST" enctype="multipart/form-data">
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
														<label class="col-md-3 control-label">Service Picture A
														</label>
														<div class="col-md-9">

														<input type="file" name="service_picture_ax" id="service_picture_ax" class="form-control" />
														<input type="hidden" name="service_picture_a" id="service_picture_a" value="<?php echo $list->service_picture_a; ?>" class="form-control" />
																<?php
																if($list->service_picture_a == '' || $list->service_picture_a == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->service_picture_a); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>
 
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Service Title A
														</label>
														<div class="col-md-9">
															<input type="text" name="service_title_a" value="<?php echo $list->service_title_a; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													 
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Service Description A
														</label>
														<div class="col-md-9">
															<input type="text" name="service_desc_a" value="<?php echo $list->service_desc_a; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">URL Service A
														</label>
														<div class="col-md-9">
															<input type="text" name="url_service_a" value="<?php echo $list->url_service_a; ?>"   class="form-control"   />
														</div>
													</div>
																
													<div class="form-group">
														&nbsp;
														<hr>
														<br>
												 
													</div>
					
												 
													<div class="form-group">
														<label class="col-md-3 control-label">Service Picture B
														</label>
														<div class="col-md-9">
														<input type="file" name="service_picture_bx" id="service_picture_bx" class="form-control" />
														<input type="hidden" name="service_picture_b" id="service_picture_b" value="<?php echo $list->service_picture_b; ?>" class="form-control" />
																<?php
																if($list->service_picture_b == '' || $list->service_picture_b == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->service_picture_b); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>

															 
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Service Title B
														</label>
														<div class="col-md-9">
															<input type="text" name="service_title_b" value="<?php echo $list->service_title_b; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Service Description B
														</label>
														<div class="col-md-9">
															<input type="text" name="service_desc_b" value="<?php echo $list->service_desc_b; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">URL Service B
														</label>
														<div class="col-md-9">
															<input type="text" name="url_service_b" value="<?php echo $list->url_service_b; ?>"   class="form-control"   />
														</div>
													</div>


													<div class="form-group">
														&nbsp;
														<hr>
														<br>
												 
													</div>
					
												 
													<div class="form-group">
														<label class="col-md-3 control-label">Service Picture C
														</label>
														<div class="col-md-9">
														<input type="file" name="service_picture_cx" id="service_picture_cx" class="form-control" />
														<input type="hidden" name="service_picture_c" id="service_picture_c" value="<?php echo $list->service_picture_c; ?>" class="form-control" />
																<?php
																if($list->service_picture_c == '' || $list->service_picture_c == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->service_picture_c); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>


														 
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Service Title C
														</label>
														<div class="col-md-9">
															<input type="text" name="service_title_c" value="<?php echo $list->service_title_c; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Service Description C
														</label>
														<div class="col-md-9">
															<input type="text" name="service_desc_c" value="<?php echo $list->service_desc_c; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">URL Service C
														</label>
														<div class="col-md-9">
															<input type="text" name="url_service_c" value="<?php echo $list->url_service_c; ?>"   class="form-control"   />
														</div>
													</div>



													<div class="form-group">
														&nbsp;
														<hr>
														<br>
													</div>
					
												 
													<div class="form-group">
														<label class="col-md-3 control-label">Service Picture D
														</label>
														<div class="col-md-9">
														<input type="file" name="service_picture_dx" id="service_picture_dx" class="form-control" />
														<input type="hidden" name="service_picture_d" id="service_picture_d" value="<?php echo $list->service_picture_d; ?>" class="form-control" />
																<?php
																if($list->service_picture_d == '' || $list->service_picture_d == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->service_picture_d); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>

														 
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Service Title D
														</label>
														<div class="col-md-9">
															<input type="text" name="service_title_d" value="<?php echo $list->service_title_d; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Service Description D
														</label>
														<div class="col-md-9">
															<input type="text" name="service_desc_d" value="<?php echo $list->service_desc_d; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">URL Service D
														</label>
														<div class="col-md-9">
															<input type="text" name="url_service_d" value="<?php echo $list->url_service_d; ?>"   class="form-control"   />
														</div>
													</div>


													<div class="form-group">
														&nbsp;
														<hr>
														<br>
													</div>
					
												 
													<div class="form-group">
														<label class="col-md-3 control-label">Service Picture E
														</label>
														<div class="col-md-9">
														<input type="file" name="service_picture_ex" id="service_picture_ex" class="form-control" />
														<input type="hidden" name="service_picture_e" id="service_picture_e" value="<?php echo $list->service_picture_e; ?>" class="form-control" />
																<?php
																if($list->service_picture_e == '' || $list->service_picture_e == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->service_picture_e); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>
														 
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Service Title E
														</label>
														<div class="col-md-9">
															<input type="text" name="service_title_e" value="<?php echo $list->service_title_e; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Service Description E
														</label>
														<div class="col-md-9">
															<input type="text" name="service_desc_e" value="<?php echo $list->service_desc_e; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">URL Service E
														</label>
														<div class="col-md-9">
															<input type="text" name="url_service_e" value="<?php echo $list->url_service_e; ?>"   class="form-control"   />
														</div>
													</div>


													<div class="form-group">
														&nbsp;
														<hr>
														<br>												 
													</div>
					
												 
													<div class="form-group">
														<label class="col-md-3 control-label">Service Picture F
														</label>
														<div class="col-md-9">
														<input type="file" name="service_picture_fx" id="service_picture_fx" class="form-control" />
														<input type="hidden" name="service_picture_f" id="service_picture_f" value="<?php echo $list->service_picture_f; ?>" class="form-control" />
																<?php
																if($list->service_picture_f == '' || $list->service_picture_f == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->service_picture_f); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>

														 
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Service Title F
														</label>
														<div class="col-md-9">
															<input type="text" name="service_title_f" value="<?php echo $list->service_title_f; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Service Description F
														</label>
														<div class="col-md-9">
															<input type="text" name="service_desc_f" value="<?php echo $list->service_desc_f; ?>"   class="form-control"   />
														</div>
													</div>
													
													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">URL Service F
														</label>
														<div class="col-md-9">
															<input type="text" name="url_service_f" value="<?php echo $list->url_service_f; ?>"   class="form-control"   />
														</div>
													</div>

													<div class="form-group">
														&nbsp;
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
														&nbsp;
														<hr>
														<br>
													</div>

													<div class="form-group">
														<label class="col-md-3 control-label">Adventage Picture A
														</label>
														<div class="col-md-9">
														<input type="file" name="advg_picture_ax" id="advg_picture_ax" class="form-control" />
														<input type="hidden" name="advg_picture_a" id="advg_picture_a" value="<?php echo $list->advg_picture_a; ?>" class="form-control" />
																<?php
																if($list->advg_picture_a == '' || $list->advg_picture_a == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->advg_picture_a); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>
 
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Adventage Title A
														</label>
														<div class="col-md-9">
															<input type="text" name="advg_title_a" value="<?php echo $list->advg_title_a; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Adventage Description A
														</label>
														<div class="col-md-9">
															<input type="text" name="advg_desc_a" value="<?php echo $list->advg_desc_a; ?>"   class="form-control"   />
														</div>
													</div>


													<div class="form-group">
														&nbsp;
														<hr>
														<br>
													</div>

													<div class="form-group">
														<label class="col-md-3 control-label">Adventage Picture B
														</label>
														<div class="col-md-9">
														<input type="file" name="advg_picture_bx" id="advg_picture_bx" class="form-control" />
														<input type="hidden" name="advg_picture_b" id="advg_picture_b" value="<?php echo $list->advg_picture_b; ?>" class="form-control" />
																<?php
																if($list->advg_picture_b == '' || $list->advg_picture_b == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->advg_picture_b); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>
  
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Adventage Title B
														</label>
														<div class="col-md-9">
															<input type="text" name="advg_title_b" value="<?php echo $list->advg_title_b; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Adventage Description B
														</label>
														<div class="col-md-9">
															<input type="text" name="advg_desc_b" value="<?php echo $list->advg_desc_b; ?>"   class="form-control"   />
														</div>
													</div>


													<div class="form-group">
														&nbsp;
														<hr>
														<br>
													</div>

													<div class="form-group">
														<label class="col-md-3 control-label">Adventage Picture C
														</label>
														<div class="col-md-9">
														<input type="file" name="advg_picture_cx" id="advg_picture_cx" class="form-control" />
														<input type="hidden" name="advg_picture_c" id="advg_picture_c" value="<?php echo $list->advg_picture_c; ?>" class="form-control" />
																<?php
																if($list->advg_picture_c == '' || $list->advg_picture_c == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->advg_picture_c); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>
															 
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Adventage Title C
														</label>
														<div class="col-md-9">
															<input type="text" name="advg_title_c" value="<?php echo $list->advg_title_c; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Adventage Description C
														</label>
														<div class="col-md-9">
															<input type="text" name="advg_desc_c" value="<?php echo $list->advg_desc_c; ?>"   class="form-control"   />
														</div>
													</div>


													<div class="form-group">
														&nbsp;
														<hr>
														<br>												 
													</div>

													<div class="form-group">
														<label class="col-md-3 control-label">Adventage Picture D
														</label>
														<div class="col-md-9">
														<input type="file" name="advg_picture_dx" id="advg_picture_dx" class="form-control" />
														<input type="hidden" name="advg_picture_d" id="advg_picture_d" value="<?php echo $list->advg_picture_d; ?>" class="form-control" />
																<?php
																if($list->advg_picture_d == '' || $list->advg_picture_d == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->advg_picture_d); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?> 
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Adventage Title D
														</label>
														<div class="col-md-9">
															<input type="text" name="advg_title_d" value="<?php echo $list->advg_title_d; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Adventage Description D
														</label>
														<div class="col-md-9">
															<input type="text" name="advg_desc_d" value="<?php echo $list->advg_desc_d; ?>"   class="form-control"   />
														</div>
													</div>
													
														&nbsp;
														<hr>
														<br>

													<div class="form-group">
														<label class="col-md-3 control-label">Adventage Picture E
														</label>
														<div class="col-md-9">
														<input type="file" name="advg_picture_ex" id="advg_picture_ex" class="form-control" />
														<input type="hidden" name="advg_picture_e" id="advg_picture_e" value="<?php echo $list->advg_picture_e; ?>" class="form-control" />
																<?php
																if($list->advg_picture_e == '' || $list->advg_picture_e == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->advg_picture_e); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?> 
															 
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Adventage Title E
														</label>
														<div class="col-md-9">
															<input type="text" name="advg_title_e" value="<?php echo $list->advg_title_e; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Adventage Description E
														</label>
														<div class="col-md-9">
															<input type="text" name="advg_desc_e" value="<?php echo $list->advg_desc_e; ?>"   class="form-control"   />
														</div>
													</div>

														&nbsp;
														<hr>
														<br>
													
													<div class="form-group">
														<label class="col-md-3 control-label">Adventage Picture F
														</label>
														<div class="col-md-9">
														<input type="file" name="advg_picture_fx" id="advg_picture_fx" class="form-control" />
														<input type="hidden" name="advg_picture_f" id="advg_picture_f" value="<?php echo $list->advg_picture_f; ?>" class="form-control" />
																<?php
																if($list->advg_picture_f == '' || $list->advg_picture_f == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->advg_picture_f); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?> 
															  
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Adventage Title F
														</label>
														<div class="col-md-9">
															<input type="text" name="advg_title_f" value="<?php echo $list->advg_title_f; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Adventage Description F
														</label>
														<div class="col-md-9">
															<input type="text" name="advg_desc_f" value="<?php echo $list->advg_desc_f; ?>"   class="form-control"   />
														</div>
													</div>




													</div>
												</div>
											</div>


											<div class="panel panel-default">
											<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFourth">
															<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
															Third Section </a>
													</h4>
												</div>

												 	<div class="panel-collapse collapse" id="collapseFourth">
													<div class="panel-body">
														

													<div class="form-group">
														<label class="col-md-3 control-label">Youtube Embedd Link
														</label>
														<div class="col-md-9">
															<input type="text" name="link_video_youtube" value="<?php echo $list->link_video_youtube; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Map Embedd Link
														</label>
														<div class="col-md-9">
															<input type="text" name="link_embed_map" value="<?php echo $list->link_embed_map; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													&nbsp;
													
													 

												 
												</div>

												<div class="panel-collapse collapse" id="collapseFourth">
													<div class="panel-body">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
													</div>
												</div>
											</div>


										</div>
									</div><!-- /.col -->
								
								    <div  align="center" style="margin-bottom:50px;">
                                        <button type="submit" name="save" class="btn btn-large btn-primary" > <i class="fa fa-archive"></i> Save </button>
                                        <a class="btn btn-large btn-danger" href="<?php echo base_url('homepage'); ?>"> <i class="fa fa-reply-all"></i> Back </a>
                                    </div>
																
								</form>
			</div>
		</div>
