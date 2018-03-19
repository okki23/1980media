
<div class="row">
<div class="container">
<br>
         &nbsp;
 
		<br>
		&nbsp;

<h1> Artikel/News Internal Member  </h1>
                
        <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
  <tr>
  
    <th>Title</th>
    <td>Pubdate </th>
    <th>Opsi</th>
   
  </tr>
</thead>
<tbody>
<?php
foreach($article_internal_member as $key => $value){
?>
<tr>
    <td><?php echo $value->title; ?> </td>
    <td><?php echo $value->pubdate; ?> </td>
    <td>
    <a href="<?php echo base_url('article_internal_member/detail/'.$value->id); ?>"> Detail </a> &nbsp;
  
    </td>
</tr>
<?php
}
?>
</tbody>
</table>
 
</div>
</div> 