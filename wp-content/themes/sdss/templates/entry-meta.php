<?php if (is_singular( array ('algorithms', 'opticalspectra', 'data', 'imaging', 'infrared', 'software', 'help', 'tutorials', 'marvels', ) ) ): ?>


<!--<time class="published" datetime="<?php echo get_the_time('c'); ?>"><i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?></time>-->

<?php else: ?>


<time class="published" datetime="<?php echo get_the_time('c'); ?>"><i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?></time>
<p class="byline author vcard"><?php echo __('By', 'roots'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></p>

<?php endif; ?>