
<div class="row">
<div class="container">
<h1> Donatur    </h1>
                
         <br>
         &nbsp;
		<a href = "<?php echo base_url('donatur/edit'); ?>" class="btn btn-primary" title="Add User"> <span class="glyphicon glyphicon-plus" aria-hidden="true"> </span> Add </a>
    &nbsp;
    <a href="<?php echo base_url('donatur/rekap'); ?>" class="btn btn-primary"> <span class="glyphicon glyphicon-print" aria-hidden="true"> </span>  Print Rekapitulasi Donatur </a>
    <br>
		&nbsp;
        <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
  <tr>
    <th>Nama Donatur</th>
    <th>Jumlah Donasi</th>
    <th>Tanggal Donasi</th>
	<th>Bukti Pembayaran</th>
    <th>Opsi</th> 
  </tr>
</thead>
<tbody>
<?php
foreach($donatur as $key => $value){
?>
<tr>
    <td><?php echo $value->nama_donatur; ?> </td>
    <td><?php echo "Rp. ".number_format($value->jumlah_donasi,"0"); ?> </td>
    <td><?php echo tanggalan($value->tanggal_donasi); ?> </td>
	<td><?php echo "<a target='_blank' href=".base_url('uploads/'.str_replace(" ","_",$value->path_upload)).">".$value->path_upload." <span class='glyphicon glyphicon-cloud-download' aria-hidden='true'> </span>  </a>"; ?> </td>
    <td>
    <a href="<?php echo base_url('donatur/edit/'.$value->id); ?>"> Edit </a> &nbsp;
    <a href="<?php echo base_url('donatur/delete/'.$value->id); ?>" onclick="javascript:return confirm('Anda yakin ingin menghapus data ini?')" > Delete </a> &nbsp;    
    </td>
</tr>
<?php
}
?>
<tr>
  <td colspan="5" style="text-align: left; font-weight: 800;"> Saldo Seluruhnya : Rp . <?php echo number_format(intval($sum->sumdata),0); ?></td>
</tr>
</tbody>
</table>
 
</div>
</div> 