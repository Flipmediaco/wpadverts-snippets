<?php
/**
Plugin Name: WPAdverts Snippets
Version: 1.0
Author: Greg Winiarski
Description: This is collection of useful Adverts snippets.
*/

function wpadverts_snippet_run( $snippet ) {
    $file = dirname( __FILE__ ) . "/$snippet/$snippet.php";
    
    if( file_exists( $file ) ) {
        include_once $file;
    } else {
        echo sprintf( '<div>Snippet <strong>%s</strong> does not exist.</div>', $snippet ); 
    }
}

define( "PRESELECT_AD_CATEGORY_USE_DTD", 1 );

//wpadverts_snippet_run('dependant-taxonomy-dropdown');
//wpadverts_snippet_run('preselect-ad-category');