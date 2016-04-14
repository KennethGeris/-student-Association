<!-- Kenneth Geris -->
<div id="content">
	<div class="container">
		<div class="col-md-4">
		<?php if(isset($images) && count($images)): 
			foreach($images as $image):?>
	
	<a href="<?php echo $image['url']; ?>">
                	<img src="<?php echo $image['thumb_url']; ?>"/>
    </a>
    <?php endforeach; else: ?>
        	
        <?php endif; ?>
	
        <!--Edit foto-->
        
    	<?php
		echo form_open_multipart('profiel/editprofile');
		echo form_upload('userprofile');
		echo form_submit('upload', 'upload', "class='btn-primary'");
		echo form_close();
	echo form_open("profiel/editprofile");
	?>       
	<br/>
	<?php
	
	// Status
        echo form_label("Status:", "status");	
        echo "<br/>";
	$data = array(
			''  => 'Please Select',
            'Praeses'    => 'Praeses',
			'Vicepraeses' => 'Vicepraeses',
            'Secretaris' => 'Secretaris',
            'Schachtenmeester' => 'Schachtenmeester',
            'Doopmeester' => 'Doopmeester',
            'Quaestor' => 'Quaestor',
			'PR-Externa' => 'PR-Externa',
			'Bacchus' => 'Bacchus',
			'Sport en Ontspanning' => 'Sport en Ontspanning',
            
	);
        echo form_dropdown('status', $data, set_value('status'));         
	
    echo "<br/>";
	echo "<br/>";
	
	// education
	echo form_label("Opleiding:", "education");	
	echo form_error("education");
	$data = array(
			"name" => "education",
			"id" => "education",
			"class" => "form-control",
			"value" => set_value("education")
	);
	echo form_input($data);
	echo "<br/>";
	
	// location
	echo form_label("Woonplaats:", "location");	
	echo form_error("location");
	$data = array(
			"name" => "location",
			"id" => "location",
			"class" => "form-control",
			"value" => set_value("location")
	);
	echo form_input($data);
	echo "<br/>";
        
    // hobbys
	echo form_label("Hobbys:", "hobbys");	
	echo form_error("hobbys");
	$data = array(
			"name" => "hobbys",
			"id" => "hobbys",
			"class" => "form-control",
			"value" => set_value("hobbys")
	);
	echo form_input($data);
	echo "<br/>";
                
	// about
	echo form_label("Over mijzelf:", "about");
        $data = array( 
			'class' =>'form-control', 
			'name' => 'about', 
			'rows' => '5', 
			'cols' => '80', 
			'value' => set_value('about') 
        );
        echo form_textarea($data);
        echo "<br/>";
        
    //pxl-mail
	echo form_label("Pxlmail:", "pxlmail");
        $data = array( 
			'class' =>'form-control', 
			'name' => 'pxlmail', 
			'id' => 'pxlmail',
			'value' => set_value('pxlmail') 
        );
        echo form_input($data);
        echo "<br/>";  

   //facebook
	echo form_label("Facebook:", "flink");
        $data = array( 
			'class' =>'form-control', 
			'name' => 'flink', 
			'id' => 'flink',
			'value' => set_value('flink') 
        );
        echo form_input($data);
        echo "<br/>"; 
        
	echo "<br/>";
	echo form_submit("Editprofile", "Edit", "class='btn btn-primary'");
	echo form_close();
?>
        </div>
	</div>
        
</div>
