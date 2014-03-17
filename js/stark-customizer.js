/* Stark Customizer js file, this is the default file enqueued to make Theme Customizer preview reload changes asynchronously
   @package Stark Customizer
   @copyright 2014 Stark Customizer
*/
(function( $ ) {
 
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

})( jQuery );
