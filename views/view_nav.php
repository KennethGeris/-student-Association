<!-- Kenneth Geris -->
    <div class="container" data-toggle="clingify">
      <div class="navbar"> 
        <!--
      mobile collapse menu button
      - data-toggle="toggle" = default BS menu
      - data-toggle="jpanel-menu" = jPanel Menu
      --> 
        <a class="navbar-btn" data-toggle="jpanel-menu" data-target=".navbar-collapse"> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> </a> 
        
        <!--user menu-->
        
        <!--everything within this div is collapsed on mobile-->
        <div class="navbar-collapse collapse"> 
          
          <!--main navigation-->
          <ul class="nav navbar-nav">
            <li role="presentation"><a role="menuitem" href="<?php echo base_url();?>home" tabindex="-1" class="menu-item">Home</a></li>
            <li><a href="<?php echo base_url(); ?>overhexion" class="menu-item">Over Hexion</a></li>          
            <li><a href="<?php echo base_url(); ?>forum" class="menu-item">Forum</a></li>
            <li><a href="<?php echo base_url(); ?>evenement" class="menu-item">Evenementen</a></li> 
            <li><a href="<?php echo base_url(); ?>contact" class="menu-item">Contact</a></li> 
          </ul>
          <div class="btn-group user-menu pull right" style="float: right; margin-right: 15px">
                <a href="<?php echo base_url();?>login" class="btn btn-primary">Login</a>
                <a href="<?php echo base_url();?>registreer" class="btn btn-primary ">Registreer</a>            
          </div>
        </div>
        <!--/.navbar-collapse --> 
      </div>
    </div>
  </div>
</div>