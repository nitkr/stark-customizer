<?php
/**
 * Stark Customizer
 * @package   Stark Customizer
 * @author    Nithin K R
 * @license   GNU GPLv3, http://www.gnu.org/licenses/gpl-3.0.txt
 * @version 0.5
 * @copyright 2014 Stark Customizer
 *
 */

function stark_customizer_init() {


	require_once (get_stylesheet_directory().'/stark-customizer/class/class.stark-customizer.php');
	require_once (get_stylesheet_directory().'/stark-customizer/class/class.stark-customizer-settings.php');

	if( class_exists('Stark_Customizer') ) {

		$stark_customizer = new Stark_Customizer();

		$stark_customizer->init();
	}

}

add_action( 'init', 'stark_customizer_init', 20 );
