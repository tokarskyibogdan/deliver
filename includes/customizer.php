<?php
/**
 * _tk Theme Customizer
 *
 * @package _tk
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function _tk_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    /** footer section -------------------------------------------- */

    $wp_customize->add_section( 'footer' , array(
        'title'      => __( 'Footer', '_tk' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'footer-contact-info' , array(
        'default'   => 'Footer Contact info adress',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer-contact-info', array(
        'label'      => __( 'Footer Contact info text', '_tk' ),
        'section'    => 'footer',
        'settings'   => 'footer-contact-info',
    ) ) );

    $wp_customize->add_setting( 'footer-contact-info-email' , array(
        'default'   => 'Footer Contact info email',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer-contact-info-email', array(
        'label'      => __( 'Footer Contact info email', '_tk' ),
        'section'    => 'footer',
        'settings'   => 'footer-contact-info-email',
    ) ) );

    $wp_customize->add_setting( 'footer-contact-info-phone' , array(
        'default'   => 'Footer Contact info phone',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer-contact-info-phone', array(
        'label'      => __( 'Footer Contact info phone', '_tk' ),
        'section'    => 'footer',
        'settings'   => 'footer-contact-info-phone',
    ) ) );

    $wp_customize->add_setting( 'footer-about-description' , array(
        'default'   => 'Footer about description',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer-about-description', array(
        'label'      => __( 'Footer about description', '_tk' ),
        'section'    => 'footer',
        'settings'   => 'footer-about-description',
    ) ) );

    /** end of footer section -------------------------------------------- */

}
add_action( 'customize_register', '_tk_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function _tk_customize_preview_js() {
	wp_enqueue_script( '_tk_customizer', get_template_directory_uri() . '/includes/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', '_tk_customize_preview_js' );
