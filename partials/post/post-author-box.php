<?php
/**
 * The template for displaying author-box on single posts
 */
if( function_exists( 'get_coauthors' ) ): $coauthors = get_coauthors(); ?>
<div class="entry-author author-box">
  <h1>About the author(s)</h1>
  <?php foreach( $coauthors as $coauthor ):
    $profile_url  = get_author_posts_url( $coauthor->ID, $coauthor->user_nicename );
  ?>
    <div class="author-info">
      <a href="<?php _e( $profile_url ); ?>"><?php echo get_avatar( $coauthor->ID, 100 ); ?></a>
      <div class="orbit-author-meta">
        <h3><a href="<?php _e( $profile_url ); ?>"><?php _e( $coauthor->display_name ); ?></a></h3>
        <div class="author-bio"><?php _e( $coauthor->description );?></div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
<?php endif; ?>
