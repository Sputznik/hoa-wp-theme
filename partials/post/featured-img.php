<?php
/**
 * The template for displaying featured image in Photo Essay Template
 */
$featured_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
?>
<div class="photo-essay-header">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="featured-img" style="background-image:url(<?php _e( $featured_image_url );?>);" role="img" aria-label="Featured Image">
          <div class="featured-img-overlay">
            <div class="header-content">
              <span>Photo Essay</span>
              <h1 class="post-title"><?php the_title();?></h1>
              <div class='post-meta'><?php echo do_shortcode("[hoa_author_posts_link]"); ?> | <?php the_time( 'M j, Y' );?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
