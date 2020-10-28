<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Fitness Club Lite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
	//wp_body_open hook from WordPress 5.2
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	}
?>
<a class="skip-link screen-reader-text" href="#innerpage_layout">
<?php esc_html_e( 'Skip to content', 'fitness-club-lite' ); ?>
</a>
<?php
$fitness_club_lite_showslide_section 	  		        = get_theme_mod('fitness_club_lite_showslide_section', false);
$fitness_club_lite_show_top_3_services_section 	  	    = get_theme_mod('fitness_club_lite_show_top_3_services_section', false);
$fitness_club_lite_show_featurespage_section 	  	    = get_theme_mod('fitness_club_lite_show_featurespage_section', false);
$show_fitness_club_lite_stay_healthy_page	                = get_theme_mod('show_fitness_club_lite_stay_healthy_page', false);
$fitness_club_lite_show_socialsection 	  			    = get_theme_mod('fitness_club_lite_show_socialsection', false);
$fitness_club_lite_show_supportdetails 	  			    = get_theme_mod('fitness_club_lite_show_supportdetails', false);

?>
<div id="sitelayout_type" <?php if( get_theme_mod( 'sitebox_layout' ) ) { echo 'class="boxlayout"'; } ?>>
<?php
if ( is_front_page() && !is_home() ) {
	if( !empty($fitness_club_lite_showslide_section)) {
	 	$inner_cls = '';
	}
	else {
		$inner_cls = 'siteinner';
	}
}
else {
$inner_cls = 'siteinner';
}
?>

<div class="site-header <?php echo esc_attr($inner_cls); ?>"> 

<div class="site_hdrtop">
  <div class="container">
   <?php if(!dynamic_sidebar('headerinfowidget')): ?>
     <div class="left">     
     <?php if( $fitness_club_lite_show_supportdetails != ''){ ?>      
               <?php 
               $header_phoneno = get_theme_mod('header_phoneno');
               if( !empty($header_phoneno) ){ ?> 
                <div class="header-infobox">
                 <i class="fas fa-phone-square"></i><?php esc_html_e('Any Questions? Call Us: ','fitness-club-lite'); ?><?php echo esc_html($header_phoneno); ?>
                </div>
               <?php } ?>                           
             <?php } ?>
     </div><!-- .left --> 
     
     <div class="right">
      <?php if( $fitness_club_lite_show_socialsection != ''){ ?> 
        <div class="social-icons">                                                
                   <?php $fitness_club_lite_fb_link = get_theme_mod('fitness_club_lite_fb_link');
                    if( !empty($fitness_club_lite_fb_link) ){ ?>
                    <a title="facebook" class="fab fa-facebook-f" target="_blank" href="<?php echo esc_url($fitness_club_lite_fb_link); ?>"></a>
                   <?php } ?>
                
                   <?php $fitness_club_lite_twitt_link = get_theme_mod('fitness_club_lite_twitt_link');
                    if( !empty($fitness_club_lite_twitt_link) ){ ?>
                    <a title="twitter" class="fab fa-twitter" target="_blank" href="<?php echo esc_url($fitness_club_lite_twitt_link); ?>"></a>
                   <?php } ?>
            
                  <?php $fitness_club_lite_gplus_link = get_theme_mod('fitness_club_lite_gplus_link');
                    if( !empty($fitness_club_lite_gplus_link) ){ ?>
                    <a title="google-plus" class="fab fa-google-plus" target="_blank" href="<?php echo esc_url($fitness_club_lite_gplus_link); ?>"></a>
                  <?php }?>
            
                  <?php $fitness_club_lite_linked_link = get_theme_mod('fitness_club_lite_linked_link');
                    if( !empty($fitness_club_lite_linked_link) ){ ?>
                    <a title="linkedin" class="fab fa-linkedin" target="_blank" href="<?php echo esc_url($fitness_club_lite_linked_link); ?>"></a>
                  <?php } ?>                  
         </div><!--end .social-icons--> 
    <?php } ?> 
    </div>
     <div class="clear"></div>
    <?php endif; ?>
  </div>
</div><!--end site_hdrtop-->
      
<div class="header_panel">
<div class="container">    
     <div class="logo">
        <?php fitness_club_lite_the_custom_logo(); ?>
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
                <p><?php echo esc_html($description); ?></p>
            <?php endif; ?>
        </div><!-- logo -->
       <div class="header_contactinfo_area">
			 <div class="toggle">
         <a class="toggleMenu" href="#"><?php esc_html_e('Menu','fitness-club-lite'); ?></a>
       </div><!-- toggle --> 
       <div class="sitenav">                   
         <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
       </div><!--.sitenav -->
          
        </div><!--.header_contactinfo_area -->
      <div class="clear"></div>  
     </div><!-- container --> 
  </div><!-- .header_panel -->  
</div><!--.site-header --> 

