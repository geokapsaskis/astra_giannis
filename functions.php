<?php
/**
 * Astra Giannis Child Theme Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Giannis Child Theme
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_GIANNIS_CHILD_THEME_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-giannis-child-theme-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_GIANNIS_CHILD_THEME_VERSION, 'all' );

	//με αυτό φορτώνει το custom.css
	wp_register_style( 'giannis_css', get_stylesheet_directory_uri() . '/css/custom.css');
  wp_enqueue_style( 'giannis_css' );

	//με αυτό φορτώνει το fonts.css
	wp_register_style( 'giannis_fonts_css', get_stylesheet_directory_uri() . '/css/fonts.css');
	wp_enqueue_style( 'giannis_fonts_css' );
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

function my_before_shop_loop() { ?>
	<p class="test custom-test">
		my_before_shop_loop
	</p>
<?php }
add_action ('woocommerce_before_shop_loop', 'my_before_shop_loop', 5 );


function my_footer() { ?>
		<div class=" test custom-test">
			My footer
		</div>
<?php }
add_action ('woocommerce_after_shop_loop', 'my_footer', 5 );


function giannis_test1() {
		 echo "<div class='test custom-test'>";
		 echo "Giannis Test Output";
		 echo "</div>";
}
add_action( 'giannis_test', 'giannis_test1', 5 );

function giannis_test2() { ?>
		 <div class='test custom-test'>
			 GiannisTest 2
		 </div>
<?php }
add_action( 'giannis_test', 'giannis_test2', 10 );

function giannis_test3() {
		 echo "<div class='test custom-test'>";
     echo "Giannis Test Output 3";
		 echo "</div>";
}
add_action( 'giannis_test', 'giannis_test3', 15 );
