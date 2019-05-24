<?php
/**
 * Register recommended plugins for this theme using TGMPA library.
 *
 * @link http://tgmpluginactivation.com/installation/
 *
 * @package Algori_Blogger
 */
 
 /**
 * Load the TGMPA class.
 */
require get_parent_theme_file_path( '/inc/class-tgm-plugin-activation.php' );
 
/**
 * Register the required plugins for this theme.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function algori_blogger_register_required_plugins() {
	
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 */
	$plugins = array(
	
		array(
			'name'      => esc_html__( 'Algori PDF Viewer', 'algori-blogger' ),
			'slug'      => 'algori-pdf-viewer',
			'required'  => false,
		),
		array(
			'name'      => esc_html__( 'Algori Video and Image Slider', 'algori-blogger' ),
			'slug'      => 'algori-image-video-slider',
			'required'  => false,
		),
		array(
			'name'      => esc_html__( 'Algori Social Share Buttons', 'algori-blogger' ),
			'slug'      => 'social-share-buttons-lite',
			'required'  => false,
		),
		array(
			'name'      => esc_html__( 'Algori 360 Video', 'algori-blogger' ),
			'slug'      => '360-video',
			'required'  => false,
		),
		array(
			'name'      => esc_html__( 'Algori 360 Image', 'algori-blogger' ),
			'slug'      => '360-image',
			'required'  => false,
		),

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'algori-blogger',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
		
	);

	tgmpa( $plugins, $config );
}

 
add_action( 'tgmpa_register', 'algori_blogger_register_required_plugins' );
