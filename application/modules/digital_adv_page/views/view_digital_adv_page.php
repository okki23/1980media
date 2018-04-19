<div class="page-content">
        <div class="page-header">
							<h1>
              Digital Advertising   								 
							</h1>

						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
							 
              <table id="dynamic-table" class="table table-striped table-bordered table-hover">
<thead>
  <tr>
    <th>Title</th>
    <th>Description</th>
 
     
    <th>Opsi</th> 
  </tr>
</thead>
<tbody>
<?php
foreach($list as $key => $value){
?>
<tr>
    <td><?php echo $value->first_title; ?> </td>
    <td><?php echo $value->first_desc_title; ?> </td>
 
    <td>
    <a href="<?php echo base_url('digital_adv_page/edit/'.$value->id); ?>" class="label label-warning"> <i class="fa fa-pencil"></i>  Edit </a> &nbsp;
    <!-- <a href="<?php echo base_url('digital_adv_page/delete/'.$value->id); ?>" class="label label-danger" onclick="javascript:return confirm('Anda yakin ingin menghapus data ini?')" > <i class="fa fa-trash"></i> Delete </a> &nbsp;     -->
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
 
 

 
 

 