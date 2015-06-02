<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package DevCongress Gharage
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="footer-info container">
            
        </div>
		<div class="site-info footer-credits container">
            <span class="copyright-info alignleft">&copy; <?php echo date("Y"); ?>, All rights Reserved, <a href="http://devcongress.org">DevCongress</a></span>  
			<span class="alignright"><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'dc-gharage' ) ); ?>"><?php printf( esc_html__( 'On %s', 'dc-gharage' ), 'WordPress' ); ?></a></span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</main><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
