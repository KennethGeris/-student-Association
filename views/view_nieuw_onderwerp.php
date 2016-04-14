<!-- Sam Neven -->
<div id="content">
  <div class="container">
    <div class="row"> 
      <!--main content-->
      <div class="col-md-9">
        <h2 class="title-divider"><span>Nieuw Onderwerp<span class="de-em"></span></span> </h2>
        <div class="row">
          <div class="col-md-6">
                <?php    

                echo form_open('nieuw_onderwerp'); ?>
				
                <p>
                        <label width="200px" class="sr-only" for="subject">Onderwerp</label>
                        <?php echo form_error('subject'); ?>
                        <br/>
                        <input id="subject" class="form-control" type="text" name="subject" placeholder="Onderwerp" value="<?php echo set_value('subject'); ?>"  />
                </p>

                <p>
                        <label class="sr-only" for="details">Details</label>
                        <?php echo form_error('details'); ?>
                        <br/>
                        <textarea rows="12"  id="details" class="form-control" name="details"  placeholder="Details" value="<?php echo set_value('details'); ?>"></textarea>
                </p>
				
				<p>
                        <label class="sr-only" for="name">Naam</label>
                        <?php echo form_error('name'); ?>
                        <br/>
                        <input id="name" class="form-control" type="text" name="name" placeholder="Naam" value="<?php echo set_value('name'); ?>"  />
                </p>
				
				<p>
				
						<label class="sr-only" for="email">Email</label>
                        <?php echo form_error('email'); ?>
                        <br/>
                        <input id="email" class="form-control" type="text" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>"  />
				
				</p>

                <p>
                        <?php echo form_submit( 'opslaan', 'Opslaan', 'class="btn btn-primary"'); ?>
						<?php echo form_reset('reset', 'Reset', 'class="btn btn-primary"'); ?> 
                </p>
				
                <?php echo form_close(); ?>
          </div>          
        </div>
            
          
        </div>
      </div>
    </div>
  </div>