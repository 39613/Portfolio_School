<?php
/**
 * The header for the portfolio theme.
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
    <a class="site-branding" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php bloginfo( 'name' ); ?>
    </a>
    <nav class="main-navigation" aria-label="<?php esc_attr_e( 'Hoofdnavigatie', 'first_thema_portfolio' ); ?>">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary',
                'fallback_cb'    => false,
                'container'      => false,
            )
        );
        ?>
        <?php if ( ! has_nav_menu( 'primary' ) ) : ?>
            <ul>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                <li><a href="<?php echo esc_url( home_url( '/over-mij/' ) ); ?>">Over mij</a></li>
                <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
            </ul>
        <?php endif; ?>
    </nav>
</header>
