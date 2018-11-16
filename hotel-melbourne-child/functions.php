<?php
/*Questo file è parte di hotel-melbourne-child, hotel-melbourne child theme.

Tutte le funzioni di questo file saranno caricate prima delle funzioni del tema genitore-
Per saperne di piùhttps://codex.wordpress.org/Child_Themes.

Nota: questa funzione carica prima il foglio di stile genitore, poi il foglio di stile figlio.
(non toccare se non sai cosa stai facendo)
*/

function hotel_melbourne_child_enqueue_child_styles() {
$parent_style = 'parent-style'; 
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 
		'child-style', 
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version') );
	}
add_action( 'wp_enqueue_scripts', 'hotel_melbourne_child_enqueue_child_styles' );

/*Scrivi qui le tue funzioni */

add_action( 'after_setup_theme', 'hotel_melbourne_setup_marianna' ); 

function hotel_melbourne_setup_marianna(){
  require_once( get_stylesheet_directory() . '/theme_default_data.php');
$melbourne_option= hotel_melbourne_theme_default_data_marianna(); 
require( get_stylesheet_directory() . '/core-functions/option-panel/hotel-melbourne-option-setting.php' ); // for Option Panel

}

