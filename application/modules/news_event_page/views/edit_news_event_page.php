
        <div class="page-content">
        	<div class="page-header">

							<h1>
							News & Events Editor Form  
								 
							</h1>

		
			</div><!-- /.page-header -->
			<div class="page-content">

								<div class="col-md-12"> 
									<form name="homepage" action="<?php echo base_url('news_event_page/save'); ?>" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="id" value="<?php echo $list->id; ?>">
									<input type="hidden" name="update_news" value="<?php echo date('Y-m-d H:i:s'); ?>">
									<div id="accordion" class="accordion-style1 panel-group">
											 

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
														<label class="col-md-3 control-label">Title News
														</label>
														<div class="col-md-9">
															<input type="text" name="title_news" value="<?php echo $list->title_news; ?>"   class="form-control"   />
														</div>
													</div>

													<br>
													&nbsp;

													<div class="form-group">
														<label class="col-md-3 control-label">Picture News
														</label>
														<div class="col-md-9">
																<input type="file" name="picture_newsx" id="picture_newsx" class="form-control" />
																<input type="hidden" name="picture_news" id="picture_news" value="<?php echo $list->picture_news; ?>" class="form-control" />
																<?php
																if($list->picture_news == '' || $list->picture_news == NULL){
																?>
																
																	<h5 class="label label-danger"> Foto Tidak Ditemukan </h5>
																	
																<?php
																}else{
																?>
																	<br>
																	<img src="<?php echo base_url('uploads/'.$list->picture_news); ?>" style="width:250px; height:150px;">
																	<br>
																<?php
																}
																?>
														</div>
													</div>

													<br>
													&nbsp;

 
													<div class="form-group">
														<label class="col-md-3 control-label">Description
														</label>
														<div class="col-md-9">
															<textarea name="desc_news" class="form-control"> <?php echo $list->desc_news; ?> </textarea>
															 
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
                                        <a class="btn btn-large btn-danger" href="<?php echo base_url('homepage'); ?>"> <i class="fa fa-reply-all"></i> Back </a>
                                    </div>
																
								</form>
			</div>
		</div>
