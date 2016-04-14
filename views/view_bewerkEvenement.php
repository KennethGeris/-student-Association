<!-- Glenn Verrue -->
<!-- om te editen en deleten hebben we van volgende website gebruik gemaakt  http://imsocode.com/?p=285 -->
<div id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
		  <?php
			echo validation_errors();
		?>
			<h4>Bewerk "<?php echo $post['title']; ?>" Onderaan</h4>
			<form action="" method="post" >
						<p>
								<label class="sr-only" for="title">Titel </label>
								<?php echo form_error('title'); ?>
								<br />
								<input id="title" class="form-control" type="text" name="title" placeholder="Titel" value="<?php echo $post['title']; ?>"  />
						</p>

						<p>
								<label class="sr-only" for="date">Datum</label>
								<?php echo form_error('date'); ?>
								<br />
								<input id="date" class="form-control" type="date" name="date" placeholder="date" value="<?php echo $post['date']; ?>"  />
						</p>

						<p>
								<label class="sr-only" for="about">Omschrijving </label>
								<?php echo form_error('about'); ?>
								<br />
								<textarea rows="12"  id="about" class="form-control" name="about"  placeholder="Omschrijving" value=""><?php echo $post['about']; ?></textarea>
						</p>
						
				<input type="submit" class="btn btn-primary" value="Opslaan" />
			<?php 
				echo anchor('evenement','Cancel', 'class="btn btn-primary"');
			?>
				</form>
			</div>
		</div>
	</div>
</div>