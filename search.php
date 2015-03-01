<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Mixfolio
 */

get_header(); ?>

<script type="text/javascript">
	var $ = jQuery;
	$(document).ready(function() {
		var dom;

		$('body').removeClass('search').removeClass('search-no-results');
		dom = $('#branding ul li:first-child a');
		// Reset `All` link color
		dom.css('color', '#edf1ea').css('background-color', '#2a85e8');
	});
</script>

			<div class="row">

			<?php echo mixfolio_secondary_nav_menu(); ?>

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">
						<?php printf( __( 'Search Results for: %s', 'mixfolio' ), '<span>' . get_search_query() . '</span>' ); ?>
					</h1><!-- .page-title -->
				</header><!-- .page-header -->

				<?php mixfolio_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */
/*					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

					$grid_args = array(
						'posts_per_page' => get_option( 'posts_per_page' ),
						'paged' => $paged,
					);

					$grid_query = new WP_Query( $grid_args );
var_dump($grid_query->request); die;
					while ( $grid_query->have_posts() ) : $grid_query->the_post();
						//
						// Thumbnail Grid
						//
						get_template_part( 'content', 'grid' );

						$mixfolio_count++;

					endwhile; wp_reset_postdata(); ?>
*/				
					while ( have_posts() ) : the_post();

						get_template_part( 'content', 'search' );

					endwhile;
				?>

				<?php mixfolio_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title">
							<?php _e( 'Nothing Found', 'mixfolio' ); ?>
						</h1><!-- .entry-title -->
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p>
							<?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'mixfolio' ); ?>
						</p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

		</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>