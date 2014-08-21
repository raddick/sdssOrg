<?php if (is_singular( array ('algorithms', 'opticalspectra', 'data', 'imaging', 'infrared', 'software', 'help', 'tutorials', 'marvels', ) ) || is_post_type_archive( array ('algorithms', 'opticalspectra', 'data', 'imaging', 'infrared', 'software', 'help', 'tutorials', 'marvels' ) )): ?>

<article <?php post_class('press col-sm-6'); ?>>
        <div class="content">
          <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <div class="entry-summary">
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-sdss">Read More</a>
          </div>
        </div>
  </article>


 <?php else: ?>
<!--Following renders the /Press page as buckets-->
  <article <?php post_class('press col-sm-6'); ?> style="box-shadow: 0 0 1px #CCC;">
        <div class="press-img-content">
         <?php the_post_thumbnail('large', array('class' => 'img-responsive'));  ?>
        </div>
        <div class="content">
          <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <div class="author">
              <?php get_template_part('templates/entry-meta'); ?>
          </div>
          <div class="entry-summary">
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-sdss">Read More</a>
          </div>
        </div>
  </article>
 <?php endif; ?>