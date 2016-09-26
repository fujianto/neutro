<?php
/**
 * Creates theme customizer
 *
 * @package Neutro
 * @subpackage Functions
 * @link https://codex.wordpress.org/Theme_Customization_API
 * @since 1.0
 */

add_action( 'customize_register', 'neutro_register_customizer');

function neutro_register_customizer($wp_customize){

	//Logo section
	$wp_customize->add_section('neutro_logo', array(
		'title' 		=> __('Logo', 'neutro'),
		'description' 	=> __('Upload your Website logo here', 'neutro'),
		'priority'		=> '35'
	));

	/* Theme Customizer setting & control */	
	
	/* Display logo setting & control */
	$wp_customize->add_setting('display_logo', array(
		'default'=>'0',
		'type' => 'theme_mod',
		'sanitize_callback' => 'neutro_sanitize_display_logo' 
	));
	
	$wp_customize->add_control('display_logo', array(
		'label'=> 'Display Website logo?',
		'section'=>'neutro_logo',
		'settings'=>'display_logo',
		'type'=>'checkbox'	
	));

	 /*Logo upload setting &control*/	
	$wp_customize->add_setting('neutro_logo_url', array(
		'default' => THEME_URI.'/images/logo.png',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'theme_mod',
		'sanitize_callback' => 'neutro_sanitize_image'
	));
		
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'neutro_logo', array(
		'label' => __('Upload Website logo', 'neutro'),
		'section' => 'neutro_logo',
		'settings' => 'neutro_logo_url'
	)));

	//Theme setting section
	$wp_customize->add_section('theme_settings', array(
		'title' 		=> __('Theme Settings', 'neutro'),
		'description' 	=> __('Customize theme options on this section', 'neutro'),
		'priority'		=> '30'
	));

	/* Display Slider setting */
	$wp_customize->add_setting('neutro_theme_settings[featured_slider_display]', array(
		'default'=>'1',
		'type' => 'option',
		'sanitize_callback' => 'neutro_sanitize_display_logo' 
	));
	
	$wp_customize->add_control('neutro_theme_settings[featured_slider_display]', array(
		'label'    =>  __('Disable slider?', 'neutro'),
		'section'  => 'theme_settings',
		'settings' => 'neutro_theme_settings[featured_slider_display]',
		'type'     => 'checkbox'	
	));

	/* Display Featured Categories */
	$wp_customize->add_setting('neutro_theme_settings[featured_slider_categories]', array(
		'default'=>'',
		'type' => 'option',
		'sanitize_callback' => 'neutro_sanitize_taxonomy_dropdown'
	));

	$wp_customize->add_control( new Category_Dropdown_Custom_Control( $wp_customize, 'neutro_theme_settings[featured_slider_categories]', array(
            'label'      => __('Featured Categories', 'neutro'),
            'section'    => 'theme_settings',
            'settings'   => 'neutro_theme_settings[featured_slider_categories]'
    ) ) );

    /* Display Custom CSS setting */
	$wp_customize->add_setting('neutro_theme_settings[custom_css]', array(
		'default'           =>'',
		'type'              => 'option',
		'sanitize_callback' => 'neutro_sanitize' 
	));
	
	$wp_customize->add_control('neutro_theme_settings[custom_css]', array(
		'label'    =>  __('Custom CSS', 'neutro'),
		'section'  => 'theme_settings',
		'settings' => 'neutro_theme_settings[custom_css]',
		'type'     => 'textarea'	
	));

	 /* Display Text Area setting */
	$wp_customize->add_setting('neutro_theme_settings[footer_insert]', array(
		'default'           => '',
		'type'              => 'option',
		'sanitize_callback' => 'neutro_sanitize' 
	));
	
	$wp_customize->add_control('neutro_theme_settings[footer_insert]', array(
		'label'    =>  __('Footer settings', 'neutro'),
		'section'  => 'theme_settings',
		'settings' => 'neutro_theme_settings[footer_insert]',
		'type'     => 'textarea'	
	));

	/* Modify link color */
	$wp_customize->add_setting('neutro_customizer[link_color]', array(
		'default'=>'#3498db',
		'transport'   => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type' => 'theme_mod' 
	));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'neutro_customizer[link_color]', array( 
    	'label' =>  __('Link color', 'neutro'), 
    	'section' => 'colors'
 	)));

	/* Modify header color */
	$wp_customize->add_setting('neutro_customizer[header_color]', array(
		'default'=>'#ecf0f1',
		'transport'   => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type' => 'theme_mod' 
	));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'neutro_customizer[header_color]' , array( 
    	'label' =>  __('Header color', 'neutro'), 
    	'section' => 'colors'
 	)));


 	/* Modify secondary menu color */
	$wp_customize->add_setting('neutro_customizer[secondary_menu_color]', array(
		'default'=>'#2c3e50',
		'transport'   => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type' => 'theme_mod' 
	));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'neutro_customizer[secondary_menu_color]', array( 
    	'label' =>  __('Secondary menu color', 'neutro'), 
    	'section' => 'colors'
 	)));
 	

 	/* Modify footer color */
	$wp_customize->add_setting('neutro_customizer[footer_color]', array(
			'default'=>'#2c3e50',
			'transport'   => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
	    	'type' => 'theme_mod' 
		));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'neutro_customizer[footer_color]', array( 
    	'label' =>  __('Footer color', 'neutro'), 
    	'section' => 'colors'
 	)));
}
?>