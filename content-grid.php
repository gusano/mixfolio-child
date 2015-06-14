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
			<a class="card-link" href="<?php the_permalink(); ?>">
			</a>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<footer class="entry-meta">
				<span class="postdate">
					<?php echo get_the_date(); ?>
				</span>
			</footer>
		</div>
	</div>
</div>