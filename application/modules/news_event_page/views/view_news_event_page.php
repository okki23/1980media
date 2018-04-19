<div class="page-content">
        <div class="page-header">
							<h1>
              News Event   								 
							</h1>

						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
              <a href = "<?php echo base_url('news_event_page/edit'); ?>" class="btn btn-primary" title="Add list_client"> <span class="glyphicon glyphicon-plus" aria-hidden="true"> </span> Add </a>
                <br>
                &nbsp;
              <table id="dynamic-table" class="table table-striped table-bordered table-hover">
<thead>
  <tr>
    <th>Judul </th>  
    <th>Konten </th>
    <th>Last Update</th>
    <th>Opsi</th> 
  </tr>
</thead>
<tbody>
<?php
foreach($list as $key => $value){
?>
<tr>
    <td><?php echo $value->title_news; ?> </td>
    <td><?php echo $value->desc_news; ?> </td>
    <td><?php echo $value->update_news; ?> </td>
 
    <td>
    <a href="<?php echo base_url('news_event_page/edit/'.$value->id); ?>" class="label label-warning"> <i class="fa fa-pencil"></i>  Edit </a> &nbsp;
    <a href="<?php echo base_url('news_event_page/delete/'.$value->id); ?>" class="label label-danger" onclick="javascript:return confirm('Anda yakin ingin menghapus data ini?')" > <i class="fa fa-trash"></i> Delete </a> &nbsp; 
    </td>
</tr>
<?php
}
?>
</tbody>
</table>	 

<br>
<hr>

  <table id="dynamic-table" class="table table-striped table-bordered table-hover">
<thead>
  <tr>
    <th>Header Image </th>  
     
    <th>Opsi</th> 
  </tr>
</thead>
<tbody>
<?php
foreach($list_head as $keys => $values){
?>
<tr>
    <td><?php echo $values->header_image; ?> </td>
 
 
    <td>
    <a href="<?php echo base_url('news_event_page/edit_header/'.$values->id); ?>" class="label label-warning"> <i class="fa fa-pencil"></i>  Edit </a> &nbsp;
    <!-- <a href="<?php echo base_url('news_event_page/delete/'.$values->id); ?>" class="label label-danger" onclick="javascript:return confirm('Anda yakin ingin menghapus data ini?')" > <i class="fa fa-trash"></i> Delete </a> &nbsp;     -->
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
 
 

 
 

 