<?php
/*
Template Name: Photo Essay Template
Template Post Type: post
*/
get_header();
?>
<?php get_template_part('partials/post/featured-img');?>
<div class="container single-template-3">
  <div class="row">
    <div class="col-sm-12">
      <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <div class="entry-content"><?php the_content(); ?></div>
        <?php get_template_part('partials/post/post-author-box');?>
        <?php get_template_part('partials/comments-box');?>
        <?php get_template_part('partials/post-navigation');?>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>
<?php get_footer();?>
