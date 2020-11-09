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
			
			<div class="container">
				<img src="http://localhost:8080/Elementum/wp-content/uploads/2020/11/elementum333-e1604841259683.jpg" alt="Norway" style="width:100%;">
				<div class="text-block-right">
					<h4>697 793 4072</h4>
					<p>Shaori81@yahoo.com</p>
				</div>
				<div class="text-block-left">  <!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_social_media_buttons -->
					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
					<!-- Add font awesome icons -->
					<a href="https://www.facebook.com/martial.fitness.glyfada/" class="fa fa-facebook"></a>
					<a href="https://www.instagram.com/elementum.drago/" class="fa fa-instagram"></a>
					<a href="https://www.youtube.com/channel/UC2ZFL6YkFLbL8EAODEe4mgQ" class="fa fa-youtube"></a>
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
	.text-block-right {
		position: absolute;
		bottom: 100px;
		right: 20px;
		background-color: none;
		color: white;
		padding-left: 20px;
		padding-right: 20px;
	}

	.text-block-left {
		position: absolute;
		bottom: 10px;
		left: 10px;
		background-color: none;
		color: white;
		padding-left: 10px;
		padding-right: 10px;
		/*background: green;*/
	}

	.fa {
		padding: 10px;
		font-size: 30px;
		width: 50px;
		text-align: center;
		text-decoration: none;
	}
	.fa:hover {
		opacity: 0.7;
	}
	.fa-facebook {
		/*background: #3B5998;*/
		background: none;
		color: #3B5998 !important;
	}
	.fa-instagram {
		/*background: #125688;*/
		background: none;
		color: #E3009E !important;
	}
	.fa-youtube {
		/*background: #bb0000;*/
		background: none;
		color: #bb0000 !important;
	}
</style>
