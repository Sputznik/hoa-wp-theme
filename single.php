<?php
/**
 * The template for displaying all single posts
 */
get_header();
?>
<div class="container single-template-3">
  <div class="row">
    <div class="col-sm-12">
      <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <article <?php post_class();?>>
          <header class="entry-header"><h1 class="entry-title"><?php the_title();?></h1></header>
          <div class="entry-summary"><?php _e( do_shortcode( '[orbit_excerpt]' ) );?></div>
          <div class='post-meta'><?php echo do_shortcode("[hoa_author_posts_link]"); ?> | <?php the_time( 'M j, Y' );?></div>
          <div class="post-thumbnail"><?php _e( do_shortcode( '[orbit_thumbnail size="full"]' ) );?></div>
          <div class="entry-content"><?php the_content(); ?></div>
          <?php get_template_part( 'partials/author-box');?>
          <?php get_template_part( 'partials/comments-box');?>
          <?php get_template_part( 'partials/post-navigation');?>
        </article>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>
<?php get_footer();?>
