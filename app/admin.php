<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});

// Custom FAVICON for admin
function cc_admin_add_favicon() {
    // close asset paths with ') . '
    echo
    '<link rel="apple-touch-icon" sizes="180x180" href="'.asset_path('images/favicon/apple-touch-icon.png').'">';
		'<link rel="icon" type="image/png" sizes="32x32" href="'.asset_path('images/favicon/favicon-32x32.png').'">';
		'<link rel="icon" type="image/png" sizes="16x16" href="'.asset_path('images/favicon/favicon-16x16.png').'">';
		'<link rel="manifest" href="'.asset_path('images/favicon/site.webmanifest').'">';
		'<link rel="mask-icon" href="'.asset_path('images/favicon/safari-pinned-tab.svg').'" color="#5bbad5">';
		'<link rel="shortcut icon" href="'.asset_path('images/favicon/favicon.ico').'">';
		'<meta name="msapplication-TileColor"content="#da532c">';
		'<meta name="msapplication-config" content="'.asset_path('images/favicon/browserconfig.xml').'">';
		'<meta name="theme-color" content="#ffffff">';
}

// Now, just make sure that function runs when you're on the login page and admin pages
add_action('login_head', __NAMESPACE__.'\\cc_admin_add_favicon');
add_action('admin_head', __NAMESPACE__.'\\cc_admin_add_favicon');