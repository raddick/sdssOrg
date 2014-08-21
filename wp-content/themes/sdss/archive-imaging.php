<?php query_posts($query_string . '&orderby=menu_order title&order=desc'); ?>
<?php get_template_part('templates/page', 'header'); ?>

<p>This is a the archive page for DR12 Imaging Data.</p>

<p>For an overview on using DR12 Imaging Data, please visit the Overview page. Otherwise navigate to your specific page below or by using the navigation on the right.</p>


<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_format()); ?>
  <?php if(($wp_query->current_post + 1) % 2 == 0) : ?>
    <div class="clearfix hidden-xs"></div>
  <?php endif; ?>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <div class="clearfix"></div>
  <div class="row">
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
</div>
<?php endif; ?>

