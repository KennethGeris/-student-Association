<!-- Kenneth Geris -->
<div id="content">
    <div class="container">
        <h2 class="title-divider"><span>Mijn <span class="de-em">Profiel</span></span> </h2>
        <br/><br/>
        <div class="row">
            <div class="col-md-3">
                
        <?php if(isset($images) && count($images)): 
                            foreach($images as $image):?>

            <a href="<?php echo $image['url']; ?>">
                            <img src="<?php echo $image['thumb_url']; ?>"/>
        </a>
        <?php endforeach; else: ?>

            <?php endif; ?>
            </div>

            <div class="col-md-5">
            <?php
            foreach ($q as $r) { 
                    echo "<h4><p>" . $r->first_name." " .$r->name ."</p></h4>";
                    echo "<p><u>Geboortedatum:</u> ". date("d-m-Y",  strtotime($r->date)) ."</p>";
                    echo "<p><u>Status:</u> " . $r->status . "</p>";
                    echo "<p><u>Woonplaats:</u> " . $r->location . "</p>";
                    echo "<p><u>Opleiding:</u> " . $r->education. "</p>";
                    echo "<p><u>Hobby's:</u> " .$r->hobbys."</p>";
                    echo "<p><u>Over mijzelf:</u> " . $r->about. "</p>"; 
                    echo "<p><u>Pxl mail:</u> <a href='mailto:'". $r->pxlmail. ">". $r->pxlmail."</a></p>"; 
                    echo "<p><u>Facebook:</u> <a href=". $r->flink. ">". $r->flink."</a></p>"; 
                    
            }
            ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
	<a href="<?php echo base_url(); ?>profiel/editprofile" class="active">Edit</a>
            </div>
        </div>	
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    </div>
</div>

