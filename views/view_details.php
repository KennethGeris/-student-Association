<!-- Sam Neven -->
<div id="content">
  <div class="container">
   <?php
   foreach($query as $post){
  ?>
   <p>
		<label width="200px" class="sr-only" for="subject">Onderwerp</label>
		<?php echo form_error('subject'); ?>
		<br />
		<input readonly id="subject" class="form-control" type="text" name="subject" placeholder="Onderwerp" value="<?php echo $post->subject; ?>"  />
	</p>
	<p>
			<label class="sr-only" for="details">Details</label>
			<?php echo form_error('details'); ?>
			<br/>
			<textarea readonly rows="12"  id="details" class="form-control" name="details"  placeholder="Details"><?php echo $post->details;?></textarea>
	</p>
	
	<p>
			<label class="sr-only" for="name">Naam</label>
			<?php echo form_error('name'); ?>
			<br/>
			<input readonly id="name" class="form-control" type="text" name="name" placeholder="Naam" value="<?php echo $post->name; ?>"  />
	</p>
	
	<p>
	
			<label class="sr-only" for="email">Email</label>
			<?php echo form_error('email'); ?>
			<br/>
			<input readonly id="email" class="form-control" type="text" name="email" placeholder="Email" value="<?php echo $post->email; ?>"  />
	
	</p>
	
  <?php
   }
   ?>
   <p>
			<?php echo form_reset('commentaar', 'Geef commentaar', 'class="btn btn-primary"'); ?>
			<?php echo form_open('forum');  
			echo form_submit( 'terug', 'Terug', 'class="btn btn-primary"'); 
			echo form_close();
			?>
			
	</p>
    </div>
  </div> 