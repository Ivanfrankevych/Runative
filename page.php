<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cliensite
 */

get_header();
?>
<main>
    <section class="default_template" style="background-image: url(<?php echo esc_url( get_field( 'blog_bg_1', 'option' )['url'] ); ?>)">
        <div class="container">
            <?php $icon = get_field( 'icon' ); ?>
            <?php if ( $icon ) : ?>
            <div class="title_container">
                <div class="left">
                    <h1><?php the_title() ?></h1>
                    <div class="my_editor">
                        <?php the_field( 'description' ); ?>
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                </div>
            </div>
            <?php else: ?>
            <h1><?php the_title() ?></h1>
            <?php endif; ?>

            <?php if ( have_rows( 'content' ) ) : ?>
            <?php while ( have_rows( 'content' ) ) : the_row(); ?>
            <div class="wrap text_editor">
                <?php the_sub_field( 'editor' ); ?>
                <?php $table = get_sub_field( 'table' ); 
                 if ( $table ) { 
                     echo '<table>'; 
                         if ( $table['header'] ) { 
                             echo '<thead><tr>'; 
                                 echo ''; 
                                     foreach ( $table['header'] as $th ) { 
                                         echo '<th>'; 
                                             echo $th['c']; 
                                         echo '</th>'; 
                                     } 
                                 echo '</tr>'; 
                             echo '</thead>'; 
                         } 

                         echo '<tbody>'; 
                             foreach ( $table['body'] as $tr ) { 
                                 echo '<tr>'; 
                                     foreach ( $tr as $td ) { 
                                         echo '<td>'.$td['c'].'</td>'; 
                                     } 
                                 echo '</tr>'; 
                             } 
                         echo '</tbody>'; 
                     echo '</table>'; 
                 } ?>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php // no rows found ?>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer(); ?>
