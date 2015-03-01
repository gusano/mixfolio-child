<?php
/**
 * The template for displaying search forms in Mixfolio
 *
 * @package Mixfolio
 * @since Mixfolio 1.1
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<div class="search">
			<span class="fa fa-search"></span>
			<input placeholder="Search" type="text" class="field" name="s" id="s">
		</div>
	</form>