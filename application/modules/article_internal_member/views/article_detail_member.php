 <br>
 &nbsp;
 <br>
 &nbsp;
 <br>
 &nbsp;
      <div class="panel panel-default">
        <div class="panel-heading">
            <h4> News/Article Detail </h4>
            <a href="<?php echo base_url('article_internal_member'); ?>"> Back to Top </a>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <div class="media">
                
                <div class="media-body">
                <h4 class="media-heading">  <?php echo $list->title; ?> </h4>
                <i class="fa fa-user"></i> Administrator &nbsp; <span><i class="fa fa-calendar"></i> <?php echo tanggalan($list->pubdate); ?></span> &nbsp; <i class="fa fa-tags"></i> <?php echo $list->slug; ?>  </div>
                <hr>
                <?php echo $list->body; ?>
                <div class="clearfix"></div>
                             
               </div>
            </div>
        </div>
    </div>