
<script type="text/javascript">
$(document).ready(function(){
 
    $('#example').DataTable();   
    

});
</script>
<div class="row">
<div class="container">
<br>
         &nbsp;
<h1> Donatur    </h1>
                
       
		 
    <a href="<?php echo base_url('donatur_member/rekap'); ?>" class="btn btn-primary"> <span class="glyphicon glyphicon-print" aria-hidden="true"> </span>  Print Rekapitulasi Donatur </a>
    <br>
		&nbsp;
       <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
  <tr>
    <th>Nama Donatur</th>
    <th>Jumlah Donasi</th>
    <th>Tanggal Donasi</th>
	<th>Bukti Pembayaran</th>
 
  </tr>
</thead>
<tbody>
<?php
foreach($donatur_member as $key => $value){
?>
<tr>
    <td><?php echo $value->nama_donatur; ?> </td>
    <td><?php echo "Rp. ".number_format($value->jumlah_donasi,"0"); ?> </td>
    <td><?php echo tanggalan($value->tanggal_donasi); ?> </td>
	<td><?php echo "<a target='_blank' href=".base_url('uploads/'.str_replace(" ","_",$value->path_upload)).">".$value->path_upload." <span class='glyphicon glyphicon-cloud-download' aria-hidden='true'> </span>  </a>"; ?> </td>
   
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