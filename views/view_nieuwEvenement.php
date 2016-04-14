<!-- Glenn Verrue -->
<div id="content">
  <div class="container">
    <div class="row"> 
      <!--main content-->
      <div class="col-md-9">
        <h2 class="title-divider"><span>Nieuw evenement<span class="de-em"></span></span> </h2>
        <div class="row">
          <div class="col-md-9">
                <?php 
                $attributes = array('class' => '', 'id' => '');
                echo form_open('nieuwEvenement', $attributes); ?>

                <p>
                        <label class="sr-only" for="title">Titel <span class="required">*</span></label>
                        <?php echo form_error('title'); ?>
                        <br />
                        <input id="title" class="form-control" type="text" name="title" placeholder="Titel" value="<?php echo set_value('title'); ?>"  />
                </p>

                <p>
                        <label class="sr-only" for="date">Datum</label>
                        <?php echo form_error('date'); ?>
                        <br />
                        <input id="date" class="form-control" type="date" name="date" placeholder="date" value="<?php echo set_value('date'); ?>"  />
                </p>

                <p>
                        <label class="sr-only" for="about">Omschrijving <span class="required">*</span></label>
                        <?php echo form_error('about'); ?>
                        <br />
                        <textarea rows="12"  id="about" class="form-control" name="about"  placeholder="Omschrijving"value="<?php echo set_value('about'); ?>"></textarea>
                </p>

                <p>
                        <?php echo form_submit( 'opslaan', 'Opslaan', 'class="btn btn-primary"'); ?>
						<?php echo form_reset('reset', 'Wis velden', 'class="btn btn-primary"');?>
                </p>

                <?php echo form_close(); ?>
          </div>          
        </div>
            
          
        </div>
      </div>
    </div>
  </div>