<?php /* Template Name: Formats*/ ?>
<?php get_header() ?>
<main class="formats" style="background-image: url(<?php echo esc_url( get_field( 'formats_bg_1', 'option' )['url'] ); ?>)">
    <section class="container formats_banner" data-aos="fade-right">
        <h1><?php the_field( 'our_ad_formats_heading' ); ?></h1>
        <p><?php the_field( 'our_ad_formats_description' ); ?></p>
    </section>
    <section class="formats_wrapper container">
        <?php if ( have_rows( 'format' ) ) : ?>
        <?php while ( have_rows( 'format' ) ) : the_row(); ?>
        <div class="wrap" data-aos="fade-up">
            <div class="left">
                <?php $format_icon = get_sub_field( 'format_icon' ); ?>
                <?php if ( $format_icon ) : ?>
                <img src="<?php echo esc_url( $format_icon['url'] ); ?>" alt="<?php echo esc_attr( $format_icon['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            <div class="right">
                <h3><?php the_sub_field( 'format_heading' ); ?></h3>
                <p><?php the_sub_field( 'format_description' ); ?></p>
            </div>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
        <?php // no rows found ?>
        <?php endif; ?>
    </section>
    <section class="container formats_blocks">
        <?php if ( have_rows( 'cards' ) ) : ?>
        <?php while ( have_rows( 'cards' ) ) : the_row(); ?>
        <div class="wrap" data-aos="fade-up">
            <?php $card_icon = get_sub_field( 'card_icon' ); ?>
            <?php if ( $card_icon ) : ?>
            <img src="<?php echo esc_url( $card_icon['url'] ); ?>" alt="<?php echo esc_attr( $card_icon['alt'] ); ?>" />
            <?php endif; ?>
            <h3><?php the_sub_field( 'card_heading' ); ?></h3>
            <p><?php the_sub_field( 'card_description' ); ?></p>
            <a href="<?php echo esc_url( get_sub_field( 'button_link' )); ?>" class="arrow_button"><?php the_field( 'learn_more', 'option' ); ?> <span></span></a>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
        <?php // no rows found ?>
        <?php endif; ?>
    </section>
</main>



<?php get_footer() ?>
