<?php    
/**
 *Fitness Club Lite Theme Customizer
 *
 * @package Fitness Club Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function fitness_club_lite_customize_register( $wp_customize ) {	
	
	function fitness_club_lite_sanitize_dropdown_pages( $page_id, $setting ) {
	  // Ensure $input is an absolute integer.
	  $page_id = absint( $page_id );
	
	  // If $page_id is an ID of a published page, return it; otherwise, return the default.
	  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
	}

	function fitness_club_lite_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}  
		
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
	 //Panel for section & control
	$wp_customize->add_panel( 'fitness_club_lite_panel_area', array(
		'priority' => null,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Options Panel', 'fitness-club-lite' ),		
	) );
	
	//Layout Options
	$wp_customize->add_section('layout_option',array(
		'title' => __('Site Layout','fitness-club-lite'),			
		'priority' => 1,
		'panel' => 	'fitness_club_lite_panel_area',          
	));		
	
	$wp_customize->add_setting('sitebox_layout',array(
		'sanitize_callback' => 'fitness_club_lite_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'sitebox_layout', array(
    	'section'   => 'layout_option',    	 
		'label' => __('Check to Box Layout','fitness-club-lite'),
		'description' => __('If you want to box layout please check the Box Layout Option.','fitness-club-lite'),
    	'type'      => 'checkbox'
     )); //Layout Section 
	
	$wp_customize->add_setting('fitness_club_lite_color_scheme',array(
		'default' => '#dc1d24',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'fitness_club_lite_color_scheme',array(
			'label' => __('Color Scheme','fitness-club-lite'),			
			'description' => __('More color options in PRO Version','fitness-club-lite'),
			'section' => 'colors',
			'settings' => 'fitness_club_lite_color_scheme'
		))
	);	
	
	//Header Contact Info
	$wp_customize->add_section('header_supportinfo_section',array(
		'title' => __('Header Support Details','fitness-club-lite'),				
		'priority' => null,
		'panel' => 	'fitness_club_lite_panel_area',
	));
	
	$wp_customize->add_setting('header_phoneno',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('header_phoneno',array(	
		'type' => 'text',
		'label' => __('Add phone number here','fitness-club-lite'),
		'section' => 'header_supportinfo_section',
		'setting' => 'header_phoneno'
	));	
	
	$wp_customize->add_setting('support_mailid',array(
		'sanitize_callback' => 'sanitize_email'
	));
	
	$wp_customize->add_control('support_mailid',array(
		'type' => 'text',
		'label' => __('Add email address here.','fitness-club-lite'),
		'section' => 'header_supportinfo_section'
	));	
	
	$wp_customize->add_setting('fitness_club_lite_show_supportdetails',array(
		'default' => false,
		'sanitize_callback' => 'fitness_club_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'fitness_club_lite_show_supportdetails', array(
	   'settings' => 'fitness_club_lite_show_supportdetails',
	   'section'   => 'header_supportinfo_section',
	   'label'     => __('Check To show This Section','fitness-club-lite'),
	   'type'      => 'checkbox'
	 ));//Show header contact info
	
	 
	 //Header social icons
	$wp_customize->add_section('fitness_club_lite_social_section',array(
		'title' => __('Header social icons','fitness-club-lite'),
		'description' => __( 'Add social icons link here to display icons in header', 'fitness-club-lite' ),			
		'priority' => null,
		'panel' => 	'fitness_club_lite_panel_area', 
	));
	
	$wp_customize->add_setting('fitness_club_lite_fb_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'	
	));
	
	$wp_customize->add_control('fitness_club_lite_fb_link',array(
		'label' => __('Add facebook link here','fitness-club-lite'),
		'section' => 'fitness_club_lite_social_section',
		'setting' => 'fitness_club_lite_fb_link'
	));	
	
	$wp_customize->add_setting('fitness_club_lite_twitt_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('fitness_club_lite_twitt_link',array(
		'label' => __('Add twitter link here','fitness-club-lite'),
		'section' => 'fitness_club_lite_social_section',
		'setting' => 'fitness_club_lite_twitt_link'
	));
	
	$wp_customize->add_setting('fitness_club_lite_gplus_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('fitness_club_lite_gplus_link',array(
		'label' => __('Add google plus link here','fitness-club-lite'),
		'section' => 'fitness_club_lite_social_section',
		'setting' => 'fitness_club_lite_gplus_link'
	));
	
	$wp_customize->add_setting('fitness_club_lite_linked_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('fitness_club_lite_linked_link',array(
		'label' => __('Add linkedin link here','fitness-club-lite'),
		'section' => 'fitness_club_lite_social_section',
		'setting' => 'fitness_club_lite_linked_link'
	));
	
	$wp_customize->add_setting('fitness_club_lite_show_socialsection',array(
		'default' => false,
		'sanitize_callback' => 'fitness_club_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'fitness_club_lite_show_socialsection', array(
	   'settings' => 'fitness_club_lite_show_socialsection',
	   'section'   => 'fitness_club_lite_social_section',
	   'label'     => __('Check To show This Section','fitness-club-lite'),
	   'type'      => 'checkbox'
	 ));//Show Header Social icons Section 			
	
	// Slider Section		
	$wp_customize->add_section( 'fitness_club_lite_slider_options', array(
		'title' => __('Header Slider Section', 'fitness-club-lite'),
		'priority' => null,
		'description' => __('Default image size for slider is 1400 x 685 pixel.','fitness-club-lite'), 
		'panel' => 	'fitness_club_lite_panel_area',           			
    ));
	
	$wp_customize->add_setting('fitness_club_lite_slidepageno1',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'fitness_club_lite_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('fitness_club_lite_slidepageno1',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slide one:','fitness-club-lite'),
		'section' => 'fitness_club_lite_slider_options'
	));	
	
	$wp_customize->add_setting('fitness_club_lite_slidepageno2',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'fitness_club_lite_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('fitness_club_lite_slidepageno2',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slide two:','fitness-club-lite'),
		'section' => 'fitness_club_lite_slider_options'
	));	
	
	$wp_customize->add_setting('fitness_club_lite_slidepageno3',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'fitness_club_lite_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('fitness_club_lite_slidepageno3',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slide three:','fitness-club-lite'),
		'section' => 'fitness_club_lite_slider_options'
	));	// Slider Section	
	
	$wp_customize->add_setting('fitness_club_lite_slide_morebtn',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('fitness_club_lite_slide_morebtn',array(	
		'type' => 'text',
		'label' => __('Add slider Read more button name here','fitness-club-lite'),
		'section' => 'fitness_club_lite_slider_options',
		'setting' => 'fitness_club_lite_slide_morebtn'
	)); // Slider Read More Button Text
	
	$wp_customize->add_setting('fitness_club_lite_showslide_section',array(
		'default' => false,
		'sanitize_callback' => 'fitness_club_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'fitness_club_lite_showslide_section', array(
	    'settings' => 'fitness_club_lite_showslide_section',
	    'section'   => 'fitness_club_lite_slider_options',
	     'label'     => __('Check To Show This Section','fitness-club-lite'),
	   'type'      => 'checkbox'
	 ));//Show Slider Section	
	 
	 
	 // Three column Services section
	$wp_customize->add_section('fitness_club_lite_top_3_services_section', array(
		'title' => __('Top Three Services Section','fitness-club-lite'),
		'description' => __('Select pages from the dropdown for services section','fitness-club-lite'),
		'priority' => null,
		'panel' => 	'fitness_club_lite_panel_area',          
	));	
	
	$wp_customize->add_setting('fitness_club_lite_top_srvpagebx1',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'fitness_club_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'fitness_club_lite_top_srvpagebx1',array(
		'type' => 'dropdown-pages',			
		'section' => 'fitness_club_lite_top_3_services_section',
	));		
	
	$wp_customize->add_setting('fitness_club_lite_top_srvpagebx2',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'fitness_club_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'fitness_club_lite_top_srvpagebx2',array(
		'type' => 'dropdown-pages',			
		'section' => 'fitness_club_lite_top_3_services_section',
	));
	
	$wp_customize->add_setting('fitness_club_lite_top_srvpagebx3',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'fitness_club_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'fitness_club_lite_top_srvpagebx3',array(
		'type' => 'dropdown-pages',			
		'section' => 'fitness_club_lite_top_3_services_section',
	));
	
	
	$wp_customize->add_setting('fitness_club_lite_show_top_3_services_section',array(
		'default' => false,
		'sanitize_callback' => 'fitness_club_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'fitness_club_lite_show_top_3_services_section', array(
	   'settings' => 'fitness_club_lite_show_top_3_services_section',
	   'section'   => 'fitness_club_lite_top_3_services_section',
	   'label'     => __('Check To Show This Section','fitness-club-lite'),
	   'type'      => 'checkbox'
	 ));//Show services section
	 
	 
	 // Features Page section
	$wp_customize->add_section('fitness_club_lite_features_page_section', array(
		'title' => __('Our Features Section','fitness-club-lite'),
		'description' => __('Select pages from the dropdown for our features section','fitness-club-lite'),
		'priority' => null,
		'panel' => 	'fitness_club_lite_panel_area',          
	));	
	
	$wp_customize->add_setting('fitness_club_lite_features_pagecolumn1',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'fitness_club_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'fitness_club_lite_features_pagecolumn1',array(
		'type' => 'dropdown-pages',			
		'section' => 'fitness_club_lite_features_page_section',
	));		
	
	$wp_customize->add_setting('fitness_club_lite_features_pagecolumn2',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'fitness_club_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'fitness_club_lite_features_pagecolumn2',array(
		'type' => 'dropdown-pages',			
		'section' => 'fitness_club_lite_features_page_section',
	));
	
	$wp_customize->add_setting('fitness_club_lite_features_pagecolumn3',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'fitness_club_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'fitness_club_lite_features_pagecolumn3',array(
		'type' => 'dropdown-pages',			
		'section' => 'fitness_club_lite_features_page_section',
	));
	
	$wp_customize->add_setting('fitness_club_lite_features_pagecolumn4',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'fitness_club_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'fitness_club_lite_features_pagecolumn4',array(
		'type' => 'dropdown-pages',			
		'section' => 'fitness_club_lite_features_page_section',
	));
	
	
	$wp_customize->add_setting('fitness_club_lite_show_featurespage_section',array(
		'default' => false,
		'sanitize_callback' => 'fitness_club_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'fitness_club_lite_show_featurespage_section', array(
	   'settings' => 'fitness_club_lite_show_featurespage_section',
	   'section'   => 'fitness_club_lite_features_page_section',
	   'label'     => __('Check To Show This Section','fitness-club-lite'),
	   'type'      => 'checkbox'
	 ));//Show our features section
	 
	 
	 // Stay Healthy Section 
	$wp_customize->add_section('fitness_club_lite_stay_healthy_section', array(
		'title' => __('Stay Healthy Section','fitness-club-lite'),
		'description' => __('Select Pages from the dropdown for why choose section','fitness-club-lite'),
		'priority' => null,
		'panel' => 	'fitness_club_lite_panel_area',          
	));		
	
	$wp_customize->add_setting('fitness_club_lite_stay_healthy_page',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'fitness_club_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'fitness_club_lite_stay_healthy_page',array(
		'type' => 'dropdown-pages',			
		'section' => 'fitness_club_lite_stay_healthy_section',
	));		
	
	$wp_customize->add_setting('show_fitness_club_lite_stay_healthy_page',array(
		'default' => false,
		'sanitize_callback' => 'fitness_club_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'show_fitness_club_lite_stay_healthy_page', array(
	    'settings' => 'show_fitness_club_lite_stay_healthy_page',
	    'section'   => 'fitness_club_lite_stay_healthy_section',
	    'label'     => __('Check To Show This Section','fitness-club-lite'),
	    'type'      => 'checkbox'
	));//Show Why Choose Section 
	 
	
		 
}
add_action( 'customize_register', 'fitness_club_lite_customize_register' );

function fitness_club_lite_custom_css(){ 
?>
	<style type="text/css"> 					
        a, .poststyle_listing h2 a:hover,
        #sidebar ul li a:hover,								
        .poststyle_listing h3 a:hover,					
        .recent-post h6:hover,
		.social-icons a:hover,       						
        .postmeta a:hover,
		.sitenav ul li a:hover, 
		.sitenav ul li.current-menu-item a,
		.sitenav ul li.current-menu-parent a.parent,
		.sitenav ul li.current-menu-item ul.sub-menu li a:hover,
        .button:hover,		
        .footercolumn ul li a:hover, 
        .footercolumn ul li.current_page_item a,      
		.footer-wrapper h2 span,
		.footer-wrapper ul li a:hover, 
		.footer-wrapper ul li.current_page_item a        				
            { color:<?php echo esc_html( get_theme_mod('fitness_club_lite_color_scheme','#dc1d24')); ?>;}					 
            
        .pagination ul li .current, .pagination ul li a:hover, 
        #commentform input#submit:hover,		
        .nivo-controlNav a.active,
		.nivo-caption p,
        .learnmore,			
		.nivo-caption .slide_more:hover,
		.pagebx_3cols .pagebx_thumbx,												
        #sidebar .search-form input.search-submit,				
        .wpcf7 input[type='submit'],				
        nav.pagination .page-numbers.current,       		
        .toggle a	
            { background-color:<?php echo esc_html( get_theme_mod('fitness_club_lite_color_scheme','#dc1d24')); ?>;}
			
		     		
      .nivo-caption p::before	
            { border-left: 30px solid <?php echo esc_html( get_theme_mod('fitness_club_lite_color_scheme','#dc1d24')); ?>;}		
			
		button:focus,
		input[type="button"]:focus,
		input[type="reset"]:focus,
		input[type="submit"]:focus,
		input[type="text"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="password"]:focus,
		input[type="search"]:focus,
		input[type="number"]:focus,
		input[type="tel"]:focus,
		input[type="range"]:focus,
		input[type="date"]:focus,
		input[type="month"]:focus,
		input[type="week"]:focus,
		input[type="time"]:focus,
		input[type="datetime"]:focus,
		input[type="datetime-local"]:focus,
		input[type="color"]:focus,
		textarea:focus,
		a:focus	
            { outline: thin dotted <?php echo esc_html( get_theme_mod('fitness_club_lite_color_scheme','#dc1d24')); ?>;}			
			
         	
    </style> 
<?php                                       
}
         
add_action('wp_head','fitness_club_lite_custom_css');	 

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function fitness_club_lite_customize_preview_js() {
	wp_enqueue_script( 'fitness_club_lite_customizer', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20171016', true );
}
add_action( 'customize_preview_init', 'fitness_club_lite_customize_preview_js' );