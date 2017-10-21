<?php
add_theme_support( 'menus' );
show_admin_bar( false );

function cubiq_setup() {
	remove_action( 'wp_head', 'wp_generator' );                // #1
	remove_action( 'wp_head', 'wlwmanifest_link' );            // #2
	remove_action( 'wp_head', 'rsd_link' );                    // #3
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );        // #4
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 );    // #5
	add_filter( 'the_generator', '__return_false' );            // #6
	add_filter( 'show_admin_bar', '__return_false' );            // #7
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );  // #8
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
}

function create_testimonials() {
	register_post_type( 'testimonials', array(
		'labels'          => array(
			'name'          => __( 'Отзывы' ),
			'singular_name' => __( 'Отзыв' ),
			'add_new'       => __( 'Добавить Отзыв' ),
			'add_new_item'  => __( 'Добавить Отзыв' ),
			'edit'          => __( 'Редактировать Отзыв' ),
			'edit_item'     => __( 'Редактировать Отзыв' ),
			'new_item'      => __( 'Новый Отзыв' ),
			'all_items'     => __( 'Все Отзыв' ),
			'view'          => __( 'Смотреть Отзыв' ),
			'view_item'     => __( 'Смотреть Отзыв' ),
			'search_items'  => __( 'Искать Отзыв' ),
			'not_found'     => __( 'Отзыв не найдет' ),
		),
		'public'          => true,
		'menu_position'   => 5,
		'supports'        => array( 'title', 'excerpt', 'custom-fields', 'page-attributes' ),
		'taxonomies'      => array( 'category' ),
		'has_archive'     => true,
		'capability_type' => 'post',
		'menu_icon'       => 'dashicons-networking',
		'rewrite'         => array( 'slug' => 'testimonials' ),
	) );
}

function footer_enqueue_scripts() {
	remove_action( 'wp_head', 'wp_print_scripts' );
	remove_action( 'wp_head', 'wp_print_head_scripts', 9 );
	remove_action( 'wp_head', 'wp_enqueue_scripts', 1 );
	add_action( 'wp_footer', 'wp_print_scripts', 5 );
	add_action( 'wp_footer', 'wp_enqueue_scripts', 5 );
	add_action( 'wp_footer', 'wp_print_head_scripts', 5 );
}

cubiq_setup();
//add_action( 'after_setup_theme', 'footer_enqueue_scripts' );
wp_deregister_script('jquery');
wp_register_script('jquery', '', '', '', true);
create_testimonials();
function path() {
	echo get_template_directory_uri() . '/';
}

function the_image( $name, $id = 17 ) {
	echo 'src="' . get_field( $name, $id )['url'] . '" ';
	echo 'alt="' . get_field( $name, $id )['alt'] . '" ';
}
