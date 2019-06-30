<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mneujeplohootetoyverstki
 */

?>

	<!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php the_custom_logo();
				  ?>
				<span class="site-description"><?php $mneujeplohootetoyverstki_description = get_bloginfo( 'description', 'display' );
			if ( $mneujeplohootetoyverstki_description || is_customize_preview() ) :
				
				echo $mneujeplohootetoyverstki_description;?>
			<?php endif; ?></span> 
		</div><!-- .site-info -->
		
		
	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer();?>


</body>
</html>
