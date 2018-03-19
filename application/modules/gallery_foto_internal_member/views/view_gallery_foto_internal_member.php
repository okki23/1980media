
 
<style type="text/css">
 .modal-backdrop {
    /* bug fix - no overlay */    
    display: none;    
}
 

#lightbox .modal-content {
    display: inline-block;
    text-align: center;   
}

#lightbox .close {
    opacity: 1;
    color: rgb(255, 255, 255);
    background-color: rgb(25, 25, 25);
    padding: 5px 8px;
    border-radius: 30px;
    border: 2px solid rgb(255, 255, 255);
    position: absolute;
    top: -15px;
    right: -55px;
    
    z-index:1032;
}
    </style>

<script type="text/javascript">
$(document).ready(function() {
    var $lightbox = $('#lightbox');
    
    $('[data-target="#lightbox"]').on('click', function(event) {
        var $img = $(this).find('img'), 
            src = $img.attr('src'),
            alt = $img.attr('alt'),
            css = {
                'maxWidth': $(window).width() - 100,
                'maxHeight': $(window).height() - 100
            };
    
        $lightbox.find('img').attr('src', src);
        $lightbox.find('img').attr('alt', alt);
        $lightbox.find('img').css(css);
    });
    
    $lightbox.on('shown.bs.modal', function (e) {
        var $img = $lightbox.find('img');
            
        $lightbox.find('.modal-dialog').css({'width': $img.width()});
    });
});
</script>

<div class="row">
<div class="container">
  
		 
		<br>
		&nbsp;
<h1> Gallery Foto Internal Member   </h1>

 
<div class="col-md-12">

<div class="container">
<?php 
    foreach($list as $key => $val){
      //echo '<div class="col-lg-3 col-sm-4 col-xs-6"><a title="'.$val->caption.'" href="#"><img class="thumbnail img-responsive" src="'.$val->foto.'"></a></div>';
     echo ' <div class="col-xs-4 col-sm-4">
     <a href="#" <a title="'.$val->caption.'" style="width:100%; height: 230px;" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
         <img src="'.$val->foto.'" alt="...">
     </a>
     <div class="clearfix"> </div>
 </div>
 ';
    }
    ?>
   
</div>

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

<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="" alt="" />
            </div>
        </div>
    </div>
</div>