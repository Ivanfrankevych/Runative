<?php /* Template Name: Careers*/ ?>
<?php get_header() ?>
<main>
    <section class="about_banner">
        <div class="text">
            <h1><?php the_field( 'baner_heading' ); ?></h1>
            <p><?php the_field( 'baner_description' ); ?></p>
        </div>
        <?php $baner_image = get_field( 'baner_image' ); ?>
        <?php if ( $baner_image ) : ?>
        <img src="<?php echo esc_url( $baner_image['url'] ); ?>" alt="<?php echo esc_attr( $baner_image['alt'] ); ?>" />
        <?php endif; ?>
    </section>
    <section class="publishers_service" style="background-image: url(<?php echo esc_url( get_field( 'careers_bg', 'option' )['url'] ); ?>)">
        <h2 class="container"><?php the_field( 'benefits_heading' ); ?></h2>
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
    <section class="formats_wrapper container">
        <h2><?php the_field( 'positions_heading' ); ?></h2>
        <?php if ( have_rows( 'position' ) ) : ?>
        <?php while ( have_rows( 'position' ) ) : the_row(); ?>
        <div class="wrap" data-aos="fade-up">
            <div class="left">
                <?php $position_image = get_sub_field( 'position_image' ); ?>
                <?php if ( $position_image ) : ?>
                <img src="<?php echo esc_url( $position_image['url'] ); ?>" alt="<?php echo esc_attr( $position_image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            <div class="right">
                <h3><?php the_sub_field( 'position_heading' ); ?></h3>
                <p><?php the_sub_field( 'position_description' ); ?></p>
                <a href="<?php echo esc_url( get_sub_field( 'position_button' )); ?>" class="arrow_button">
                    <?php the_field( 'learn_more', 'option' ); ?><span></span>
                </a>
            </div>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
        <?php // no rows found ?>
        <?php endif; ?>
    </section>
</main>
<?php get_footer() ?>
