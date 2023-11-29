<?php

/**
 * BOOTSTRAPS THEME SPECIFIC FUNCTIONALITIES
 */
class HOA_THEME {

  public function __construct() {

    add_action( 'wp_enqueue_scripts', array( $this, 'assets' ) );  // LOAD ASSETS

  }

  function assets() {

    // ENQUEUE STYLES
    wp_enqueue_style('hoa-core-css', HOA_THEME_URI.'/assets/css/main.css', array('sp-core-style'), HOA_THEME_VERSION );


    //ENQUEUE SCRIPTS
    if( is_singular( 'post' ) ){
      // TWITTER EMBED SCRIPT
      wp_enqueue_script( 'twitter-embed-script', 'https://platform.twitter.com/widgets.js', array(), null, true );
    }

  }

}

new HOA_THEME;
