
<div class="row">
<div class="container">
        
<br>
         &nbsp;
	 
		<br>
		&nbsp;
<h1> Gallery Video Internal Member  </h1>
        
  

 
<div class="row">

  

    <?php
    foreach($list as $key => $val){
      echo '
      
      <div class="col-md-6">
      
      <video width="300" height="150" controls>
      <source src="'.$val->video.'" type="video/mp4">
      Your browser does not support the video tag.
      </video> 
      <br>
      <b align="center" style="text-align:center;">'.$val->caption.'</b>
      <br>
      </div> ';
    }
    ?>

   
       
<div class="pagination_area" style="font-size:20px;">
<nav>
    <?php 
    echo $this->pagination->create_links();
    ?>
   
</nav>
</div>
   </div> 

 
</div>
</div> 