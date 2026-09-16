<?php

function first_thema_portfolio_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus(
        array(
            'primary' => __( 'Hoofdmenu', 'first_thema_portfolio' ),
        )
    );
}
add_action( 'after_setup_theme', 'first_thema_portfolio_setup' );

function first_thema_portfolio_assets() {
    wp_enqueue_style(
        'first-thema-portfolio-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'first_thema_portfolio_assets' );