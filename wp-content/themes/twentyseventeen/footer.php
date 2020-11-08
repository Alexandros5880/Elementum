<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			
			<!--
			<img src="http://localhost:8080/Elementum/wp-content/uploads/2020/11/elementum333-e1604841259683.jpg" width="100%" alt="Footer Image" />
			<div class="centered">697 793 4072</div>
			<div class="centered">Shaori81@yahoo.com</div>
			-->
			
			<div class="container">
				<img src="http://localhost:8080/Elementum/wp-content/uploads/2020/11/elementum333-e1604841259683.jpg" alt="Norway" style="width:100%;">
				<div class="text-block">
					<h4>697 793 4072</h4>
					<p>Shaori81@yahoo.com</p>
				</div>
			</div>
			
			
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>


<style>
	.container {
		position: relative;
	}
	.text-block {
		position: absolute;
		bottom: 100px;
		right: 20px;
		background-color: none;
		color: white;
		padding-left: 20px;
		padding-right: 20px;
	}
</style>
