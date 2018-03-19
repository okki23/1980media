
<div class="row">
<div class="container">
<h1> Posisi Kas Terkini   </h1>
            
         <br>
         &nbsp;
    <?php 
  
      echo '<a href = "'.base_url('upload_neraca/edit').'" class="btn btn-primary" title="Add User"> <span class="glyphicon glyphicon-plus" aria-hidden="true"> </span> Add </a>'; 
    echo '&nbsp;';
    echo '&nbsp;';
       echo '<a href = "'.base_url('upload_neraca/rekap').'" class="btn btn-primary" title="Print Posisi Kas Terkini"> <span class="glyphicon glyphicon-print" aria-hidden="true"> </span> Print Posisi Kas Terkini </a>';
     
    ?>
    
		<br>
		&nbsp;
        <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
  <tr>
    <th>Jenis Transaksi</th>
	<th>Transaksi</th>
    <th>Jumlah</th>
    <th>File Pendukung  </th>
    <th>Tanggal Upload </th>   
    <th>Opsi</th> 
  </tr>
</thead>
<tbody>
<?php
foreach($upload_neraca as $key => $value){
?>
<tr>
	<td><?php echo strtoupper($value->type_trans); ?> </td>
    <td><?php echo $value->nama_file; ?> </td>
    <td><?php echo "Rp. ".number_format(intval($value->last_post),0); ?> </td>
    <td><?php echo "<a href=".base_url('uploads/'.str_replace(" ","_",$value->path_upload)).">".$value->path_upload." <span class='glyphicon glyphicon-cloud-download' aria-hidden='true'> </span>  </a>"; ?> </td>
    <td><?php echo tanggalan($value->date_upload); ?> </td>
     
    <td>
    <a href="<?php echo base_url('upload_neraca/edit/'.$value->id); ?>"> Edit </a> &nbsp;
    <a href="<?php echo base_url('upload_neraca/delete/'.$value->id); ?>" onclick="javascript:return confirm('Anda yakin ingin menghapus data ini?')" > Delete </a> &nbsp;    
    </td>
</tr>

<?php
}
?>
<tr>
	<td colspan="6" style="text-align: left; font-weight: 800;"> Saldo Seluruhnya : Rp . <?php echo number_format(intval($sum->sumdata),0); ?></td>
</tr>
</tbody>
</table>
 
</div>
</div> 