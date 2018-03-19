
<div class="row">
<div class="container">
<h1> Iuran Wajib Anggota    </h1> 
<br>
 
<a href="<?php echo base_url('simpanan/rekap'); ?>" class="btn btn-primary"> <span class="glyphicon glyphicon-print" aria-hidden="true"> </span>  Print Rekapitulasi Simpanan</a>
<br>
&nbsp;
        <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
  <tr>
  
  <th>No</th>
  <th>Nama Member</th>
  <th>Total Simpanan</th>
  <th>Opsi</th>
   
  </tr>
</thead>
<tbody>
<?php
$bacod = 0;
$no =1;
foreach($listing as $key => $value){
?>
<tr>
<td><?php echo $no; ?></td>
<td><?php echo $value->nama_asli; ?></td>
<td><?php echo "Rp. " .number_format($value->summary,"0"); ?></td>
    <td>
    <a href="<?php echo base_url('simpanan/simpanan_detail_view/'.$value->id); ?>"> Setoran </a> &nbsp;
  
    </td>
</tr>
<?php
$bacod +=$value->summary;
$no++;
}

 
?>
<tr>
	<td colspan="4" style="font-weight: 800; text-align: left; "><?php echo "Total Saldo Seluruhnya : Rp" .number_format($bacod,0); ?> </td>
</tr>
</tbody>
</table>
 
</div>
</div> 
 



 