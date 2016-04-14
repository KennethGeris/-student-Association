<!-- Kenneth Geris -->
<div id="content">
	<div class="container">
            <div class="col-md-3">  
                <h2 class="title-divider"><span>Login</span></h2>
    	<?php
	
		echo form_open('login/login_validation');
	
		echo validation_errors();
	
                echo form_label("Email:", "email");
                echo form_error("email");
                $data = array(
                                "name" => "email",
                                "id" => "email",
                                "class" => "form-control",
                                "value" => set_value("email")
                );
                echo form_input($data);
		echo "<br/>";
	
                echo form_label("Password:", "password");	
                echo form_error("password");
                $data = array(
                                "name" => "password",
                                "id" => "password",
                                "class" => "form-control",
                                "value" => ""
                );
                echo form_password($data);
                echo "<br/>";
		
		echo form_submit('login_submit', 'Login', "class='btn btn-primary'");
		echo form_close();
                ?> <br><br>
                <h5 style="float: right;">Geen lid? <a href="<?php echo base_url();?>registreer">Registreer</a></h5>
            </div>
        </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>