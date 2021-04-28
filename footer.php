<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cliensite
 */

?>

<footer style="background-image: url(<?php echo esc_url( get_field( 'footer_bg', 'option' )['url'] ); ?>)">
    <div class="container">
        <div class="top">
            <div class="left">
                <a href="/" class="logo">
                    <?php $logo = get_field( 'logo', 'option' ); ?>
                    <?php if ( $logo ) : ?>
                    <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
                    <?php endif; ?></a>
            </div>
            <div class="right">
                <div class="column">
                    <h4><?php the_field( 'platform', 'option' ); ?></h4>
                    <?php
            wp_nav_menu( [
                'menu'            => 'Footer_1', 
                'menu_class'      => 'main_menu', 
            ] ); ?>
                </div>
                <div class="column">
                    <h4><?php the_field( 'company', 'option' ); ?></h4>
                    <?php
            wp_nav_menu( [
                'menu'            => 'Footer_2', 
                'menu_class'      => 'main_menu', 
            ] ); ?>
                </div>
                <div class="column">
                    <h4><?php the_field( 'get_started', 'option' ); ?></h4>
                    <?php
            wp_nav_menu( [
                'menu'            => 'Footer_3', 
                'menu_class'      => 'main_menu', 
            ] ); ?>
                </div>
            </div>
        </div>
        <div class="bottom">
            <?php
            wp_nav_menu( [
                'menu'            => 'Footer_pages', 
                'menu_class'      => 'main_menu', 
            ] ); ?>
        </div>
    </div>
</footer>
<!--<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>-->

<?php wp_footer(); ?>

</body>

</html>
