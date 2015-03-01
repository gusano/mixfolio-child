<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package Mixfolio
 */

global $mixfolio_count;

$cat = single_cat_title('', false);
if ($cat === 'All') {
	wp_redirect( home_url() ); exit;
}


$mixfolio_count = 1;

get_header(); ?>

<script type="text/javascript">
	var $, dom;

	$ = jQuery;
	dom = $('#branding ul li:first-child a');
	// Reset `All` link color
	dom.css('color', '#2a85e8').css('background-color', '#edf1ea');
</script>

	<section id="primary" class="full-width">
		<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<div class="row">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							/**
							* Thumbnail Grid
							*/
							get_template_part( 'content', 'grid' );

							$mixfolio_count++;
						?>

					<?php endwhile; ?>
				</div>

				<?php mixfolio_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title">
							<?php _e( 'Nothing Found', 'mixfolio' ); ?>
						</h1><!-- .entry-title -->
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'mixfolio' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_footer(); ?>