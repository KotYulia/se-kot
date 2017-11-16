<?php
/**
 * Settings for the How it works page
 */
// Creates Custom Post Type Start Variants
function start_variants_init() {
    $args = array(
        'label' => 'Start Variants',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'start-variants'),
        'query_var' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
    );
    register_post_type( 'start-variants', $args );
}
add_action( 'init', 'start_variants_init' );

/**
 * Settings for the About us page
 */

// Creates Custom Post Type Team
function team_init() {
    $args = array(
        'label' => 'Team',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'team'),
        'query_var' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
    );
    register_post_type( 'team', $args );
}
add_action( 'init', 'team_init' );
