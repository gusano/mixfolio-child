<?php global $mixfolio_options;
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Mixfolio
 */
?>
		</div><!-- .main-outer -->

		<footer id="colophon" class="row" role="contentinfo">
			<div id="site-generator" class="twelve columns">
				<span class="right" style="font-size: 9px;">
					Code and design: <a href="http://yvanvolochine.com">(yv)</a>
				</span>
			</div>
		</footer>
	</div>

	<?php if ( isset( $mixfolio_options[ 'mixfolio_display_contact_information' ] ) && 'on' == $mixfolio_options[ 'mixfolio_display_contact_information' ] ) : ?>
		<div id="contact" class="reveal-modal">
			<h2>
				<?php _e( 'Contact', 'mixfolio' ); ?>
			</h2>
			<?php if ( isset( $mixfolio_options[ 'mixfolio_contact_details' ] ) && '' != $mixfolio_options[ 'mixfolio_contact_details' ] ) : ?>
				<div class="lead">
					<?php echo $mixfolio_options[ 'mixfolio_contact_details' ]; // HTML Allowed ?>
				</div>
			<?php endif; ?>
			<?php if ( isset( $mixfolio_options[ 'mixfolio_contact_email_address' ] ) && '' != $mixfolio_options[ 'mixfolio_contact_email_address' ] ) : ?>
				<div class="lead">
					<a href="mailto:<?php echo antispambot( sanitize_email( $mixfolio_options[ 'mixfolio_contact_email_address' ] ) ); ?>"><?php echo antispambot( sanitize_email( $mixfolio_options[ 'mixfolio_contact_email_address' ] ) ); ?></a>
				</div>
			<?php endif; ?>
			<a class="close-reveal-modal">&#215;</a>
		</div>
	<?php endif; ?>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/../mixfolio-child/js/main.js?rdm=as8d7sd03" type="text/javascript"></script>
</body>
</html>