<script type="text/javascript"> 
function getupdate(a,b){
 
  $('#myModal').modal('show'); 

  var myKeyVals = { id : a, id_anggota : b};
   
  $.ajax({
    url:"<?php echo base_url('simpanan/simpanan_detail_getdata')?>",
    type:"POST",
    data: myKeyVals,
    success:function sukses(data){
      console.log(data);
      //{"id":"8","id_anggota":"2","tanggal_bayar":"2017-11-02","jumlah_bayar":"80000","status":"Lunas"}
      var list = JSON.parse(data);
      $("#idform").val(list.id);
      $("#idformanggota").val(list.id_anggota);
      $("#jumlah_bayar").val(list.jumlah_bayar);
      $("#dp1").val(list.tanggal_bayar);
      $("#status").val(list.status);
    }

});
 
};
  function closemodal(){
      $('#myModal').modal('toggle'); 
    }

  function openmodal(){
      $('#myModal').modal('toggle'); 
      $("#idform").val('');
  }
 
</script>

<div class="row">
<div class="container">
<br>
&nbsp
<br>
&nbsp;
<br>
&nbsp;
<h1> Simpanan  : <?php echo $name->nama_asli; ?>   </h1>
<a href="<?php echo base_url('simpanan_member'); ?>"> <- Back To Top </a>
<br>
 
<table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
  <tr>
  <th>No</th>
  <th>Tanggal Transaksi</th>
  <th>Pembayaran</th>
 
  </tr>
</thead>
<tbody>
<?php 
$no = 1;
foreach($listing as $key=>$val){
?>
<tr>
<td> <?php echo $no; ?> </td>
<td> <?php echo tanggalan($val->tanggal_bayar); ?> </td>
<td> <?php echo "Rp. " .number_format(intval($val->jumlah_bayar),"0");   ?> </td>
 
 
</tr> 
<?php
$no++;
}
?>
</tbody>
</table>
 
</div>
</div> 
 
 