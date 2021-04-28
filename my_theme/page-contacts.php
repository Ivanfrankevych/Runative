<?php /* Template Name: Contact Us*/ ?>
<?php get_header() ?>
<section class="contacts_page" style="background-image: url(<?php echo esc_url( get_field( 'contacts_bg_2', 'option' )['url'] ); ?>)">
    <div class="container">
        <h1><?php the_title();?></h1>
        <p><?php the_field( 'subheading' ); ?></p>
        <div class="socials">
            <a href="<?php the_field( 'instagram_url', 'option' ); ?>">
                <?php $instagram_icon = get_field( 'instagram_icon', 'option' ); ?>
                <?php if ( $instagram_icon ) : ?>
                <img src="<?php echo esc_url( $instagram_icon['url'] ); ?>" alt="<?php echo esc_attr( $instagram_icon['alt'] ); ?>" />
                <?php endif; ?>
            </a>
            <a href="<?php the_field( 'facebook_url', 'option' ); ?>">
                <?php $facebook_icon = get_field( 'facebook_icon', 'option' ); ?>
                <?php if ( $facebook_icon ) : ?>
                <img src="<?php echo esc_url( $facebook_icon['url'] ); ?>" alt="<?php echo esc_attr( $facebook_icon['alt'] ); ?>" />
                <?php endif; ?>
            </a>
            <a href="<?php the_field( 'linkedin_url', 'option' ); ?>">
                <?php $linkedin_icon = get_field( 'linkedin_icon', 'option' ); ?>
                <?php if ( $linkedin_icon ) : ?>
                <img src="<?php echo esc_url( $linkedin_icon['url'] ); ?>" alt="<?php echo esc_attr( $linkedin_icon['alt'] ); ?>" />
                <?php endif; ?>
            </a>
            <a href="<?php the_field( 'vk_url', 'option' ); ?>">
                <?php $vk_icon = get_field( 'vk_icon', 'option' ); ?>
                <?php if ( $vk_icon ) : ?>
                <img src="<?php echo esc_url( $vk_icon['url'] ); ?>" alt="<?php echo esc_attr( $vk_icon['alt'] ); ?>" />
                <?php endif; ?>
            </a>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="259" title="Contact Us"]');?>

    </div>
</section>

<?php get_footer() ?>
