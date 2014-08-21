<?php get_template_part('templates/page', 'header'); ?>

<div class="alert alert-warning">
  <?php _e('Sorry, but the page you were trying to view does not exist.', 'roots'); ?>
</div>

<p><?php _e('It looks like this was the result of either:', 'roots'); ?></p>
<ul>
  <li><?php _e('a mistyped address', 'roots'); ?></li>
  <li><?php _e('an out-of-date link', 'roots'); ?></li>
</ul>

<div class="row">
	<div class="col-sm-6">
<div class="alert alert-info">Arrive at this page via a paper or the original SDSS (now classic.sdss.org) website? If so please inform us of the link and page you were looking for.</div>
<?php echo do_shortcode( '[contact-form-7 id="1472" title="404 Error Form"]' ); ?>
</div>
<div class="col-sm-6">
<div class="alert alert-info">Otherwise please use the following search form to find your content</div>
<?php get_search_form(); ?>
</div>
</div>