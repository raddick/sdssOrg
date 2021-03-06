<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

<?php if 
(is_front_page()): ?>
 <div class="wrap container-fluid" role="document">
  <?php else: ?>
    <div class="wrap container" role="document">
<?php endif; ?>    
<div class="content row">
<?php if (is_singular( array ('algorithms', 'opticalspectra', 'data', 'imaging', 'infrared', 'software', 'help', 'tutorials', 'marvels' ) ) || is_post_type_archive( array ('algorithms', 'opticalspectra', 'data', 'imaging', 'infrared', 'software', 'help', 'tutorials', 'marvels' ) ) || is_page( array (202, 345, 607, 1803,)) ): ?>
            <?php
              if (has_nav_menu('secondary_navigation')) :
                wp_nav_menu(array('theme_location' => 'secondary_navigation', 'menu_class' => 'nav nav-pills nav-justified'));
              endif;
            ?>

          <?php endif; ?>
      <main class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->
  <?php get_template_part('templates/sitemap'); ?>
  <?php get_template_part('templates/footer'); ?>
</body>
</html>
