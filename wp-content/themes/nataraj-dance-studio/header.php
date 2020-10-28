<?php
/**
 * The header for our theme
 *
 * @subpackage nataraj-dance-studio
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}?>

<header id="header">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nataraj-dance-studio' ); ?></a>
	<div class="top-header">
		<div class="container">	
			<div class="row">
				<div class="col-lg-9 col-md-10 p-0">
					<div class="top">
						<span class="call">
							<?php if( get_theme_mod( 'nataraj_dance_studio_call','' ) != '') { ?>
					        	<a href="tel:<?php echo esc_url( get_theme_mod('nataraj_dance_studio_call','') ); ?>"><i class="fas fa-phone"></i><span class="col-org"><?php echo esc_html( get_theme_mod('nataraj_dance_studio_call','') ); ?></span></a>
					    	<?php } ?>
					    </span>	
					    <span class="call">
					    	<?php if( get_theme_mod( 'nataraj_dance_studio_mail','' ) != '') { ?>
					        	<a href="mailto:<?php echo esc_url( get_theme_mod('nataraj_dance_studio_mail','') ); ?>"><i class="fas fa-envelope"></i><span class="col-org"><?php echo esc_html( get_theme_mod('nataraj_dance_studio_mail','') ); ?></span></a>
					    	<?php } ?>
						</span>
						<span class="call">
					    	<?php if( get_theme_mod( 'nataraj_dance_studio_time','' ) != '') { ?>
					        <i class="far fa-clock"></i><span class="col-org"><?php echo esc_html( get_theme_mod('nataraj_dance_studio_time','') ); ?></span>
					    	<?php } ?>
					    </span>		   		
					</div>	
				</div>
				<div class="col-lg-3 col-md-2 p-0">
					<div class="social-icons">
						<?php if( get_theme_mod( 'nataraj_dance_studio_facebook_url') != '') { ?>
					      <a href="<?php echo esc_url( get_theme_mod( 'nataraj_dance_studio_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
					    <?php } ?>
					    <?php if( get_theme_mod( 'nataraj_dance_studio_twitter_url') != '') { ?>
					      <a href="<?php echo esc_url( get_theme_mod( 'nataraj_dance_studio_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
					    <?php } ?>
					    <?php if( get_theme_mod( 'nataraj_dance_studio_linkedin_url') != '') { ?>
					      <a href="<?php echo esc_url( get_theme_mod( 'nataraj_dance_studio_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i></a>
					    <?php } ?>
					    <?php if( get_theme_mod( 'nataraj_dance_studio_insta_url') != '') { ?>
					      <a href="<?php echo esc_url( get_theme_mod( 'nataraj_dance_studio_insta_url','' ) ); ?>"><i class="fab fa-instagram"></i></a>
					    <?php } ?>		            
					</div>	
				</div>
			</div>
		</div>
	</div>
    <div class="menu-section">
		<div class="container-fluid">
			<div class="main-top">
			    <div class="row">
			    	<div class="col-lg-3 col-md-5 col-9">
						<div class="logo">
					        <?php if ( has_custom_logo() ) : ?>
						        <div class="site-logo"><?php the_custom_logo(); ?></div>
						    <?php endif; ?>
				            <?php if (get_theme_mod('nataraj_dance_studio_show_site_title',true)) {?>
						        <?php $blog_info = get_bloginfo( 'name' ); ?>
						        <?php if ( ! empty( $blog_info ) ) : ?>
						            <?php if ( is_front_page() && is_home() ) : ?>
							            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						        	<?php else : ?>
					            		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						            <?php endif; ?>
						        <?php endif; ?>
						    <?php }?>
				        	<?php if (get_theme_mod('nataraj_dance_studio_show_tagline',true)) {?>
						        <?php
						        $description = get_bloginfo( 'description', 'display' );
						        if ( $description || is_customize_preview() ) :
						          ?>
							        <p class="site-description">
							            <?php echo esc_html($description); ?>
							        </p>
						        <?php endif; ?>
						    <?php }?>
					    </div>
					</div>
			      	<div class="col-lg-9 col-md-7 col-3">
						<div class="toggle-menu responsive-menu">
				            <button onclick="nataraj_dance_studio_open()" role="tab" class="mobile-menu"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','nataraj-dance-studio'); ?></span></button>
				        </div>
						<div id="sidelong-menu" class="nav sidenav">
			                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'nataraj-dance-studio' ); ?>">
			                  	<?php 
				                    wp_nav_menu( array( 
										'theme_location' => 'primary',
										'container_class' => 'main-menu-navigation clearfix' ,
										'menu_class' => 'clearfix',
										'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
										'fallback_cb' => 'wp_page_menu',
				                    ) ); 
			                  	?>
			                  	<a href="javascript:void(0)" class="closebtn responsive-menu" onclick="nataraj_dance_studio_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','nataraj-dance-studio'); ?></span></a>
			                </nav>
			            </div>
					</div>
			    </div>
			</div>
		</div>
	</div>	
</header>