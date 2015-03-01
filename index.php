<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mixfolio
 */

global $mixfolio_count;

$mixfolio_count = 1;

get_header(); ?>

<script type="text/javascript">
	var $, dom;

	$ = jQuery;
	dom = $('#branding ul li:first-child a');
	// Reset `All` link color
	dom.css('color', '#edf1ea').css('background-color', '#2a85e8');
</script>

	<!--<div id="primary" class="full-width">-->
		<!--<div id="content" role="main">-->

			<?php
				/**
				 * Welcome Area
				 */
				get_template_part( 'part', 'hero' );
			?>

			<?php echo mixfolio_secondary_nav_menu(); ?>

			<!--<ul class="grid">-->
			<div class="row">
				<?php
					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

					$grid_args = array(
						'posts_per_page' => get_option( 'posts_per_page' ),
						'paged' => $paged,
					);

					$grid_query = new WP_Query( $grid_args );

					while ( $grid_query->have_posts() ) : $grid_query->the_post();
						/**
						* Thumbnail Grid
						*/
						get_template_part( 'content', 'grid' );

						$mixfolio_count++;

					endwhile; wp_reset_postdata(); ?>
			</div>
			<!--</ul>--><!-- .grid -->

			<?php mixfolio_content_nav( 'nav-below' ); ?>

		<!--</div>--><!-- #content -->
	<!--</div>--><!-- #primary -->

<?php get_footer(); ?>