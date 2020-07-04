<?php
/*
Plugin Name: Responsive Demo
Plugin URI:  https://in3days.website
Description: This Divi extension demonstrates how some external site looks on different devices. It could be a good tool to create your portfolio.
Version:     1.0.0
Author:      Vasyl Yaremchuk
Author URI:  https://abzats.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: rede-responsive-demo
Domain Path: /languages

Responsive Demo is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Responsive Demo is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Responsive Demo. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


if ( ! function_exists( 'rede_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function rede_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/ResponsiveDemo.php';
}
add_action( 'divi_extensions_init', 'rede_initialize_extension' );
endif;
