<?php /* Template Name: Advertisers*/ ?>
<?php get_header() ?>
<main>
    <section class="publishers_banner" style="background-image: url(<?php echo esc_url( get_field( 'ad_bg_1', 'option' )['url'] ); ?>)">
        <div class="container">
            <div class="left" data-aos="fade-right">
                <h1><?php the_field( 'banner_heading' ); ?>
                </h1>
                <p><?php the_field( 'banner_description' ); ?></p>
                <a href="" class="orange_button"><?php the_field( 'scale_with_us', 'option' ); ?></a>
            </div>
            <div class="right" data-aos="fade-left">
                <?php $banner_image = get_field( 'banner_image' ); ?>
                <?php if ( $banner_image ) : ?>
                <img src="<?php echo esc_url( $banner_image['url'] ); ?>" alt="<?php echo esc_attr( $banner_image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="publishers_service" style="background-image: url(<?php echo esc_url( get_field( 'ad_bg_2', 'option' )['url'] ); ?>)">
        <div class="container">
            <?php if ( have_rows( 'benefit' ) ) : ?>
            <?php while ( have_rows( 'benefit' ) ) : the_row(); ?>
            <div class="wrap" data-aos="flip-up">
                <?php $benefit_icon = get_sub_field( 'benefit_icon' ); ?>
                <?php if ( $benefit_icon ) : ?>
                <img src="<?php echo esc_url( $benefit_icon['url'] ); ?>" alt="<?php echo esc_attr( $benefit_icon['alt'] ); ?>" />
                <?php endif; ?>
                <h4><?php the_sub_field( 'benefit_heading' ); ?></h4>
                <p><?php the_sub_field( 'benefit_description' ); ?></p>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php // no rows found ?>
            <?php endif; ?>
        </div>
    </section>
    <section class="publishers_get_started">
        <div class="container">
            <h2 data-aos="fade-down"><?php the_field( 'purple_section_heading' ); ?></h2>
            <p data-aos="fade-down"><?php the_field( 'purple_section_description' ); ?></p>
            <a data-aos="fade-up" href="<?php the_field( 'purple_section_button_url' ); ?>" class="orange_button"><?php the_field( 'get_started', 'option' ); ?></a>
        </div>
    </section>
</main>



<?php get_footer() ?>
