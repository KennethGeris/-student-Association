<!-- Kenneth Geris -->
<div id="content">
      <br><br>
  <div class="container">
    <div class="row"> 
      <!--main content-->
      <div class="col-md-9">
        <h2 class="title-divider"><span>Berichten</span> </h2>
        <div class="row">
          <div class="col-md-6">
                    <?php
                        foreach($results as $row){
                            echo "<div class='media'>";
                                echo "<div class='media-body'>";
                                    echo "<p><b>Name:</b> " . $row->name."</hp>";
                                    echo "<p><b>Email:</b> " . $row->email . "</p>";
                                    echo "<p><b>Message:</b> " . $row->message . "</p>";
                                    echo "<p><b>Message sent:</b> " . $row->date_submit . "</p>";
                                    echo "<br/>";
                                echo "</div>";
                            echo "</div>";
                        }
                   ?>           
          </div>                
        </div> 
        </div>
      </div>
    </div>
  </div>