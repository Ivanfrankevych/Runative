<?php /* Template Name: Publishers*/ ?>
<?php get_header() ?>
<main>
    <section class="publishers_banner" style="background-image: url(<?php echo esc_url( get_field( 'publishers_bg_1', 'option' )['url'] ); ?>)">
        <div class="container">
            <div class="left" data-aos="fade-right">
                <h1><?php the_field( 'banner_heading' ); ?></h1>
                <p><?php the_field( 'banner_description' ); ?></p>
                <a href="<?php the_field( 'banner_button_url' ); ?>" class="orange_button"><?php the_field( 'scale_with_us', 'option' ); ?></a>
            </div>
            <div class="right" data-aos="fade-left">
                <?php $banner_image = get_field( 'banner_image' ); ?>
                <?php if ( $banner_image ) : ?>
                <img src="<?php echo esc_url( $banner_image['url'] ); ?>" alt="<?php echo esc_attr( $banner_image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
        </div>

    </section>
    <div class="publishers_under_banner" style="background-image: url(<?php echo esc_url( get_field( 'publishers_bg_2', 'option' )['url'] ); ?>)">
        <section class="info">
            <div class="container">
                <?php if ( have_rows( 'purple_benefit' ) ) : ?>
                <?php while ( have_rows( 'purple_benefit' ) ) : the_row(); ?>
                <div class="wrap" data-aos="fade-up">
                    <div class="left">
                        <?php $purple_benefit_icon = get_sub_field( 'purple_benefit_icon' ); ?>
                        <?php if ( $purple_benefit_icon ) : ?>
                        <img src="<?php echo esc_url( $purple_benefit_icon['url'] ); ?>" alt="<?php echo esc_attr( $purple_benefit_icon['alt'] ); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="right">
                        <h4><?php the_sub_field( 'purple_benefit_heading' ); ?></h4>
                        <p><?php the_sub_field( 'purple_benefit_description' ); ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                <?php // no rows found ?>
                <?php endif; ?>
            </div>
        </section>
        <section class="top_performing container">
            <div class="left" data-aos="fade-right">
                <?php $performance_image = get_field( 'performance_image' ); ?>
                <?php if ( $performance_image ) : ?>
                <img src="<?php echo esc_url( $performance_image['url'] ); ?>" alt="<?php echo esc_attr( $performance_image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            <div class="right" data-aos="fade-left">
                <h3><?php the_field( 'performance_heading' ); ?></h3>
                <p><?php the_field( 'performance_description' ); ?></p>
                <blockquote>
                    <?php the_field( 'performance_description_purple' ); ?>
                </blockquote>
                <a href="<?php the_field( 'performance_button_url' ); ?>" class="arrow_button">
                    <?php the_field( 'learn_more', 'option' ); ?>
                    <span></span>
                </a>
            </div>
        </section>
    </div>
    <section class="monetization" style="background-image: url(<?php echo esc_url( get_field( 'publishers_bg_3', 'option' )['url'] ); ?>)">
        <div class="container">
            <h2 data-aos="fade-down"><?php the_field( 'benefits_heading' ); ?></h2>
            <p data-aos="fade-down"><?php the_field( 'benefits_description' ); ?></p>
            <div class="wrapper">
                <?php if ( have_rows( 'benefit' ) ) : ?>
                <?php while ( have_rows( 'benefit' ) ) : the_row(); ?>
                <div class="wrap" data-aos="fade-up">
                    <?php $benefit_icon = get_sub_field( 'benefit_icon' ); ?>
                    <?php if ( $benefit_icon ) : ?>
                    <img src="<?php echo esc_url( $benefit_icon['url'] ); ?>" alt="<?php echo esc_attr( $benefit_icon['alt'] ); ?>" />
                    <?php endif; ?> <h4><?php the_sub_field( 'benefit_heading' ); ?></h4>
                    <p><?php the_sub_field( 'benefit_description' ); ?></p>
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                <?php // no rows found ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="become_publisher">
        <div class="container">
            <div class="left" data-aos="fade-right">
                <?php $become_a_publisher_image = get_field( 'become_a_publisher_image' ); ?>
                <?php if ( $become_a_publisher_image ) : ?>
                <img src="<?php echo esc_url( $become_a_publisher_image['url'] ); ?>" alt="<?php echo esc_attr( $become_a_publisher_image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            <div class="right" data-aos="fade-left">
                <h2><?php the_field( 'become_a_publisher_heading' ); ?></h2>
                <p><?php the_field( 'become_a_publisher_description' ); ?></p>
                <a href="<?php the_field( 'become_a_publisher_button_url' ); ?>" class="orange_button"><?php the_field( 'scale_with_us', 'option' ); ?></a>
            </div>
        </div>
    </section>
</main>



<?php get_footer() ?>
