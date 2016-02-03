<?php

add_action( 'init', 'clean_storefront_homepage' );

function clean_storefront_homepage(){
	remove_action('homepage', 'storefront_homepage_content', 10);
	remove_action('homepage', 'storefront_product_categories', 20);
	
}

