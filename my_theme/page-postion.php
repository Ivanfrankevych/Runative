<?php /* Template Name: Position*/ ?>
<?php get_header() ?>
<main class="page_position" style="background-image: url(<?php echo esc_url( get_field( 'position_bg', 'option' )['url'] ); ?>)">
    <section class="default_template">
        <div class="container">
            <h1><?php the_field( 'page_heading' ); ?>
            </h1>
            <div class="wrap text_editor">
                <h4><?php the_field( 'position_heading' ); ?></h4>
                <div class="tags">
                    <?php if ( have_rows( 'position_tags' ) ) : ?>
                    <?php while ( have_rows( 'position_tags' ) ) : the_row(); ?>
                    <span><?php the_sub_field( 'position_tag' ); ?></span>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php // no rows found ?>
                    <?php endif; ?>
                </div>
                <?php the_field( 'position_description' ); ?>
            </div>
        </div>
    </section>
    <section class="container contacts_page">
        <h2><?php the_field( 'contact_heading' ); ?>
        </h2>
        <?php echo do_shortcode('[contact-form-7 id="436" title="Leave a request"]');?>
    </section>
</main>
<?php get_footer() ?>