<?php 
if ( is_front_page() && !is_home() ) {
if($fitness_club_lite_showslide_section != '') {
	for($i=1; $i<=3; $i++) {
	  if( get_theme_mod('fitness_club_lite_slidepageno'.$i,false)) {
		$slider_Arr[] = absint( get_theme_mod('fitness_club_lite_slidepageno'.$i,true));
	  }
	}
?> 
<div class="hdr_slider">                
<?php if(!empty($slider_Arr)){ ?>
<div id="slider" class="nivoSlider">
<?php 
$i=1;
$slidequery = new WP_Query( array( 'post_type' => 'page', 'post__in' => $slider_Arr, 'orderby' => 'post__in' ) );
while( $slidequery->have_posts() ) : $slidequery->the_post();
$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); 
$thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 
?>
<?php if(!empty($image)){ ?>
<img src="<?php echo esc_url( $image ); ?>" title="#slidecaption<?php echo esc_attr( $i ); ?>" alt="<?php echo esc_attr($alt); ?>" />
<?php }else{ ?>
<img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/slides/slider-default.jpg" title="#slidecaption<?php echo esc_attr( $i ); ?>" alt="<?php echo esc_attr($alt); ?>" />
<?php } ?>
<?php $i++; endwhile; ?>
</div>   

<?php 
$j=1;
$slidequery->rewind_posts();
while( $slidequery->have_posts() ) : $slidequery->the_post(); ?>                 
    <div id="slidecaption<?php echo esc_attr( $j ); ?>" class="nivo-html-caption">     
      <div class="custominfo">       
    	<h2><?php the_title(); ?></h2>
    	<?php the_excerpt(); ?>
		<?php
        $fitness_club_lite_slide_morebtn = get_theme_mod('fitness_club_lite_slide_morebtn');
        if( !empty($fitness_club_lite_slide_morebtn) ){ ?>
            <a class="slide_more" href="<?php the_permalink(); ?>"><?php echo esc_html($fitness_club_lite_slide_morebtn); ?></a>
        <?php } ?>
       </div><!-- .custominfo -->                    
    </div>   
<?php $j++; 
endwhile;
wp_reset_postdata(); ?>  
<div class="clear"></div>  
</div><!--end .hdr_slider -->     
<?php } ?>
<?php } } ?>
       
        
<?php if ( is_front_page() && ! is_home() ) {
if( $fitness_club_lite_show_top_3_services_section != ''){ ?>  
<section id="page_3col_panel">
<div class="container">                      
<?php 
for($n=1; $n<=3; $n++) {    
if( get_theme_mod('fitness_club_lite_top_srvpagebx'.$n,false)) {      
	$queryvar = new WP_Query('page_id='.absint(get_theme_mod('fitness_club_lite_top_srvpagebx'.$n,true)) );		
	while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>     
	<div class="pagebx_3cols <?php if($n % 3 == 0) { echo "last_column"; } ?>">  
       <div class="content-overlay"></div>                                  
		<?php if(has_post_thumbnail() ) { ?>
		<div class="pagebx_thumbx"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a></div>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>      
		<?php } ?>
		<div class="pagebx_content_box fadeIn-bottom">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>                                     
		<?php the_excerpt(); ?>	
        <a class="pagereadmore" href="<?php the_permalink(); ?>"><?php esc_html_e('Read more...','fitness-club-lite'); ?></a>	                        
		</div>                                   
	</div>
	<?php endwhile;
	wp_reset_postdata();                                  
} } ?>                                 
<div class="clear"></div>  
</div><!-- .container -->                  
</section><!-- #page_3col_panel-->                      	      
<?php } ?>


<?php if( $fitness_club_lite_show_featurespage_section != ''){ ?>  
<section id="features_page_patch">
<div class="container">

<h2 class="section_title"><?php esc_html_e('Our Features','fitness-club-lite'); ?></h2>
                       
<?php 
for($n=1; $n<=4; $n++) {    
if( get_theme_mod('fitness_club_lite_features_pagecolumn'.$n,false)) {      
	$queryvar = new WP_Query('page_id='.absint(get_theme_mod('fitness_club_lite_features_pagecolumn'.$n,true)) );		
	while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>     
	<div class="features_page_box <?php if($n % 4 == 0) { echo "last_column"; } ?>">                         
		<?php if(has_post_thumbnail() ) { ?>
		<div class="thumbbx"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a></div>       
		<?php } ?>		
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>                                     
		 <?php the_excerpt(); ?>		                           
	</div>
	<?php endwhile;
	wp_reset_postdata();                                  
} } ?>                                 
<div class="clear"></div>  
</div><!-- .container -->                  
</section><!-- #features_page_patch-->                      	      
<?php } ?>


<?php if( $show_fitness_club_lite_stay_healthy_page != ''){ ?>  
<section id="why_chooseus_section">
<div class="container">                               
<?php 
if( get_theme_mod('fitness_club_lite_stay_healthy_page',false)) {     
$queryvar = new WP_Query('page_id='.absint(get_theme_mod('fitness_club_lite_stay_healthy_page',true)) );			
    while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>   
   
     <div class="stay_healthy_imagecoloum"><?php the_post_thumbnail();?></div>                              
     <div class="stay_healthy_desccoloum">   
     <h3><?php the_title(); ?></h3>   
     <?php the_content();  ?>     
    </div>                                      
    <?php endwhile;
     wp_reset_postdata(); ?>                                    
    <?php } ?>                                 
<div class="clear"></div>                       
</div><!-- container -->
</section><!-- #why_chooseus_section-->
<?php } ?>
<?php } ?>