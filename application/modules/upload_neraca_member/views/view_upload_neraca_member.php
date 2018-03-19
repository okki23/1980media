
<div class="row">
<div class="container">
<br>
         &nbsp;
<h1> Posisi Kas Terkini    </h1>
 
<p>&nbsp;</p>


<a href="<?php echo base_url('upload_neraca_member/rekap'); ?>" class="btn btn-primary"> <span class="glyphicon glyphicon-print" aria-hidden="true"> </span>  Print Rekapitulasi Simpanan</a>
<br>
&nbsp;
          	
<table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
<tbody>
<tr>
<td style="width: 25.8333px;" rowspan="2"><p style="text-align:bottom;">No</p></td>
<td style="width: 70.8333px;" colspan="2"><p style="text-align:center;">Transaksi</p></td>
<td style="width: 70.8333px;" rowspan="2"><p style="text-align:center;">Debet</p></td>
<td style="width: 70.8333px;" rowspan="2"><p style="text-align:center;">Kredit</p></td>
<td style="width: 70.8333px;" rowspan="2"><p style="text-align:center;">Saldo</p></td>
</tr>
<tr>
<td style="width: 70.8333px;"><p style="text-align:center;">Tanggal</p></td>
<td style="width: 70.8333px;"><p style="text-align:center;">Keterangan</p></td>
</tr>
<?php
$no=1;
foreach($upload_neraca_member as $key => $value){
?>
<tr>
<td style="width: 70.8333px;"><?php echo $no; ?></td>
<td style="width: 70.8333px;"><?php echo tanggalan($value->date_upload); ?> </td>
<td style="width: 70.8333px;"><?php echo $value->nama_file; ?></td>
<?php
if($value->type_trans == 'debet'){
	echo '<td style="width: 70.8333px;"> Rp. '.number_format(intval($value->last_post),0).' </td>';
	echo '<td style="width: 70.8333px;">  </td>';
}else{
	echo '<td style="width: 70.8333px;">   </td>';
	echo '<td style="width: 70.8333px;"> Rp. '.number_format(intval($value->last_post),0).' </td>';
}
?>

 
<td style="width: 70.8333px;"> <?php echo "Rp. ". number_format(intval($value->last_post),0) ?></td>
</tr>

<?php
$no++;
}
?>
</tbody>
</table>
 
 
</div>
</div> 