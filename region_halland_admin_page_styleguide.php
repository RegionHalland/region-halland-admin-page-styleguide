<?php

	/**
	 * @package Region Halland Admin Page Styleguide
	 */
	/*
	Plugin Name: Region Halland Admin Page Styleguide
	Description: Lägg till css/js i admin och/eller en css för wordpress editor
	Version: 1.3.0
	Author: Roland Hydén
	License: GPL-3.0
	Text Domain: regionhalland
	*/

	// Anropa metod för att lägga till css/js-filer
	add_action('admin_enqueue_scripts', 'my_enqueue_for_region_halland_admin_page_styleguide');

	// Metod för att lägga till css/js-filer
	function my_enqueue_for_region_halland_admin_page_styleguide($hook) {
		
		// Kontrollera om det finns en angiven css för adminb
		$myAdminCss = ENV('ADMIN_CSS_PATH');
		$useMyAdminCss = 0;
		if (strlen($myAdminCss) > 0) {
			$useMyAdminCss = 1;
		}
		
		// Kontrollera om det finns en angiven js för adminb
		$myAdminJs = ENV('ADMIN_JS_PATH');
		$useMyAdminJs = 0;
		if (strlen($myAdminJs) > 0) {
			$useMyAdminJs = 1;
		}

		// Kontrollera om det finns en angiven css för wordpress editor
		$myEditorStyle = ENV('EDITOR_STYLE_NAME');
		$useMyEditorStyle = 0;
		if (strlen($myEditorStyle) > 0) {
			$useMyEditorStyle = 1;
		}
		
		// Styleguide minified css
		if ($useMyAdminCss == 1) {
			wp_register_style('custom_wp_admin_css_styleguide', $myAdminCss);
	        wp_enqueue_style('custom_wp_admin_css_styleguide');
		}

        // Styleguide compiled js
		if ($useMyAdminJs == 1) {
			wp_register_script('custom_wp_admin_js_styleguide', $myAdminJs);
	        wp_enqueue_script('custom_wp_admin_js_styleguide');
		}
		
		// TinyMCE editor styling
		if ($useMyEditorStyle == 1) {
			add_editor_style($myEditorStyle);
		}
	
	}
	
	// Metod som anropas när pluginen aktiveras
	function region_halland_admin_page_styleguide_activate() {
		// Ingenting just nu...
	}

	// Metod som anropas när pluginen avaktiveras
	function region_halland_admin_page_styleguide_deactivate() {
		// Ingenting just nu...
	}
	
	// Vilken metod som ska anropas när pluginen aktiveras
	register_activation_hook( __FILE__, 'region_halland_admin_page_styleguide_activate');

	// Vilken metod som ska anropas när pluginen avaktiveras
	register_deactivation_hook( __FILE__, 'region_halland_admin_page_styleguide_deactivate');

?>