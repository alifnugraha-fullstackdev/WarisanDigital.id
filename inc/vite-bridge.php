<?php
/**
 * Vite Asset Loader Bridge
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function warisandigital_enqueue_assets() {
	if ( defined( 'VITE_DEV' ) && VITE_DEV ) {
		// Enqueue Vite client
		wp_enqueue_script( 'vite-client', VITE_SERVER . '/@vite/client', array(), null, true );
		// Enqueue main JS entry point
		wp_enqueue_script( 'warisandigital-main', VITE_SERVER . '/src/main.js', array(), null, true );
		// Enqueue style entry point
		wp_enqueue_style( 'warisandigital-style', VITE_SERVER . '/src/style.css', array(), null );
	} else {
		// Production logic: Read manifest.json
		$manifest_path = get_template_directory() . '/dist/.vite/manifest.json';
		if ( file_exists( $manifest_path ) ) {
			$manifest = json_decode( file_get_contents( $manifest_path ), true );
			
			// Enqueue main JS
			if ( isset( $manifest['src/main.js'] ) ) {
				wp_enqueue_script( 'warisandigital-main', get_template_directory_uri() . '/dist/' . $manifest['src/main.js']['file'], array(), null, true );
			}
			
			// Enqueue CSS
			if ( isset( $manifest['src/style.css'] ) ) {
				wp_enqueue_style( 'warisandigital-style', get_template_directory_uri() . '/dist/' . $manifest['src/style.css']['file'], array(), null );
			}
		}
	}

	// Google Fonts & Material Symbols
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Newsreader:ital,opsz,wght@0,6..72,400;0,6..72,600;0,6..72,700;1,6..72,400&family=Space+Grotesk:wght@400;500;600;700&family=Space+Mono:ital,wght@0,400;0,700;1,400&display=swap', array(), null );
	wp_enqueue_style( 'material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'warisandigital_enqueue_assets' );
