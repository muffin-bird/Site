<?php
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'news';
		$args['label'] = 'お知らせ';	
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

function cpt_register_works() {
	$labels = [
		"singular_name" => "works",
		"edit_item" => "works",
	];
	$args = [
		"label" => "Works",
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"snow_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => ["slug" => "works", "with_front" => true],
		"query_var" => true,
		"menu_position" => 5,
		"supports" => ["title", "editor", "thumbnail"],
	];
	register_post_type( "works", $args );
}
add_action( 'init', 'cpt_register_works' );

function cpt_register_dep() {
	$labels = [
		"singular_name" => "dep"
	];
	$args = [
		"label" => "カテゴリー",
		"labels" => $labels,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_in_menu" => true,
		"query_var" => true,
		"rewrite" => ['slug' => 'dep', 'with_front' => true,],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "dep",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
	];
	register_taxonomy("dep", ["works"], $args);
}
add_action( 'init', 'cpt_register_dep' );