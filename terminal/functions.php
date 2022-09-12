<?php

if ( ! function_exists( 'terminal_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Terminal
	 *
	 * @return void
	 */
	function terminal_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'terminal_support' );

if ( ! function_exists( 'terminal_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Terminal
	 *
	 * @return void
	 */
	function terminal_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'terminal-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'terminal-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'terminal_styles' );
