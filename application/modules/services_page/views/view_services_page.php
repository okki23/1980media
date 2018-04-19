<div class="page-content">
        <div class="page-header">
							<h1>
              Services   								 
							</h1>

						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
							 
              <table id="dynamic-table" class="table table-striped table-bordered table-hover">
<thead>
  <tr>
    <th>Caption A</th>
    <th>Caption B</th>
    <th>Caption C</th>
    <th>Caption D</th>
    <th>Caption E</th>
    <th>Caption F</th>
     
    <th>Opsi</th> 
  </tr>
</thead>
<tbody>
<?php
foreach($list as $key => $value){
?>
<tr>
    <td><?php echo $value->caption_logo_a; ?> </td>
    <td><?php echo $value->caption_logo_b; ?> </td>
    <td><?php echo $value->caption_logo_c; ?> </td>
    <td><?php echo $value->caption_logo_d; ?> </td>
    <td><?php echo $value->caption_logo_e; ?> </td>
    <td><?php echo $value->caption_logo_f; ?> </td>
 
    <td>
    <a href="<?php echo base_url('services_page/edit/'.$value->id); ?>" class="label label-warning"> <i class="fa fa-pencil"></i>  Edit </a> &nbsp;
    <!-- <a href="<?php echo base_url('services_page/delete/'.$value->id); ?>" class="label label-danger" onclick="javascript:return confirm('Anda yakin ingin menghapus data ini?')" > <i class="fa fa-trash"></i> Delete </a> &nbsp;     -->
    </td>
</tr>
<?php
}
?>
</tbody>
</table>	 

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
</div>
 
 

 
 

 