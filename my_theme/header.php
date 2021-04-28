<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cliensite
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <div class="container">
            <div class="left">
                <a href="/" class="logo">
                    <?php $logo = get_field( 'logo', 'option' ); ?>
                    <?php if ( $logo ) : ?>
                    <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
                    <?php endif; ?> </a>

                <?php
            wp_nav_menu( [
                'menu'            => 'Header', 
                'menu_class'      => 'main_menu', 
            ] ); ?>

            </div>
            <div class="buttons">
                <a href="<?php the_field( 'button_login_url', 'option' ); ?>"><?php the_field( 'button_login', 'option' ); ?></a>
                <a href="<?php the_field( 'button_register_url', 'option' ); ?>"><?php the_field( 'button_register', 'option' ); ?></a>
                <div class="burger">
                    <span></span>
                </div>
            </div>

        </div>
    </header>
