<?php
/**
 * Stark Customizer
 * @package   Stark Customizer
 * @author    Nithin K R
 * @license   GNU GPLv3, http://www.gnu.org/licenses/gpl-3.0.txt
 * @copyright 2014 Stark Customizer
 * 
 */

class Stark_Customizer {

	public function init() {
		
		add_action( 'customize_register' , array( 'Stark_Customizer_Settings' , 'stark_customizer_register_settings' ) );

		add_action( 'customize_preview_init' , array( 'Stark_Customizer_Settings' , 'stark_customizer_live_preview' ) );

	}

	static function &stark_customizer_get_options() {

		static $options = null;

		if( !$options )	{
			if( function_exists('stark_customize') ) {
				$options = stark_customize();
			}
		}

		return $options;

	}

}
