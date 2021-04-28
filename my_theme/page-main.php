<?php /* Template Name: Main*/ ?>
<?php get_header() ?>
<main>
assaasdd
    <section class="home_banner bg_banner" style="background-image: url(<?php echo esc_url( get_field( 'home_bg_1', 'option' )['url'] ); ?>)">
        <div class="container">
            <h1 data-aos="fade-down"><?php the_field( 'banner_heading' ); ?></h1>
            <p data-aos="fade-up"><?php the_field( 'banner_description' ); ?></p>
        </div>
    </section>
    <section class="container home_under_banner">
        <?php $i=1?>
        <?php if ( have_rows( 'card' ) ) : ?>
        <?php while ( have_rows( 'card' ) ) : the_row(); ?>
        <div class="wrap">
            <div class="top" data-aos="flip-up" data-aos-offset="-100">
                <h3><?php the_sub_field( 'card_heading' ); ?></h3>
                <p><?php the_sub_field( 'card_subheading' ); ?></p>
                <?php if ($i%3==1):?>
                <svg width="106" height="119" viewBox="0 0 106 119" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M87.5576 44C87.5576 50.9124 82.0276 56.4424 75.1152 56.4424C68.2028 56.4424 62.6728 50.9124 62.6728 44C62.6728 37.0875 68.2028 31.5576 75.1152 31.5576C81.9124 31.5576 87.5576 37.0875 87.5576 44ZM50 44C50 57.8249 61.1751 69 75 69C88.8249 69 100 57.8249 100 44C100 30.1751 88.8249 19 75 19C61.1751 19.1152 50 30.1751 50 44Z" fill="#796191" />
                    <path d="M74.7839 94C86.0724 94 97.1305 90.1985 106 83.0564V64.7402C94.4812 82.0196 71.2131 86.6275 53.9348 75.223C36.6565 63.7034 32.049 40.4338 43.4527 23.1544C54.9715 5.87497 78.2396 1.26716 95.5178 12.6716C99.6646 15.4363 103.235 19.0073 106 23.1544V9.56126C106 7.14214 105.078 4.83821 103.466 2.99507C102.199 1.95831 100.817 1.15192 99.3191 0.460742C98.3975 0.115154 97.476 0 96.4393 0H51.2855C26.9807 13.1324 17.8808 43.4289 31.0123 67.7353C39.7666 83.8628 56.469 94 74.7839 94Z" fill="#796191" />
                    <path d="M74.7501 106.566C40.3981 106.566 12.48 78.6857 12.48 44.1239C12.48 27.5342 19.0287 11.751 30.6325 0H14.3182C-9.92345 33.4097 -2.68543 80.2986 30.7474 104.607C52.5764 120.621 81.4137 123.501 106 112.095V98.0404C96.4642 103.685 85.7795 106.681 74.7501 106.566Z" fill="#796191" />
                </svg>
                <?php elseif ($i%3==2):?>
                <svg width="93" height="94" viewBox="0 0 93 94" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 0H0V19H18V0Z" fill="#796191" />
                    <path d="M56 0H37V19H56V0Z" fill="#796191" />
                    <path d="M56 37H37V56H56V37Z" fill="#796191" />
                    <path d="M93 0H75V19H93V0Z" fill="#796191" />
                    <path d="M18 37H0V56H18V37Z" fill="#796191" />
                    <path d="M19 75V94L0 93.6705V75" fill="#796191" />
                </svg>
                <?php else:?>
                <svg width="104" height="128" viewBox="0 0 104 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M60.0764 126.42C30.0236 116.817 9.09612 89.5878 7.51439 58.1045H37.689C38.419 87.5214 47.1793 112.684 60.0764 126.42ZM79.4223 127.878H86.966V58.1045H104V50.5679H87.0876V0H79.5439V50.5679H45.4759C45.9625 30.9971 50.4645 13.0066 57.2781 0H48.6394C42.3125 13.4929 38.2973 31.1187 37.9323 50.5679H7.63603C8.60941 31.3618 16.8831 13.3713 30.632 0H20.2899C-9.76297 34.6439 -5.99112 87.1567 28.6853 117.181C33.5521 121.314 38.784 124.961 44.5026 128H74.7988C58.8598 120.22 46.4493 91.7759 45.5976 58.2261H79.6657L79.4223 127.878Z" fill="#796191" />
                </svg>
                <?php endif;?>
            </div>
            <div class="bottom" data-aos="fade-up" data-aos-offset="-400">
                <?php $card_icon = get_sub_field( 'card_icon' ); ?>
                <?php if ( $card_icon ) : ?>
                <img src="<?php echo esc_url( $card_icon['url'] ); ?>" alt="<?php echo esc_attr( $card_icon['alt'] ); ?>" />
                <?php endif; ?>
                <p><?php the_sub_field( 'card_description' ); ?></p>
                <a href="<?php echo esc_url( get_sub_field( 'card_link' )); ?>" class="arrow_button">
                    <?php the_field( 'learn_more', 'option' ); ?>
                    <span></span>
                </a>
            </div>
        </div>
        <?php $i++?>
        <?php endwhile; ?>
        <?php else : ?>
        <?php // no rows found ?>
        <?php endif; ?>

    </section>
    <section class="home_slider">
        <div class="container" data-aos="fade-up">
            <h2><?php the_field( 'slide_heading' ); ?></h2>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php if ( have_rows( 'slide' ) ) : ?>
                    <?php while ( have_rows( 'slide' ) ) : the_row(); ?>
                    <div class="swiper-slide">
                        <div class="left">
                            <h3><?php the_sub_field( 'slide_subheading' ); ?></h3>
                            <p><?php the_sub_field( 'slide_description' ); ?></p>
                            <a href="<?php the_sub_field( 'slide_button_link' ); ?>" class="orange_button">
                                <?php the_field( 'register', 'option' ); ?>
                            </a>
                        </div>
                        <div class="right">
                            <?php $slide_image = get_sub_field( 'slide_image' ); ?>
                            <?php if ( $slide_image ) : ?>
                            <img src="<?php echo esc_url( $slide_image['url'] ); ?>" alt="<?php echo esc_attr( $slide_image['alt'] ); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php // no rows found ?>
                    <?php endif; ?>
                </div>
                <div class="swiper_next swiper_arrow">
                    <span></span>
                    <p>Banner</p>
                </div>
                <div class="swiper_prev swiper_arrow">
                    <span></span>
                    <p>Native</p>
                </div>
            </div>
        </div>
    </section>
    <section class="home_why bg_banner" style="background-image:url(<?php echo esc_url( get_field( 'home_bg_2', 'option' )['url'] ); ?>) ">
        <div class="container">
            <h2 data-aos="fade-down"><?php the_field( 'benefits_heading' ); ?></h2>
            <p data-aos="fade-up"><?php the_field( 'benefits_description' ); ?></p>
            <?php if ( have_rows( 'benefit' ) ) : ?>
            <?php while ( have_rows( 'benefit' ) ) : the_row(); ?>
            <div class="wrap" data-aos="fade-up">
                <div class="left">
                    <?php $benefit_icon = get_sub_field( 'benefit_icon' ); ?>
                    <?php if ( $benefit_icon ) : ?>
                    <img src="<?php echo esc_url( $benefit_icon['url'] ); ?>" alt="<?php echo esc_attr( $benefit_icon['alt'] ); ?>" />
                    <?php endif; ?>
                </div>
                <div class="right">
                    <h4><?php the_sub_field( 'benefit_heading' ); ?></h4>
                    <p><?php the_sub_field( 'benefit_description' ); ?></p>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php // no rows found ?>
            <?php endif; ?>

        </div>
    </section>
    <section class="home_testiomonials" data-aos="fade-up">
        <div class="left">
            <?php $testimonial_image = get_field( 'testimonial_image' ); ?>
            <?php if ( $testimonial_image ) : ?>
            <img src="<?php echo esc_url( $testimonial_image['url'] ); ?>" alt="<?php echo esc_attr( $testimonial_image['alt'] ); ?>" />
            <?php endif; ?>
        </div>
        <div class="right">
            <h2><?php the_field( 'testimonials_heading' ); ?></h2>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php if ( have_rows( 'testimonial' ) ) : ?>
                    <?php while ( have_rows( 'testimonial' ) ) : the_row(); ?>
                    <div class="swiper-slide">
                        <p><?php the_sub_field( 'testimonial_description' ); ?></p>
                        <strong><?php the_sub_field( 'testimonial_bold_text' ); ?></strong>
                    </div>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php // no rows found ?>
                    <?php endif; ?>
                </div>
                <div class="swiper_next swiper_arrow">
                </div>
                <div class="swiper_prev swiper_arrow">
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <a href="<?php the_field( 'testimonial_button_url' ); ?>" class="orange_button"><?php the_field( 'maximise_your_revenues', 'option' ); ?></a>
        </div>
    </section>
</main>
<?php get_footer() ?>
