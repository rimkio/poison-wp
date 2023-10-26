<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package poison
 */

get_header();
?>
    <main id="primary" class="site-main container lib-filter-wrap">
        <!--Start news hero header-->
        <?= poison_template_news_hero_header(); ?>
        <!--End news hero header-->
        <?php
        if ( have_posts() ) :
	        get_template_part( 'template-parts/content-loop', get_post_type() );
	        echo '<div class="nav-filter-wrap">';
	        poison_the_posts_navigation( [
		        'prev_text' => poison_svg_icon( 'arrow_prev' ) . __( 'Prev' ),
		        'next_text' => __( 'Next' ) . poison_svg_icon( 'arrow_next' ),
	        ] );
	        echo '</div>';
        else :
	        get_template_part( 'template-parts/content', 'none' );
        endif;
        ?>
	</main><!-- #main -->
<?php
get_footer();
