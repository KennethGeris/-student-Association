<!-- Kenneth Geris -->
<div id="content">
    <div class="container">
        <div class="row"> 
          <!-- sidebar -->
                <div class="col-md-3 sidebar">
                  <div class="section-menu">
                    <ul class="nav nav-list">
                      <li class="nav-header">In deze sectie</li>
                      <li><a href="<?php echo base_url();?>overhexion" class="first">Over Hexion <small>ontstaan</small><i class="fa fa-angle-right"></i></a></li>
                      <li class="active"><a href="<?php echo base_url(); ?>leden">De Studentenvereniging <small>Onze leden</small><i class="fa fa-angle-right"></i></a></li>
                      <li><a href="<?php echo base_url();?>contact">Contacteer Ons<small>Hoe bereik je ons</small><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                  </div>
                </div>
          <!--main content-->
                <div class="col-md-9">
                <h2 class="title-divider"><span>Onze <span class="de-em">Bende</span></span></h2>
            <!-- De Studentenvereniging -->
                <div class="block team margin-top-large" id="team">
                    <?php
                        foreach($results as $row){
                            echo "<div class='media'>";
                                echo "<div class='pull-left'>";
                                echo "<img src='img/team/profile.png' class='img-thumbnail media-object' alt='profile' />"; 
                                echo "</div>";
                            
                                echo "<div class='media-body'>";
                                    echo "<h4><p>" . $row->first_name." " .$row->name ."</p></h4>";
                                    echo "<p><u>Status: </u>" . $row->status . "</p>";
                                    echo "<p><u>Pxl mail:</u> <a href='mailto:'". $row->pxlmail. ">". $row->pxlmail."</a></p>"; 
                                    echo "<br/>";
                                echo "</div>";
                            echo "</div>";
                        }
                   ?>
                    <br/><br/><br/>
                </div>
            </div>
        </div>
    </div>
</div>