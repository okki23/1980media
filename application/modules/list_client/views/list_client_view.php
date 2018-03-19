



        <div class="page-content">
        <div class="page-header">
							<h1>
								List Client
								 
							</h1>

						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
							 
              <a href = "<?php echo base_url('list_client/store'); ?>" class="btn btn-primary" title="Add list_client"> <span class="glyphicon glyphicon-plus" aria-hidden="true"> </span> Add </a>
                <br>
                &nbsp;
                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
              
              <th>No</th>
              <th>Nama Client</th>
              <th>Logo</th>
               
              <th>Opsi</th>
              
              </tr>
            </thead>
            <tbody>
            <?php
            $no =1;
            foreach($listing as $key => $value){
            ?>
            <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $value->nama_client; ?></td>
            <td><img src="<?php echo base_url('uploads/'.$value->logo); ?>" style="width:100px; height:100px;"> </td>
     
                <td>
                <a href="<?php echo base_url('list_client/store/'.$value->id); ?>" class="label label-warning"> <i class="fa fa-pencil"></i>  Edit </a> &nbsp;
                <a href="<?php echo base_url('list_client/delete/'.$value->id); ?>" class="label label-danger" onclick="javascript:return confirm('Anda yakin ingin menghapus data ini?')" > <i class="fa fa-trash"></i> Delete </a> &nbsp;    
                </td>
            </tr>
            <?php
            $no++;
            }
            ?>
            </tbody>
            </table>
 
 

							 

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
</div>
 
 