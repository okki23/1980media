<div class="page-content">
        <div class="page-header">
							<h1>
              Email Subscribe								 
							</h1>

						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
							 
              <table id="dynamic-table" class="table table-striped table-bordered table-hover">
<thead>
  <tr>
    <th>Nama Akun </th>
    <th>Nama Email</th>
     
    <th>Opsi</th> 
  </tr>
</thead>
<tbody>
<?php
foreach($list as $key => $value){
?>
<tr>
    <td><?php echo $value->nama_akun; ?> </td>
    <td><?php echo $value->nama_email; ?> </td>
 
    <td>
    <a href="<?php echo base_url('email_subscribe/edit/'.$value->id); ?>" class="label label-warning"> <i class="fa fa-pencil"></i>  Edit </a> &nbsp;
    <!-- <a href="<?php echo base_url('email_subscribe/delete/'.$value->id); ?>" class="label label-danger" onclick="javascript:return confirm('Anda yakin ingin menghapus data ini?')" > <i class="fa fa-trash"></i> Delete </a> &nbsp;     -->
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
 

 