<?php
// Change all instances of "custom" to theme name.
// To add more sections, settings and controls, copy lines 6-20 and paste theme below GA section.
function custom_theme_customizer( $wp_customize ) {
	// Section area 
	$wp_customize->add_section( 'custom_ga_section' , array(
	    'title'       => __( 'Google Analytics Code', 'custom' ),
	    'priority'    => 30,
	    'description' => 'Add the GA UA here.',
		) );
		
		// New setting
		$wp_customize->add_setting( 'custom_ga_text');
		
		// New control
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'custom_ga_text', array(
	    'label'    => __( 'Google Analytics Code', 'custom' ),
	    'section'  => 'custom_ga_section',
	    'settings' => 'custom_ga_text',
	) ) );

}
add_action( 'customize_register', 'custom_theme_customizer' );