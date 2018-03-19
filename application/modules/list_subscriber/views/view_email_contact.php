
 
<h1> Email contact    </h1>
                
         <br>
         &nbsp;
		<a href = "<?php echo base_url('email_contact/edit'); ?>" class="btn btn-primary" title="Add User"> <span class="glyphicon glyphicon-plus" aria-hidden="true"> </span> Add </a>
		<br>
		&nbsp;
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
    <a href="<?php echo base_url('email_contact/edit/'.$value->id); ?>" class="label label-warning"> <i class="fa fa-pencil"></i>  Edit </a> &nbsp;
    <a href="<?php echo base_url('email_contact/delete/'.$value->id); ?>" class="label label-danger" onclick="javascript:return confirm('Anda yakin ingin menghapus data ini?')" > <i class="fa fa-trash"></i> Delete </a> &nbsp;    
    </td>
</tr>
<?php
}
?>
</tbody>
</table>
 
 