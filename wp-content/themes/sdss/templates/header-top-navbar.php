<header role="banner">
  <div class="navbar navbar-inverse navbar-static-top" >
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
            <div class="navbar-header">
                 <!-- Button for smallest screens -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
                    </button>
                    <div class="hidden-xs">
                    <a class="navbar-brand" href="<?php echo home_url(); ?>/">
                          <img src="/wp-content/uploads/2014/05/sdsslogowhite.png" alt="sdsslogo" class="img-responsive">
                   </a>
                   </div>
                   <div class="visible-xs">
                          <img src="/wp-content/uploads/2014/05/sdsslogowhite.png" alt="sdsslogo" style="width:200px">
                   </div>
            </div>
        </div>
      <div class="col-sm-9">
                <div class="navbar-collapse collapse"  role="navigation">
                  <?php
                    if (has_nav_menu('primary_navigation')) :
                      wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav pull-right'));
                    endif;
                  ?>
                </div>
              </div>
          </div>
      </div>
    </div>
</header>