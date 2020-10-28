<?php
/**
 *Fitness Club Lite About Theme
 *
 * @package Fitness Club Lite
 */

//about theme info
add_action( 'admin_menu', 'fitness_club_lite_abouttheme' );
function fitness_club_lite_abouttheme() {    	
	add_theme_page( __('About Theme Info', 'fitness-club-lite'), __('About Theme Info', 'fitness-club-lite'), 'edit_theme_options', 'fitness_club_lite_guide', 'fitness_club_lite_mostrar_guide');   
} 

//Info of the theme
function fitness_club_lite_mostrar_guide() { 	
?>
<div class="wrap-GT">
	<div class="gt-left">
   		   <div class="heading-gt">
			  <h3><?php esc_html_e('About Theme Info', 'fitness-club-lite'); ?></h3>
		   </div>
          <p><?php esc_html_e('Fitness Club Lite is a user-friendly and feature-rich, intuitive and creative, powerful and impressive engaging and dynamic, tech-savvy and good looking, rapidly responsive personal trainer WordPress theme. Its a solid toolkit for development of awesome and modern websites for gym centers, fitness studios, yoga studios and CrossFit. This multipurpose theme can also be used for the needs of health clubs, gymnasiums, spas and wellness centers, indoor and outdoor exercises and any other sport and health related website. ','fitness-club-lite'); ?></p>
<div class="heading-gt"> <?php esc_html_e('Theme Features', 'fitness-club-lite'); ?></div>
 

<div class="col-2">
  <h4><?php esc_html_e('Theme Customizer', 'fitness-club-lite'); ?></h4>
  <div class="description"><?php esc_html_e('The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'fitness-club-lite'); ?></div>
</div>

<div class="col-2">
  <h4><?php esc_html_e('Responsive Ready', 'fitness-club-lite'); ?></h4>
  <div class="description"><?php esc_html_e('The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'fitness-club-lite'); ?></div>
</div>

<div class="col-2">
<h4><?php esc_html_e('Cross Browser Compatible', 'fitness-club-lite'); ?></h4>
<div class="description"><?php esc_html_e('Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'fitness-club-lite'); ?></div>
</div>

<div class="col-2">
<h4><?php esc_html_e('E-commerce', 'fitness-club-lite'); ?></h4>
<div class="description"><?php esc_html_e('Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'fitness-club-lite'); ?></div>
</div>
<hr />  
</div><!-- .gt-left -->
	
<div class="gt-right">			
        <div>				
            <a href="<?php echo esc_url( FITNESS_CLUB_LITE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'fitness-club-lite'); ?></a> |           
            <a href="<?php echo esc_url( FITNESS_CLUB_LITE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'fitness-club-lite'); ?></a>
        </div>		
</div><!-- .gt-right-->
<div class="clear"></div>
</div><!-- .wrap-GT -->
<?php } ?>