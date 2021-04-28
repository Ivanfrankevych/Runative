<?php /* Template Name: Bidding*/ ?>
<?php get_header() ?>
<main>
    <section class="real_banner" style="background-image: url(<?php echo esc_url( get_field( 'rtb_bg_1', 'option' )['url'] ); ?>)">
        <div class="container">
            <div class="left" data-aos="fade-right">
                <h1><?php the_field( 'banner_heading' ); ?></h1>
                <p><?php the_field( 'banner_description' ); ?></p>
            </div>
            <div class="right" data-aos="fade-left">
                <?php $banner_image = get_field( 'banner_image' ); ?>
                <?php if ( $banner_image ) : ?>
                <img src="<?php echo esc_url( $banner_image['url'] ); ?>" alt="<?php echo esc_attr( $banner_image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="real_under_banner container">
        <div class="wrap" data-aos="fade-right">
            <div class="left">
                <?php $ssp_image = get_field( 'ssp_image' ); ?>
                <?php if ( $ssp_image ) : ?>
                <img src="<?php echo esc_url( $ssp_image['url'] ); ?>" alt="<?php echo esc_attr( $ssp_image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            <div class="right">
                <h4><?php the_field( 'ssp_heading' ); ?></h4>
                <p><?php the_field( 'ssp_description' ); ?></p>
            </div>
        </div>
        <div class="wrap" data-aos="fade-left">
            <div class="left">
                <?php $dsp_image = get_field( 'dsp_image' ); ?>
                <?php if ( $dsp_image ) : ?>
                <img src="<?php echo esc_url( $dsp_image['url'] ); ?>" alt="<?php echo esc_attr( $dsp_image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            <div class="right">
                <h4><?php the_field( 'dsp_heading' ); ?></h4>
                <p><?php the_field( 'dsp_description' ); ?></p>
            </div>
        </div>
    </section>
    <div class="real_bg" style="background-image: url(<?php echo esc_url( get_field( 'rtb_bg_2', 'option' )['url'] ); ?>)">
        <section class="supported_formats">
            <div class="container">
                <h2 data-aos="fade-down"><?php the_field( 'formats_heading' ); ?></h2>
                <div class="wrapper">
                    <?php if ( have_rows( 'format' ) ) : ?>
                    <?php while ( have_rows( 'format' ) ) : the_row(); ?>
                    <div class="wrap" data-aos="fade-up">
                        <?php $format_icon = get_sub_field( 'format_icon' ); ?>
                        <?php if ( $format_icon ) : ?>
                        <img src="<?php echo esc_url( $format_icon['url'] ); ?>" alt="<?php echo esc_attr( $format_icon['alt'] ); ?>" />
                        <?php endif; ?>
                        <p><?php the_sub_field( 'format_heading' ); ?></p>
                    </div>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php // no rows found ?>
                    <?php endif; ?>

                </div>
                <a data-aos="fade-up" href="<?php the_field( 'formats_button_url' ); ?>" class="arrow_button"><?php the_field( 'learn_more', 'option' ); ?><span></span></a>
            </div>
        </section>
        <section class="container supported_protocols" data-aos="flip-left">
            <div class="left">
                <?php $protocols_image = get_field( 'protocols_image' ); ?>
                <?php if ( $protocols_image ) : ?>
                <img src="<?php echo esc_url( $protocols_image['url'] ); ?>" alt="<?php echo esc_attr( $protocols_image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            <div class="right">
                <h3><?php the_field( 'protocols_heading' ); ?></h3>
                <p><?php the_field( 'protocols_description' ); ?></p>
                <a href="<?php the_field( 'protocols_button_url' ); ?>" class="orange_button"><?php the_field( 'technical_documentation', 'option' ); ?></a>
            </div>
        </section>
        <section class="benefits container">
            <h2 data-aos="fade-down"><?php the_field( 'heading_benefits_publishers' ); ?></h2>
            <div class="wrapper">
                <div class="wrap">
                    <h3 data-aos="fade-right"><?php the_field( 'heading_benefits_publishers' ); ?></h3>
                    <?php if ( have_rows( 'benefits_for_publishers' ) ) : ?>
                    <?php while ( have_rows( 'benefits_for_publishers' ) ) : the_row(); ?>
                    <p data-aos="fade-up">
                        <?php the_sub_field( 'benefit_for_publisher' ); ?>
                        <span>
                            <span></span>
                        </span>
                    </p>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php // no rows found ?>
                    <?php endif; ?>
                    <a data-aos="fade-up" href="<?php the_field( 'apply_now_as_ssp_url' ); ?>" class="orange_button">
                        <?php the_field( 'apply_now_as_ssp', 'option' ); ?> </a>
                </div>
                <div class="wrap">
                    <h3 data-aos="fade-left"><?php the_field( 'heading_advertisers' ); ?></h3>
                    <?php if ( have_rows( 'benefits_for_advertisers' ) ) : ?>
                    <?php while ( have_rows( 'benefits_for_advertisers' ) ) : the_row(); ?>
                    <p data-aos="fade-up">
                        <?php the_sub_field( 'benefit_for_advertisers' ); ?> <span>
                            <span></span>
                        </span>
                    </p>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php // no rows found ?>
                    <?php endif; ?>
                    <a data-aos="fade-up" href="<?php the_field( 'apply_now_as_dsp_url' ); ?>" class="orange_button">
                        <?php the_field( 'apply_now_as_dsp', 'option' ); ?> </a>
                </div>
            </div>
        </section>
    </div>
</main>



<?php get_footer() ?>
