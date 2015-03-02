<?php
/**
 * @package Mixfolio
 * @since Mixfolio 1.1
 */
?>

<div class="col-xs-6 col-md-4">
	<div class="card" data-content="">
		<?php the_post_thumbnail('large', array( 'class' => 'img-responsive' )); ?>
		<div class="info">
			<a href="<?php the_permalink(); ?>">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<footer class="entry-meta">
					<?php if ( ! is_sticky() && ( comments_open() || ( '0' != get_comments_number() && ! comments_open() ) ) ) : ?>
						<span class="postcomments"><?php echo get_comments_number(); ?></span>
					<?php endif; ?>

					<?php if ( ! is_sticky() ) : ?>
						<span class="postdate">
							<?php echo get_the_date(); ?>
						</span>
					<?php endif; ?>
				</footer>
			</a>
		</div>
	</div>
</div>