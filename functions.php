<?php

/*  CONSTANTS */
if( !defined( 'HOA_THEME_VERSION' ) ) {
  define( 'HOA_THEME_VERSION', time() );
}

if( !defined( 'HOA_THEME_URI' ) ) {
  define( 'HOA_THEME_URI', get_stylesheet_directory_uri() );
}

// INCLUDE FILES
$inc_files = array(
  'lib/class-hoa-theme.php',
  'lib/class-hoa-coauthors.php'
);

foreach( $inc_files as $inc_file ){ require_once( $inc_file ); }
