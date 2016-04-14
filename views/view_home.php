<!-- Kenneth Geris, Glenn Verrue -->
<div id="content">
	<div class="container">
            <div class="col-md-7" style="padding-left: 70px"><img src="<?php echo base_url(); ?>img/slides/hexion_logo.png" alt="Hexion" width="313" height="377"  style="margin-left:auto; margin-top: 20px; margin-bottom: 20px;"/></div>
            <div class="col-md-5 caption">
              <h2 style="margin-top: 100px">Studentenvereniging Hexion</h2>
              <h4>By <a href="http://www.pxl.be/Pub/Departementen/PXL-IT.html" target="_blank">PXL-IT</a></h4>
              <p>Welkom op onze gloednieuwe website. Hierin vind je alles over ons en kom je de nieuwste evenementen te weten!</p>
              <a href="<?php echo base_url();?>overhexion" class="btn btn-lg btn-primary">Lees meer</a> </div>
	</div>
    
    <div id="content2">
        <div class="col-md-4">
            <h2 class="title-divider"><span>Komende <span class="de-em">Evenementen</span></span> </h2>
            <?php $count = count($post['id']);
		for ($i=0;$i<$count;$i++) {
			if($i == 2) break; ?>
		
        <div class="media row">
          <div class="col-md-1 date-md">
            
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
          </div>
        </div> 
		<?php }  ?>
        </div>

        
        <div id="facebook">
            <h2 class="title-divider"><span>Nieuwste <span class="de-em">weetjes</span></span> </h2>
            <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FHogeschoolPXL%3Ffref%3Dts&amp;width=500&amp;height=427&amp;colorscheme=light&amp;show_faces=false&amp;header=true&amp;stream=true&amp;show_border=true" scrolling="no" frameborder="0" style="border: none; overflow:hidden; width:500px; margin-left: 50px; height:427px;" allowTransparency="true"></iframe>
        </div>
        <div style="clear: both"></div>
    </div>
</div>