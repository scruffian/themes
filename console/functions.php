<?php

if ( ! function_exists( 'console_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Console
	 *
	 * @return void
	 */
	function console_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'console_support' );

if ( ! function_exists( 'console_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Console
	 *
	 * @return void
	 */
	function console_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'console-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'console-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'console_styles' );
