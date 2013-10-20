<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package OranjeStrap
 */
?>
		</div> <!-- row -->

		<hr/>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<?php do_action( 'OranjeStrap_credits' ); ?>
				<a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'OranjeStrap' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'OranjeStrap' ), 'OranjeStrap', '<a href="https://github.com/akshayphadke" rel="designer">akshayphadke</a>' ); ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
		</div><!-- #container -->
	</div> <!-- content -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>