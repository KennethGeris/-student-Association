<!-- Kenneth Geris, Sam Neven -->
<div id="content">
	<div class="container">
          <div class="col-md-4">
              <h2 class="title-divider"><span>Registreer</span></h2>
            <?php
                    // new form and specify where you want to go when submit

                    echo $message;

                    // echo validation_errors();  toon alle errors in 1 groep

                    echo form_open("registreer");

                    // First name
                    echo form_label("Voornaam:", "first_name");	
                    echo form_error("first_name");
                    $data = array(
                                    "name" => "first_name",
                                    "id" => "first_name",
                                    "class" => "form-control",
                                    "value" => set_value("first_name")
                    );
                    echo form_input($data);
                    echo "<br/>";
                    // Name
                    echo form_label("Achternaam:", "name");
                    echo form_error("name");	
                    $data = array(
                                    "name" => "name",
                                    "id" => "name",
                                     "class" => "form-control",
                                    "value" => set_value("name")
                    );
                    echo form_input($data);
                    echo "<br/>";
                    // Password
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
                    // Confirm Password
                    echo form_label("Confirm password:", "cpassword");
                    echo form_error("cpassword");
                    $data = array(
                                    "name" => "cpassword",
                                    "id" => "cpassword",
                                    "class" => "form-control",
                                    "value" => ""
                    );
                    echo form_password($data);
                    echo "<br/>";
                    
                    //geboortedatum
                    echo form_label("Geboortedatum:", "date");
                    echo form_error('date');
                    echo "<br />";
                    echo "<input id='date' class='form-control' type='date' name='date' value=";
                    echo set_value('date');
                    echo "<br /><br/>";
                    // Email
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
                    // Captcha
                    //Bron captcha: Youtube Codeigniter tutorial van Mohammed Damia
                    echo $image.br();
                    if(form_error("captcha")){

                                    echo form_error('captcha');

                    }else{

                            echo form_label("Enter the text from the image above.");

                    }
                    $data = array(
                                    "name" => "captcha",
                                    "id" => "captcha",
                                    "class" => "form-control",
                                    "value" => ''
                    );
                    echo form_input($data);
                    echo "<br/>";
                    echo form_submit("registerSubmit", "Registeer", "class='btn btn-primary'");

                    echo form_close();
            ?>
          </div> 
        </div>
</div>