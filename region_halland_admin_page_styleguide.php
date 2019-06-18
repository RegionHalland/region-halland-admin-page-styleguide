<?php

	/**
	 * @package Region Halland Admin Page Styleguide
	 */
	/*
	Plugin Name: Region Halland Admin Page Styleguide
	Description: Styleguide för en page i admin
	Version: 1.1.0
	Author: Roland Hydén
	License: MIT
	Text Domain: regionhalland
	*/

	// Anropa metod för att lägga till js-fil
	add_action('admin_enqueue_scripts', 'my_enqueue_for_pages_styleguide');

	// Metod för att lägga till js-fil
	function my_enqueue_for_pages_styleguide($hook) {
		
		// Styleguide minified css
		wp_register_style('custom_wp_admin_css_styleguide', env('ADMIN_CSS_PATH'));
        wp_enqueue_style('custom_wp_admin_css_styleguide');

        // Styleguide compiled js
		wp_register_script('custom_wp_admin_js_styleguide', env('ADMIN_JS_PATH'));
        wp_enqueue_script('custom_wp_admin_js_styleguide');
		
		// TinyMCE editor styling
		add_editor_style(env('EDITOR_STYLE_NAME'));
	
	}
	
	// Metod som anropas när pluginen aktiveras
	function region_halland_admin_page_style_activate() {
		// Ingenting just nu...
	}

	// Metod som anropas när pluginen avaktiveras
	function region_halland_admin_page_style_deactivate() {
		// Ingenting just nu...
	}
	
	// Vilken metod som ska anropas när pluginen aktiveras
	register_activation_hook( __FILE__, 'region_halland_admin_page_style_activate');

	// Vilken metod som ska anropas när pluginen avaktiveras
	register_deactivation_hook( __FILE__, 'region_halland_admin_page_style_deactivate');

?>