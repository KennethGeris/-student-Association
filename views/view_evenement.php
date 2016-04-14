<!-- Glenn Verrue -->
<div id="content">
  <div class="container">
    <h2 class="title-divider"><span>Evenementen</span><small><a href="<?php echo base_url(); ?>nieuwEvenement">Nieuw evenement aanmaken</a></small></h2>
    <div class="row"> 
      <!--Blog Roll Content-->
	  
      <div class="col-md-9 blog-roll blog-list"> 
        <?php $count = count($post['id']);
		for ($i=0;$i<$count;$i++) {?>
        <!-- Blog post -->
		
        <div class="media row">
          <div class="col-md-1 date-md"> 
            <!-- Date desktop -->
            <div class="date-wrapper">
				<?php echo $post['date'][$i];?>
			</div>
            <!-- Meta details desktop -->
          </div>
          <div class="col-md-11 media-body">
            <h4 class="title media-heading"><?php echo $post['title'][$i];?></h4>
            <!-- Meta details mobile -->
            <ul class="list-inline meta text-muted">
              <li><i class="fa fa-calendar"></i><?php echo $post['date'][$i];?></li>
            </ul>
            <a href="#" class="media-object"> <img src="img/blog/bee.jpg" alt="Picture of frog by Ben Fredericson" class="img-responsive" /> </a>
            <p><?php echo $post['about'][$i];?></p>
            <ul class="list-inline links">
			  <li><a href="#login-modal" class="btn btn-default btn-xs" data-toggle="modal"><i class="fa fa-circle-arrow-right"></i>Inschrijven voor evenement</a></li>
			  
			  <!--om te editen en deleten hebben we van volgende website gebruik gemaakt  http://imsocode.com/?p=285 -->
			  <li><a href="<?php echo 'evenement/edit/'.$post['id'][$i]?>" class="btn btn-default btn-xs"><i class="fa fa-edit"></i> Bewerk evenement</a></li>
			  
			  <li><a href="<?php echo 'evenement/delete/'.$post['id'][$i]?>" class="btn btn-default btn-xs"><i class="fa fa-circle-arrow-right"></i> Verwijder</a></li>
            </ul>
          </div>
        </div> 
		<?php }  ?>
		   
      </div>	  
    </div>
  </div>
    <br/><br/><br/><br/><br/><br/><br/><br/>
    <br/><br/><br/><br/><br/><br/><br/><br/>
    <br/><br/><br/><br/><br/><br/><br/><br/>
  <!--.container--> 
</div>
<!--#content-->