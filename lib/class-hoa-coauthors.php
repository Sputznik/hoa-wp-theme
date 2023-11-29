<?php

/**
 * BOOTSTRAPS COAUTHORS SPECIFIC FUNCTIONALITIES
 */
class HOA_COAUTHORS {

  function __construct(){

    /* SHORTCODE TO RETURN AUTHOR POSTS LINK */
    add_shortcode( 'hoa_author_posts_link', function(){
      $html = '<span class="coauthors-link">';

    	if ( function_exists('coauthors_posts_links') ) {
    		$html .= coauthors_posts_links( null, null, null, null, false );
    	} else {
    		$html .= get_the_author_posts_link();
    	}

      $html .= '</span>';
      return $html;
    } );

  }

}

new HOA_COAUTHORS();
