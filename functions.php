<?php
	function my_custom_scripts() {

	if (is_shop() || is_product_category() || is_product()) {

//1
wp_register_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.css');
wp_enqueue_style('bootstrap');
//2
wp_register_script('bootstrap_js', get_stylesheet_directory_uri() . '/assets/css/bootstrap.bundle.js', '', '', true);
wp_enqueue_script('bootstrap_js');
}

wp_register_style('custom_css', get_stylesheet_directory_uri() . '/assets/css/custom.css');
wp_enqueue_style('custom_css');

wp_register_style('fonts_css', get_stylesheet_directory_uri() . '/assets/css/fonts.css');
wp_enqueue_style('fonts_css');

}
add_action ('wp_enqueue_scripts', 'my_custom_scripts', 10);

remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
remove_action('woocommerce_archive_description', 'woocommerce_product_archive_description', 10);
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

function custom_shop_hero() { ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col text-center py-5">
				<header class="woocommerce-products-header test">
					<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
						<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
					<?php endif; ?>
				</header>
				<?php woocommerce_breadcrumb(); ?>
			</div>
		</div>
	</div>
<?php }
add_action ('woocommerce_before_main_content', 'custom_shop_hero', 5);

function shop_container_open() { ?>
	<div class="container">
<?php	}
add_action ('woocommerce_after_main_content', 'shop_container_open', 7);

function shop_container_end() { ?>
	</div>
<?php }
add_action ('woocommerce_after_main_content', 'shop_container_end', 11);

//add_action ('woocommerce_before_main_content', 'woocommerce_taxonomy_archive_description', 5);
//add_action ('woocommerce_before_main_content', 'woocommerce_product_archive_description', 6);
