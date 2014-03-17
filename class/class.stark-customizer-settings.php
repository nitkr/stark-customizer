<?php
/**
 * @package   Stark Customizer
 * @author    Nithin K R
 * @license   GNU GPLv3, http://www.gnu.org/licenses/gpl-3.0.txt
 * @copyright 2014 Stark Customizer
 * 
 */
class Stark_Customizer_Settings {


	public static function stark_customizer_register_settings( $wp_customize  ) {
	
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
      	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

		$options = &Stark_Customizer::stark_customizer_get_options();

		foreach ($options as $key => $value) {

			switch( $key ) {

				case 'section':
					foreach( $value as $id => $real_val ) {
						$wp_customize->add_section( $id, $real_val );
					}
				break;
	
				case 'setting':
					foreach( $value as $id => $real_val ) {
						$wp_customize->add_setting( $id, $real_val );
					}
				break;

				case 'control':
					foreach( $value as $id => $real_val ) {
						$wp_customize->add_control( $id, $real_val );
				}
			
				break;

				case 'customize_color_control':
					foreach( $value as $id => $real_val ) {
						$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $id, $real_val ) );

				}

				break;

				case 'customize_image_control':
					foreach( $value as $id => $real_val ) {
						$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $id, $real_val ) );

				}

				break;

			} //end of switch

		}

	}

	public static function stark_customizer_live_preview() {

		$path = apply_filters( 'stark_customizer_js_location', array('stark-customizer/js/stark-customizer.js') );

			if( locate_template( $path ) ) {

				wp_enqueue_script( 'stark-themecustomizer', get_template_directory_uri() ."/".$path[0], array(  'jquery', 'customize-preview' ), '1.0', true );	

			}
	}

}
