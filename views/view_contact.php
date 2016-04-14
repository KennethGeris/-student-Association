<!-- Kenneth Geris -->
<div id="content">
      <br><br><br>
  <div class="container">
    <div class="row"> 
      <!--main content-->
      <div class="col-md-9">
        <h2 class="title-divider"><span>Contacteer <span class="de-em">Ons</span></span> </h2>
        <div class="row">
          <div class="col-md-6">
            <?php // Change the css classes to suit your needs    

            $attributes = array('class' => '', 'id' => '');
            echo form_open('contact', $attributes); ?>

            <p>
                    <label for="name">Naam: </label>
                    <?php echo form_error('name'); ?>
                    <br /><input class="form-control" id="name" type="text" name="name" maxlength="50" value="<?php echo set_value('name'); ?>"  />
            </p>

            <p>
                    <label for="email">Email:</label>
                    <?php echo form_error('email'); ?>
                    <br /><input class="form-control" id="email" type="text" name="email" maxlength="50" value="<?php echo set_value('email'); ?>"  />
            </p>

            <p>
                    <label for="message">Bericht: </label>
                    <?php echo form_error('message'); ?>
                    <br />

                    <?php echo form_textarea( array( 'class' =>'form-control', 'name' => 'message', 'rows' => '5', 'cols' => '80', 'value' => set_value('message') ) )?>
            </p>

            <p>
            <?php
                    echo form_submit( 'submit', 'Verzend', "class='btn btn-primary'"); 
                    echo form_close();
            ?>
            </p>
            
          </div> 
            
            <div class="col-md-6">
                <p><abbr title="Phone"><i class="fa fa-phone"></i></abbr> (+32) 11 77 55 55</p>
                <p><abbr title="Email"><i class="fa fa-envelope"></i></abbr> hexion@pxl.be</p>
                <p><abbr title="Address"><i class="fa fa-home"></i></abbr> Elfde-Liniestraat 24, 3500 Hasselt</p>
                <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=nl&amp;geocode=&amp;q=Elfde-Liniestraat+24,+Hasselt,+Belgi%C3%AB&amp;aq=t&amp;sll=51.510238,-0.127029&amp;sspn=0.191666,0.528374&amp;gl=uk&amp;ie=UTF8&amp;hq=&amp;hnear=Elfde-Liniestraat+24,+3500+Hasselt,+Limburg,+Vlaams+Gewest,+Belgi%C3%AB&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=nl&amp;geocode=&amp;q=Elfde-Liniestraat+24,+Hasselt,+Belgi%C3%AB&amp;aq=t&amp;sll=51.510238,-0.127029&amp;sspn=0.191666,0.528374&amp;gl=uk&amp;ie=UTF8&amp;hq=&amp;hnear=Elfde-Liniestraat+24,+3500+Hasselt,+Limburg,+Vlaams+Gewest,+Belgi%C3%AB&amp;t=m&amp;z=14&amp;iwloc=A" style="color:#0000FF;">Grotere kaart weergeven</a></small>
             </div>            
        </div> 
        </div>
      </div>
    </div>
      <br><br><br>
  </div>