<?php
/**
* Template Name: Blog
*/?>
<?php get_header(); ?>
<main>
    <section class="blog_banner container">
        <h1><?php the_title();?></h1>
        <div class="links">
            <div class="left">
                <a class="active" href="javascript:void(0);">All articles</a>
                <?php
            $categories = get_categories( [
                'taxonomy'     => 'category',
                'type'         => 'post',
                
            ] );

            if( $categories ){
                foreach( $categories as $cat ){ ?>
                <a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name ?></a>
                <?php
                }
            }
            ?>
            </div>
            <div class="right">
                <a href="<?php the_field( 'facebook_url', 'option' ); ?>">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                            <path d="M35.5556 0H4.44444C3.2657 0 2.13524 0.468253 1.30175 1.30175C0.468253 2.13524 0 3.2657 0 4.44444L0 35.5556C0 36.7343 0.468253 37.8648 1.30175 38.6983C2.13524 39.5317 3.2657 40 4.44444 40H15.2667V25.9333H9.82222V19.7111H15.2667V15.0222C15.0413 13.0369 15.6116 11.0431 16.8527 9.47721C18.0938 7.9113 19.9046 6.90074 21.8889 6.66667C22.3457 6.6001 22.8098 6.6001 23.2667 6.66667C24.874 6.68948 26.4778 6.82313 28.0667 7.06667V12.3333H25.4444C25.0417 12.2803 24.6324 12.3072 24.24 12.4126C23.8476 12.518 23.4799 12.6998 23.1579 12.9475C22.8359 13.1952 22.5659 13.504 22.3634 13.8562C22.1609 14.2084 22.0298 14.5971 21.9778 15C21.9334 15.2275 21.9334 15.4614 21.9778 15.6889V19.7111H27.9333L26.9556 25.9333H21.9556V40H35.5556C36.7343 40 37.8648 39.5317 38.6983 38.6983C39.5317 37.8648 40 36.7343 40 35.5556V4.44444C40 3.2657 39.5317 2.13524 38.6983 1.30175C37.8648 0.468253 36.7343 0 35.5556 0V0Z" fill="#fff" />
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="40" height="40" fill="#50316D" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="<?php the_field( 'instagram_url', 'option' ); ?>">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                            <path d="M26.0887 8.8889H13.8887C13.235 8.88598 12.5872 9.01184 11.9821 9.2593C11.3771 9.50676 10.8267 9.87097 10.3624 10.3311C9.89808 10.7913 9.52897 11.3384 9.27612 11.9412C9.02327 12.544 8.89163 13.1908 8.88872 13.8445V26.1111C8.8858 26.7648 9.01166 27.4127 9.25912 28.0177C9.50657 28.6228 9.87078 29.1732 10.331 29.6375C10.7911 30.1018 11.3382 30.4709 11.941 30.7237C12.5439 30.9766 13.1906 31.1082 13.8443 31.1111H26.0887C26.7424 31.117 27.3909 30.994 27.9971 30.7493C28.6032 30.5045 29.1553 30.1428 29.6216 29.6847C30.088 29.2265 30.4595 28.6811 30.7151 28.0794C30.9706 27.4776 31.1051 26.8315 31.1109 26.1778V13.8889C31.1139 13.2352 30.988 12.5873 30.7406 11.9823C30.4931 11.3772 30.1289 10.8269 29.6687 10.3626C29.2085 9.89827 28.6614 9.52916 28.0586 9.27631C27.4558 9.02346 26.8091 8.89182 26.1554 8.8889H26.0887ZM19.9998 26.9556C18.6312 26.9731 17.2882 26.5839 16.141 25.8373C14.9938 25.0906 14.0942 24.0201 13.5562 22.7615C13.0182 21.5029 12.8661 20.1129 13.119 18.7678C13.372 17.4226 14.0187 16.1828 14.9771 15.2057C15.9356 14.2285 17.1626 13.5579 18.5026 13.279C19.8426 13 21.2353 13.1253 22.5041 13.6388C23.7728 14.1523 24.8605 15.0311 25.6293 16.1636C26.398 17.296 26.8131 18.6313 26.8221 20C26.8309 20.9047 26.6614 21.8022 26.3233 22.6414C25.9852 23.4806 25.4851 24.2449 24.8516 24.8908C24.2181 25.5367 23.4635 26.0515 22.6311 26.4058C21.7986 26.76 20.9045 26.9469 19.9998 26.9556ZM27.3776 14.4667C27.1471 14.4696 26.9182 14.4271 26.7041 14.3416C26.49 14.2561 26.2948 14.1292 26.1297 13.9682C25.9646 13.8073 25.8328 13.6154 25.7419 13.4035C25.651 13.1916 25.6027 12.9639 25.5998 12.7333C25.5904 12.3828 25.6811 12.0368 25.8613 11.7359C26.0415 11.4351 26.3037 11.1918 26.6173 11.0347C26.9308 10.8776 27.2826 10.8131 27.6315 10.8489C27.9803 10.8846 28.3118 11.019 28.587 11.2364C28.8622 11.4538 29.0697 11.7451 29.1852 12.0763C29.3007 12.4074 29.3194 12.7646 29.2391 13.106C29.1588 13.4473 28.9828 13.7588 28.7319 14.0037C28.4809 14.2486 28.1653 14.4169 27.8221 14.4889C27.6897 14.5113 27.5545 14.5113 27.4221 14.4889L27.3776 14.4667Z" fill="#fff" />
                            <path d="M19.9991 15.8226C19.4368 15.8396 18.8835 15.9688 18.3717 16.2026C17.86 16.4364 17.4002 16.7702 17.0193 17.1842C16.6383 17.5983 16.344 18.0843 16.1536 18.6137C15.9631 19.1431 15.8804 19.7052 15.9103 20.267C15.9668 21.077 16.2594 21.8527 16.7519 22.4983C17.2444 23.1439 17.9152 23.631 18.6815 23.8995C19.4478 24.168 20.2759 24.2062 21.0637 24.0092C21.8514 23.8123 22.5642 23.3889 23.1139 22.7913C23.6637 22.1937 24.0263 21.4482 24.1571 20.6468C24.2878 19.8455 24.1809 19.0233 23.8496 18.282C23.5182 17.5407 22.977 16.9128 22.2927 16.4757C21.6084 16.0386 20.811 15.8115 19.9991 15.8226Z" fill="#fff" />
                            <path d="M35.5556 0H4.44444C3.2657 0 2.13524 0.468253 1.30175 1.30175C0.468253 2.13524 0 3.2657 0 4.44444L0 35.5556C0 36.7343 0.468253 37.8648 1.30175 38.6983C2.13524 39.5317 3.2657 40 4.44444 40H35.5556C36.7343 40 37.8648 39.5317 38.6983 38.6983C39.5317 37.8648 40 36.7343 40 35.5556V4.44444C40 3.2657 39.5317 2.13524 38.6983 1.30175C37.8648 0.468253 36.7343 0 35.5556 0V0ZM33.8667 25.8222C33.8667 27.9578 33.0199 30.0062 31.5119 31.5184C30.0039 33.0305 27.9578 33.883 25.8222 33.8889H14.1556C12.0239 33.8771 9.98347 33.0221 8.48027 31.5106C6.97708 29.999 6.1333 27.954 6.13333 25.8222V14.1778C6.13333 12.0422 6.98015 9.99378 8.48814 8.48163C9.99613 6.96947 12.0422 6.11699 14.1778 6.11111H25.8222C27.9578 6.11699 30.0039 6.96947 31.5119 8.48163C33.0199 9.99378 33.8667 12.0422 33.8667 14.1778V25.8222Z" fill="#fff" />
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="40" height="40" fill="#50316D" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="<?php the_field( 'linkedin_url', 'option' ); ?>">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                            <path d="M35.5556 0H4.44444C3.2657 0 2.13524 0.468253 1.30175 1.30175C0.468253 2.13524 0 3.2657 0 4.44444L0 35.5556C0 36.7343 0.468253 37.8648 1.30175 38.6983C2.13524 39.5317 3.2657 40 4.44444 40H35.5556C36.7343 40 37.8648 39.5317 38.6983 38.6983C39.5317 37.8648 40 36.7343 40 35.5556V4.44444C40 3.2657 39.5317 2.13524 38.6983 1.30175C37.8648 0.468253 36.7343 0 35.5556 0V0ZM11.7111 34.4444H5.55556V15.8444H11.7111V34.4444ZM8.62222 12.3556H8.04445C7.07631 12.2809 6.17474 11.8341 5.52891 11.109C4.88308 10.3839 4.54319 9.43686 4.58056 8.46658C4.61794 7.49629 5.02967 6.57819 5.72936 5.90492C6.42906 5.23166 7.36233 4.85557 8.33333 4.85557C9.30434 4.85557 10.2376 5.23166 10.9373 5.90492C11.637 6.57819 12.0487 7.49629 12.0861 8.46658C12.1235 9.43686 11.7836 10.3839 11.1378 11.109C10.4919 11.8341 9.59035 12.2809 8.62222 12.3556ZM34.4444 34.4444H28.2444V23.4889C28.2659 23.3118 28.2659 23.1327 28.2444 22.9556C28.1737 22.1334 27.7793 21.373 27.1479 20.8416C26.5165 20.3103 25.6999 20.0515 24.8778 20.1222C24.0556 20.1929 23.2952 20.5874 22.7639 21.2188C22.2325 21.8501 21.9737 22.6667 22.0444 23.4889V34.4444H15.8444V15.8444H22.0444V18.3111C22.6111 17.4533 23.3747 16.7434 24.2716 16.2409C25.1684 15.7383 26.1725 15.4576 27.2 15.4222C29.1213 15.4222 30.964 16.1855 32.3226 17.5441C33.6812 18.9027 34.4444 20.7453 34.4444 22.6667V34.4444Z" fill="#fff" />
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="40" height="40" fill="#50316D" />
                            </clipPath>
                        </defs>
                    </svg>

                </a>
                <a href="<?php the_field( 'vk_url', 'option' ); ?>">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M35.5556 0H4.44444C2 0 0 2 0 4.44444V35.5556C0 38 2 40 4.44444 40H35.5556C38 40 40 38 40 35.5556V4.44444C40 2 38 0 35.5556 0ZM32 29.7778H28.4444C27.7778 29.7778 27.1111 29.5556 26.6667 29.3333C25.3333 28.4444 24 25.7778 23.1111 26.2222C22.2222 26.6667 22.2222 28.6667 22.2222 28.6667C22.2222 28.8889 22.2222 29.1111 22 29.3333C21.7778 29.7778 19.5556 29.7778 19.5556 29.7778C17.1111 29.7778 14.6667 28.6667 12.8889 26.6667C10.4444 23.3333 8.22222 19.5556 6.66667 15.5556C6.66667 15.5556 6.44444 14.8889 6.66667 14.8889C6.88889 14.8889 7.11111 14.6667 7.55556 14.6667H11.3333C11.7778 14.6667 12 14.8889 12.2222 15.1111C12.6667 15.7778 12.8889 16.6667 13.5556 18.2222C15.1111 21.1111 15.7778 21.7778 16.4444 21.3333C17.1111 20.8889 16.8889 17.3333 16.8889 17.3333C16.8889 16.6667 16.6667 16 16.4444 15.3333C16.4444 15.1111 16 14.8889 15.5556 14.8889C15.3333 14.8889 15.7778 14.2222 16.2222 14C17.3333 13.7778 18.4444 13.5556 19.5556 13.5556C20.2222 13.5556 20.8889 13.5556 21.3333 13.7778C22.6667 14.2222 22.2222 15.5556 22.2222 18.6667C22.2222 19.7778 22 21.1111 22.6667 21.5556C22.8889 21.7778 23.7778 21.5556 25.5556 18.4444C26.4444 16.8889 26.6667 16 27.1111 15.1111C27.3333 14.8889 27.7778 14.6667 28 14.6667H32C32 14.6667 33.3333 14.2222 33.3333 14.8889C33.3333 15.5556 32.8889 16.8889 31.3333 19.1111C28.6667 22.8889 28.2222 22.4444 30.4444 24.6667C31.5556 25.5556 32.4444 26.6667 33.1111 27.7778C34 29.5556 32 29.7778 32 29.7778Z" fill="#fff" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <section class="blog_posts" style="background-image: url(<?php echo esc_url( get_field( 'blog_bg_1', 'option' )['url'] ); ?>)">
        <div class="container">
            <?php $i=1?>
            <?php while (have_posts() ){?>
            <?php the_post();?>
            <a href="<?php the_permalink();?>" class="wrap">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <div class="content">
                    <h3><?php the_title();?></h3>
                    <?php if( $i==1):?>
                    <?php the_excerpt();?>
                    <span class="arrow_button">
                        <?php the_field( 'read_full_article', 'option' ); ?><span></span>
                    </span>
                    <?php else:?>
                    <span class="arrow_button">
                        <?php the_field( 'read_article', 'option' ); ?><span></span>
                    </span>
                    <?php endif;?>
                </div>
            </a>
            <?php $i++?>
            <?php }?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
