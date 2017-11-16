<?php
function se_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'se_social_links' , array(
        'title'      => __( 'Social links', 'se' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'social_links_facebook' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_facebook', array(
        'label'        => __( 'Facebook', 'se' ),
        'section'    => 'se_social_links',
        'settings'   => 'social_links_facebook',
    ) ) );

    $wp_customize->add_setting( 'social_links_twitter' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_twitter', array(
        'label'        => __( 'Twitter', 'se' ),
        'section'    => 'se_social_links',
        'settings'   => 'social_links_twitter',
    ) ) );

    $wp_customize->add_setting( 'social_links_linkedin' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_linkedin', array(
        'label'        => __( 'Linkedin', 'se' ),
        'section'    => 'se_social_links',
        'settings'   => 'social_links_linkedin',
    ) ) );

    $wp_customize->add_setting( 'social_links_color' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_links_color', array(
        'label'        => __( 'Social links background color', 'hw' ),
        'section'    => 'se_social_links',
        'settings'   => 'social_links_color',
    ) ) );
}
add_action( 'customize_register', 'se_customize_register' );
