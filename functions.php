<?php
/**
 * WARISANDIGITAL Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// 1. Constants
define( 'VITE_DEV', true );
define( 'VITE_SERVER', 'http://localhost:5173' );

// 2. Includes
require_once get_template_directory() . '/inc/vite-bridge.php';

// 3. Theme Supports
function warisandigital_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'menus' );

	register_nav_menus( array(
		'primary-menu' => __( 'Primary Menu', 'warisandigital' ),
	) );
}
add_action( 'after_setup_theme', 'warisandigital_setup' );

// 4. Body Class Filter
add_filter( 'body_class', function( $classes ) {
	if ( is_front_page() ) {
		$classes[] = 'page-home';
	} elseif ( is_page( 'sisi-terang' ) ) {
		$classes[] = 'page-sisi-terang';
	} elseif ( is_page( 'sisi-gelap' ) ) {
		$classes[] = 'page-sisi-gelap';
	} elseif ( is_page( 'galeri' ) ) {
		$classes[] = 'page-galeri';
	} elseif ( is_page( 'about' ) ) {
		$classes[] = 'page-about';
	}
	return $classes;
} );

// 5. Optimization
function warisandigital_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); 
}
add_action( 'wp_enqueue_scripts', 'warisandigital_remove_wp_block_library_css', 100 );

// 6. Custom Login Styling
function warisandigital_login_styling() { 
    // Enqueue fonts for login page
    echo '<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Newsreader:ital,opsz,wght@1,6..72,900&display=swap" rel="stylesheet">';
    ?>
    <style type="text/css">
        body.login {
            background-color: #09090b !important;
            background-image: radial-gradient(circle at center, rgba(201, 168, 76, 0.05) 0%, transparent 70%) !important;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        #login {
            width: 450px !important;
            padding: 0 !important;
            margin: auto !important;
        }
        #login h1 {
            width: 100% !important;
            margin-bottom: 40px !important;
        }
        #login h1 a {
            background-image: none !important;
            text-indent: 0 !important;
            width: 100% !important;
            height: auto !important;
            font-family: 'Newsreader', serif !important;
            font-size: 36px !important;
            font-weight: 900 !important;
            font-style: italic !important;
            letter-spacing: 0.05em !important;
            color: #ffffff !important;
            text-transform: uppercase !important;
            text-align: center !important;
            display: block !important;
        }
        #login h1 a::after {
            content: '.ID';
            color: #C9A84C;
        }
        .login form {
            background: #18181b !important;
            border: 1px solid rgba(255, 255, 255, 0.05) !important;
            border-radius: 24px !important;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5) !important;
            padding: 40px !important;
        }
        .login label {
            color: #a1a1aa !important;
            font-family: 'Inter', sans-serif !important;
            font-size: 11px !important;
            text-transform: uppercase !important;
            letter-spacing: 0.15em !important;
            margin-bottom: 10px !important;
            display: block !important;
        }
        .login input[type="text"], .login input[type="password"] {
            background: rgba(255, 255, 255, 0.03) !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            border-radius: 12px !important;
            color: white !important;
            padding: 15px !important;
            font-size: 16px !important;
            width: 100% !important;
            margin-top: 5px !important;
            margin-bottom: 20px !important;
            transition: all 0.3s ease !important;
        }
        .login input:focus {
            border-color: #C9A84C !important;
            box-shadow: 0 0 0 2px rgba(201, 168, 76, 0.2) !important;
            outline: none !important;
        }
        .wp-pwd button {
            color: #71717a !important;
            transition: color 0.3s ease !important;
            border: none !important;
            background: none !important;
            box-shadow: none !important;
            outline: none !important;
            padding: 0 !important;
            width: 40px !important;
            height: 40px !important;
            top: 5px !important;
            right: 5px !important;
        }
        .wp-pwd button:hover, .wp-pwd button:focus, .wp-pwd button:active {
            color: #C9A84C !important;
            box-shadow: none !important;
            outline: none !important;
            background: none !important;
        }
        .wp-pwd button .dashicons {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            height: 100% !important;
        }
        .login .forgetmenot {
            margin-bottom: 20px !important;
            display: flex !important;
            align-items: center !important;
            gap: 10px !important;
            float: none !important;
        }
        .login .forgetmenot input[type="checkbox"] {
            margin: 0 !important;
            background: rgba(255, 255, 255, 0.05) !important;
            border: 1px solid rgba(255, 255, 255, 0.2) !important;
            border-radius: 4px !important;
        }
        .login .forgetmenot input[type="checkbox"]:checked {
            background: #C9A84C !important;
            border-color: #C9A84C !important;
        }
        .wp-core-ui .button-primary {
            background: #C9A84C !important;
            border: none !important;
            border-radius: 12px !important;
            box-shadow: 0 10px 20px -5px rgba(201, 168, 76, 0.4) !important;
            text-shadow: none !important;
            font-family: 'Inter', sans-serif !important;
            font-weight: 800 !important;
            text-transform: uppercase !important;
            letter-spacing: 0.1em !important;
            padding: 0 20px !important;
            height: 54px !important;
            line-height: 54px !important;
            width: 100% !important;
            margin-top: 10px !important;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
            color: #000 !important;
        }
        .wp-core-ui .button-primary:hover {
            background: #e7c365 !important;
            transform: translateY(-2px) !important;
            box-shadow: 0 15px 25px -5px rgba(201, 168, 76, 0.5) !important;
        }
        #nav, #backtoblog {
            text-align: center !important;
            margin: 20px 0 0 0 !important;
            padding: 0 !important;
        }
        #nav a, #backtoblog a {
            color: #71717a !important;
            font-size: 13px !important;
            transition: color 0.3s ease !important;
        }
        #nav a:hover, #backtoblog a:hover {
            color: #C9A84C !important;
        }
        .login #login_error, .login .message, .login .success {
            border-left: 4px solid #C9A84C !important;
            background: rgba(201, 168, 76, 0.05) !important;
            color: #ffffff !important;
            border-radius: 12px !important;
            box-shadow: none !important;
            margin-bottom: 20px !important;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'warisandigital_login_styling' );

// 7. Custom Login Logo Link
add_filter( 'login_headerurl', function() { return home_url(); } );
add_filter( 'login_headertext', function() { return 'WARISAN DIGITAL'; } );

