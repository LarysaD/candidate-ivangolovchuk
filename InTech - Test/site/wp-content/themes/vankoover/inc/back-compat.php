<?php


function vankoover_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );

	unset( $_GET['activated'] );

	add_action( 'admin_notices', 'vankoover_upgrade_notice' );
}
add_action( 'after_switch_theme', 'vankoover_switch_theme' );

function vankoover_upgrade_notice() {
	$message = sprintf( __( 'Vankoover requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'vankoover' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.4.
 *
 *
 * @global string $wp_version WordPress version.
 */
function vankoover_customize() {
	wp_die( sprintf( __( 'Vankoover requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'vankoover' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'vankoover_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.4.
 *
 *
 * @global string $wp_version WordPress version.
 */
function vankoover_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Vankoover requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'vankoover' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'vankoover_preview' );
