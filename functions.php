<?php

/**
 * Theme Frontend Scripts and Styles
 */
function iva_frontend_scripts() {
	wp_register_script('iva-easing', THEME_JS .'/jquery.easing.1.3.js', 'jquery', '', 'in_footer');
	wp_register_script('iva-sf-hover', THEME_JS .'/hoverIntent.js', '', '', 'in_footer');
	wp_register_script('iva-sf-menu', THEME_JS .'/superfish.js', '', '', 'in_footer');
	wp_register_script('iva-gmap-api', 'http://maps.google.com/maps/api/js?sensor=false', '', '', 'in_footer');
	wp_register_script('iva-gmap-min', THEME_JS . '/jquery.gmap.js', '', '', 'in_footer');
	wp_register_script('iva-jgalleria', THEME_JS .'/src/galleria.js', '', '', 'in_footer');
	wp_register_script('iva-jgclassic', THEME_JS .'/src/themes/classic/galleria.classic.js', '', '', 'in_footer');
	wp_register_script('iva-contact', THEME_JS .'/atp_form.js', '', '', 'in_footer');
	wp_register_script('iva-jcarousel', THEME_JS .'/jquery.jcarousel.min.js', 'jquery', '', 'in_footer');
	wp_register_script('iva-jPlayer', THEME_JS. '/jquery.jplayer.min.js', 'jquery', '', 'in_footer');
	wp_register_script('iva-prettyPhoto', THEME_JS .'/jquery.prettyPhoto.js', 'jquery', '', 'in_footer');
	wp_register_script('iva-preloader', THEME_JS .'/jquery.preloadify.min.js', 'jquery', '', 'in_footer');
	wp_register_script('iva-waypoints', THEME_JS .'/waypoints.js', 'jquery', '', 'in_footer');
	wp_register_script('iva-progresscircle', THEME_JS .'/jquery.easy-pie-chart.js', 'jquery', '', 'in_footer');
	wp_register_script('iva-excanvas', THEME_JS .'/excanvas.js', 'jquery', '', 'in_footer');
	wp_register_script('iva-Modernizr', THEME_JS .'/Modernizr.js', '', '', 'in_footer');
	wp_register_script('iva-isotope', THEME_JS .'/isotope.js', '', '', 'in_footer');
	wp_register_script('iva-fitvids', THEME_JS .'/jquery.fitvids.js','jquery', '', 'in_footer');
	wp_register_script('iva-custom', THEME_JS . '/sys_custom.js', 'jquery', '', 'in_footer');
	
	/**
	 * Enqueue Frontend Scripts
	 */
	wp_enqueue_script('jquery');
	wp_enqueue_script('iva-easing');
	wp_enqueue_script('iva-sf-hover');
	wp_enqueue_script('iva-sf-menu');
	wp_enqueue_script('iva-jPlayer');
	wp_enqueue_script('iva-preloader');
	wp_enqueue_script('iva-prettyPhoto');
	wp_enqueue_script('iva-Modernizr');
	wp_enqueue_script('iva-isotope');
	wp_enqueue_script('iva-fitvids');
	wp_enqueue_script('iva-custom');
	wp_enqueue_script('iva-waypoints');

	wp_localize_script( 'jquery', 'atp_panel', array( 'SiteUrl' => get_template_directory_uri() ) );		

	wp_register_style( 'iva-responsive', THEME_CSS . '/responsive.css', array(), '1', 'screen' );

	// Enqueue Frontend Styles
	wp_enqueue_style('iva-theme-style', get_stylesheet_uri() );
	wp_enqueue_style('iva-animate', THEME_CSS.'/animate.css', array(), '1', 'screen' );
	wp_enqueue_style('iva-prettyPhoto', THEME_CSS.'/prettyPhoto.css', array(), '1', 'screen' );
	wp_enqueue_style('iva-responsive' );
	wp_enqueue_style('iva-jplayer',THEME_CSS.'/blue.monday/jplayer.blue.monday.css', array(), '1', 'screen' );

	if ( is_singular() && get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }

	if ( get_option( 'iva_style' ) != '0' ) {
		$iva_style = get_option( 'iva_style' );
		wp_enqueue_style( 'iva-style', THEME_URI.'/colors/'.$iva_style, array(), '1', 'screen' );
	}
	
}

add_action( 'wp_enqueue_scripts', 'iva_frontend_scripts' );

/**
 * Register Theme Frontend Carousel Scripts and Styles
 */
 
add_action( 'wp_enqueue_scripts','iva_owlcarousel_enqueue_scripts' );

function iva_owlcarousel_enqueue_scripts() {
	wp_register_script( 'iva-owl-carousel', THEME_JS . '/owl.carousel.js', 'jquery', '', 'in_footer');
	wp_enqueue_style( 'iva-owl-style', THEME_CSS . '/owl.carousel.css', array(), '1', 'all' ); 
	wp_enqueue_style( 'iva-owl-theme', THEME_CSS . '/owl.theme.css', array(), '1', 'all' );    
}
	
/**
 * Flex Slider Enqueue Scripts
 */
add_action( 'wp_enqueue_scripts','iva_flexslider_enqueue_scripts' );

function iva_flexslider_enqueue_scripts() {
	wp_enqueue_script('iva-flexslider', THEME_JS .'/jquery.flexslider-min.js', 'jquery', '', 'in_footer' );
	wp_enqueue_style('iva-css-flexslider', THEME_CSS. '/flexslider.css', array(), '1', 'all' );
}

/* Get Options from Theme Options */
$iva_style            = get_option('atp_style');
$readmoretxt          = get_option('atp_readmoretxt')	? get_option('atp_readmoretxt')		: 'Read more';
$projectdatetxt       = get_option('atp_project_date')	? get_option('atp_project_date')	: 'Project Date:';
$projecturltxt        = get_option('atp_project_url')	? get_option('atp_project_url') 	: 'Project Url:';
$skillstxt            = get_option('atp_skills')		? get_option('atp_skills') 			: 'Skills:';
$visitsitetxt         = get_option('atp_visitsitetxt')	? get_option('atp_visitsitetxt') 	: 'Visit Site';
$categoriestxt        = get_option('atp_category')		? get_option('atp_category') 		: 'Category:';
$breadcrumb_separator = get_option('atp_breadcrumbsep', '')			? get_option('atp_breadcrumbsep') 		: '';
$projectDescription   = get_option('atp_projectDescription', '')	? get_option('atp_projectDescription') 	: 'Project Description';
$projectDetails       = get_option('atp_projectDetails', '')		? get_option('atp_projectDetails') 		: 'Project Details';
$atp_singlenavigation = get_option('atp_singlenavigation');

// Layout Options
$layout_option = get_option( 'atp_defaultlayout' );
$pagetitle_align = get_option( 'atp_sub_styling' );

// Corner Ribbons
require_once( get_template_directory() . '/framework/includes/ribbons_array.php' );

// Wocommerce Directory Path
define( 'WOOCOMMERCE_DIR', get_template_directory() . '/woocommerce' );

/**
 * Animate.css - Just-add-water CSS animation
 * A cross-browser library of CSS animations. As easy to use as an easy thing.
 * ref : https://github.com/daneden/animate.css
 */	

$iva_anim = array(
	''				=> 'Select Animation',
	'flash'			=> 'flash',
	'shake'			=> 'shake',
	'bounce'		=> 'bounce',
	'tada'			=> 'tada',
	'swing'			=> 'swing',
	'wobble'		=> 'wobble',
	'flip'			=> 'flip',
	'flipInX'		=> 'flipInX',
	'flipInY'		=> 'flipInY',
	'fadeIn'		=> 'fadeIn',
	'fadeInUp'		=> 'fadeInUp',
	'fadeInDown'	=> 'fadeInDown',
	'fadeInLeft' 	=> 'fadeInLeft',
	'fadeInRight' 	=> 'fadeInRight',
	'slideInDown' 	=> 'slideInDown',
	'slideInLeft' 	=> 'slideInLeft',
	'slideInRight'	=> 'slideInRight',
	'bounceIn' 		=> 'bounceIn', 
	'bounceInDown' 	=> 'bounceInDown', 
	'bounceInUp' 	=> 'bounceInUp',
	'bounceInLeft' 	=> 'bounceInLeft',
	'bounceInRight' => 'bounceInRight',
	'lightSpeedIn' 	=> 'lightSpeedIn'
);	

// Sociable Icons Array
$staff_social = array(
    ''			=> 'Select Sociable',
    'blogger'	=> 'Blogger',
    'delicious'	=> 'Delicious',
    'digg'		=> 'Digg',
    'facebook'	=> 'Facebook',
    'flickr'	=> 'Flickr',
    'forrst'	=> 'Forrst',
    'google'	=> 'Goolge',
    'linkedin'	=> 'Linkedin',
    'pinterest'	=> 'Pinterest',
    'skype'		=> 'Skype',
    'stumbleupon' => 'Stumbleupon',
    'twitter'	=> 'Twitter',
    'dribbble'	=> 'Dribbble',
    'yahoo'		=> 'Yahoo',
    'youtube'	=> 'Youtube'
);
ksort($staff_social); // Sort Sociabls by Alphabetical Order

// Theme Class
if ( !class_exists( 'ATP_Theme' ) ) {
    
    class ATP_Theme
    {
        public $theme_name;
   		public $meta_box;
		
        public function __construct()
        {
            $this->atp_constant();
            $this->atp_themesupport();
            $this->atp_head();
            $this->atp_themepanel();
            $this->atp_widgets();
            $this->atp_post_types();
            $this->atp_custom_meta();
			$this->atp_meta_generators();
            $this->atp_shortcodes();
            $this->atp_common();
        }
        
        function atp_constant()
        {
            // Framework General Variables and directory paths
            $theme_data;
            
            if (function_exists('wp_get_theme')) {
                $theme_data   = wp_get_theme();
                $themeversion = $theme_data->Version;
                $theme_name   = $theme_data->Name;
            } else {
                $theme_data   = (object) get_theme_data(get_template_directory() . '/style.css');
                $themeversion = $theme_data->Version;
                $theme_name   = $theme_data->Name;
            }
            
            /**
             * Set the file path based on whether the Options 
             * Framework is in a parent theme or child theme
             * Directory Structure
             */
            define('FRAMEWORK', '2.0'); //  Theme Framework
            define('THEMENAME', $theme_name);
            define('THEMEVERSION', $themeversion);
            
            define('THEME_URI', get_template_directory_uri());
            define('THEME_DIR', get_template_directory());
            define('THEME_JS', THEME_URI . '/js');
            define('THEME_CSS', THEME_URI . '/css');
            define('FRAMEWORK_DIR', THEME_DIR . '/framework/');
            define('FRAMEWORK_URI', THEME_URI . '/framework/');
            
            define('CUSTOM_META', FRAMEWORK_DIR . '/custom-meta/');
            define('CUSTOM_PLUGINS', FRAMEWORK_DIR . '/custom-plugins/');
            define('CUSTOM_POST', FRAMEWORK_DIR . '/custom-post/');
            
            define('THEME_SHORTCODES', FRAMEWORK_DIR . 'shortcode/');
            define('THEME_WIDGETS', FRAMEWORK_DIR . 'widgets/');
            define('THEME_PLUGINS', FRAMEWORK_DIR . 'plugins/');
            define('THEME_POSTTYPE', FRAMEWORK_DIR . 'custom-post/');
            define('THEME_CUSTOMMETA', FRAMEWORK_DIR . 'custom-meta/');
            
            define('THEME_PATTDIR', THEME_URI . '/images/patterns/');
        }
        
        /** 
         * Allows a theme to register its support of a certain features
         */
        function atp_themesupport()
        {
            add_theme_support( 'post-formats', array( 'aside', 'audio', 'link', 'image', 'gallery', 'quote', 'status', 'video' ) );
            add_theme_support( 'automatic-feed-links' );
            add_theme_support( 'editor-style' );
           
            /* Register Wordpress Native Menu */
            register_nav_menus( array( 'primary-menu' => 'Primary Menu' ) );
            
            /* Define Content Width */
            if ( !isset( $content_width ) ) { $content_width = 900; }
        }
        
        /* Scripts and Styles Enqueue for Options Framework */
        function atp_head()
        {
            require_once(FRAMEWORK_DIR . 'common/head.php');
        }
        
        /* Admin Interface */
        function atp_themepanel()
        {
            require_once(FRAMEWORK_DIR . 'common/atp_googlefont.php');
            require_once(FRAMEWORK_DIR . 'admin/admin-interface.php');
            require_once(FRAMEWORK_DIR . 'admin/theme-options.php');
            
            if ( isset( $_GET['page'] ) == 'advance' ) {
                require_once( FRAMEWORK_DIR . 'admin/advance-options.php' );
            }
        }
        
        /* Custom Widgets */
        function atp_widgets()
        {
			require_once( THEME_WIDGETS .'/register_widget.php');
			require_once( THEME_WIDGETS .'/contactform.php');
			require_once( THEME_WIDGETS .'/contactinfo.php');
			require_once( THEME_WIDGETS .'/flickr.php');
			require_once( THEME_WIDGETS .'/twitter.php');
			require_once( THEME_WIDGETS .'/sociable.php');
			require_once( THEME_WIDGETS .'/popularpost.php');
			require_once( THEME_WIDGETS .'/recentpost.php');
			require_once( THEME_WIDGETS .'/testimonials_submit.php');
        }
        
        /**
         * Load Custom Post Types Templates
         * @files slider, testimonials, portfolio
         */
        function atp_post_types()
        {
            require_once( THEME_POSTTYPE . '/slider.php');
            require_once( THEME_POSTTYPE . '/testimonial.php');
            require_once( THEME_POSTTYPE . '/portfolio.php');
			require_once( THEME_POSTTYPE . '/clients.php');
        }
        
        /** Load Meta Generator Templates
         * @files Slider, Menus, Testimonial, Page, Posts, Shortcodes Generator
         */
        function atp_custom_meta()
        {

            require_once(THEME_CUSTOMMETA . '/page-meta.php');
            require_once(THEME_CUSTOMMETA . '/post-meta.php');
            require_once(THEME_CUSTOMMETA . '/slider-meta.php');
            require_once(THEME_CUSTOMMETA . '/testimonial-meta.php');
            require_once(THEME_CUSTOMMETA . '/portfolio-meta.php');
			if ( class_exists('woocommerce') ) {
				require_once(WOOCOMMERCE_DIR . '/product-meta.php');
			}
			require_once(THEME_CUSTOMMETA . '/clients-meta.php');
        }
		
		function atp_meta_generators() {
			require_once( THEME_CUSTOMMETA . '/meta-generator.php' );
			require_once( THEME_CUSTOMMETA . '/shortcode-meta.php' );
			require_once( THEME_CUSTOMMETA . '/shortcode-generator.php' );
		}
		
        /* Shortcodes */
        function atp_shortcodes()
        {
			require_once( THEME_SHORTCODES . '/accordion.php');
			require_once( THEME_SHORTCODES . '/boxes.php');
			require_once( THEME_SHORTCODES . '/blog.php');
			require_once( THEME_SHORTCODES . '/portfolio.php');
			require_once( THEME_SHORTCODES . '/buttons.php');
			require_once( THEME_SHORTCODES . '/contactform.php');
			require_once( THEME_SHORTCODES . '/contactinfo.php');
			require_once( THEME_SHORTCODES . '/flickr.php');
			require_once( THEME_SHORTCODES . '/general.php');
			require_once( THEME_SHORTCODES . '/gallery.php');
			require_once( THEME_SHORTCODES . '/feature_box.php');
			require_once( THEME_SHORTCODES . '/image.php');
			require_once( THEME_SHORTCODES . '/layout.php');
			require_once( THEME_SHORTCODES . '/lightbox.php');
			require_once( THEME_SHORTCODES . '/planbox.php');
			require_once( THEME_SHORTCODES . '/messageboxes.php');
			require_once( THEME_SHORTCODES . '/flexslider.php');
			require_once( THEME_SHORTCODES . '/tabs_toggles.php');
			require_once( THEME_SHORTCODES . '/twitter.php');
			require_once( THEME_SHORTCODES . '/gmap.php');
			require_once( THEME_SHORTCODES . '/sociable.php');
			require_once( THEME_SHORTCODES . '/videos.php');
			require_once( THEME_SHORTCODES . '/staff.php');
			require_once( THEME_SHORTCODES . '/progressbar.php');
			require_once( THEME_SHORTCODES . '/services.php');
			require_once( THEME_SHORTCODES . '/carousel_list.php');
			require_once( THEME_SHORTCODES . '/clients.php');
			require_once( THEME_SHORTCODES . '/testimonials.php');
			require_once( THEME_SHORTCODES . '/progresscircle.php');
        }
        
        /** 
         * Theme Functions
         * @uses skin generator
         * @uses twitter class
         * @uses pagination
         * @uses sociables
         * @uses Aqua imageresize // Credits : http://aquagraphite.com/
         * @uses plugin activation class
         */
        function atp_common()
        {
            require_once(THEME_DIR . '/css/skin.php');
            require_once(FRAMEWORK_DIR . 'common/class_twitter.php');
            require_once(FRAMEWORK_DIR . 'common/atp_generator.php');
            require_once(FRAMEWORK_DIR . 'common/pagination.php');
            require_once(FRAMEWORK_DIR . 'common/sociables.php');
            require_once(FRAMEWORK_DIR . 'includes/image_resize.php');
            require_once(FRAMEWORK_DIR . 'includes/class-activation.php');
        }
        
        /** 
         * Custom Switch case for fetching
         * posts, post-types, custom-taxonomies, tags
         */
        
        function atp_variable($type)
        {
            $options = array();
            switch ($type) {
                case 'pages': // Get Page Titles
                    $atp_entries = get_pages('sort_column=post_parent,menu_order');
                    foreach ($atp_entries as $atpPage) {
                        $options[$atpPage->ID] = $atpPage->post_title;
                    }
                    break;
                case 'slider': // Get Slider Slug and Name
                    $atp_entries = get_terms('slider_cat', 'orderby=name&hide_empty=0');
                    foreach ($atp_entries as $atpSlider) {
                        $options[$atpSlider->slug] = $atpSlider->name;
                        $slider_ids[]              = $atpSlider->slug;
                    }
                    break;
				case 'product': // Get Slider Slug and Name
					$atp_entries = get_terms('product_cat', 'orderby=name&hide_empty=0');
					if ( class_exists('woocommerce') ) {
						$atp_entries = get_terms('product_cat', 'orderby=name&hide_empty=0');
						if (count ($atp_entries) >= 1) {
							foreach ($atp_entries as $atpProduct) {
								$options[$atpProduct->slug] = $atpProduct->name;
								$slider_ids[]               = $atpProduct->slug;
							}
						}
					}
                    break;				
                case 'portfolio': // Get Portfolio Slug and Name
                    $atp_entries = get_terms('portfolio_cat', 'orderby=name&hide_empty=0');
                    foreach ($atp_entries as $atpPortfolio) {
                        $options[$atpPortfolio->slug] = $atpPortfolio->name;
                        $slider_ids[]                 = $atpPortfolio->slug;
                    }
                    break;
                case 'posts': // Get Posts Slug and Name
                    $atp_entries = get_categories('hide_empty=0');
                    foreach ($atp_entries as $atpPosts) {
                        $options[$atpPosts->slug] = $atpPosts->name;
                        $atp_posts_ids[]          = $atpPosts->slug;
                    }
                    break;
                case 'categories':
                    $atp_entries = get_categories('hide_empty=true');
                    foreach ($atp_entries as $atp_posts) {
                        $options[$atp_posts->term_id] = $atp_posts->name;
                        $atp_posts_ids[]              = $atp_posts->term_id;
                    }
                    break;
                case 'testimonial': // Get Testimonial Slug and Name
                    $atp_entries = get_terms('testimonial_cat', 'orderby=name&hide_empty=0');
                    foreach ($atp_entries as $atpTestimonial) {
                        $options[$atpTestimonial->slug] = $atpTestimonial->name;
                        $testimonialvalue_id[]          = $atpTestimonial->slug;
                    }
                    break;
					
				case 'clients_cat': // Get Events Slug and Name
                    $atp_entries = get_terms('client_cat', 'orderby=name&hide_empty=0');
                    foreach ($atp_entries as $atpEvents) {
                        $options[$atpEvents->slug] = $atpEvents->name;
                        $eventsvalue_id[]          = $atpEvents->slug;
                    }
                    break;	
					
                case 'tags': // Get Taxonomy Tags
                    $atp_entries = get_tags(array(
                        'taxonomy' => 'post_tag'
                    ));
                    foreach ($atp_entries as $atpTags) {
                        $options[$atpTags->slug] = $atpTags->name;
                    }
                    break;
                case 'slider_type': // Slider Arrays for Theme Options
                    $options = array(
                        '' 					=> 'Select Slider',
                        'flexslider' 		=> 'Flex Slider',
                        'eislider' 			=> 'Ei Slider',
                        'nivoslider' 		=> 'Nivo Slider',	
						'carousel_slider'	=> 'Special Offers Slider',							
                        'static_image' 		=> 'Static Image',
                        'customslider'		=> 'Custom Slider'
                    );
                    break;
            }
            
            return $options;
        }
    }
}

$atp_theme = new ATP_Theme();
$shortname = 'atp';
$url       = FRAMEWORK_URI . 'admin/images/';

add_action('after_setup_theme', 'atp_theme_setup');

function atp_theme_setup()
{
    load_theme_textdomain('THEME_FRONT', get_template_directory() . '/languages');
    load_theme_textdomain('ATP_ADMIN_SITE', get_template_directory() . '/languages');
    
    add_filter('the_content', 'pre_process_shortcode');
    add_filter('widget_text', 'do_shortcode');
    add_filter('posts_where', 'multi_tax_terms');
    add_filter('wp_trim_excerpt', 'new_excerpt_more');
    add_filter('upload_mimes', 'atp_custom_upload_mimes');
}

// Admin Login Logo
function atp_custom_login_logo()
{
    if (get_option('atp_admin_logo')) {
        echo '<style type="text/css">.login h1 a { background-image:url(' . get_option('atp_admin_logo') . ') !important; }</style>';
    }
}
add_action('login_head', 'atp_custom_login_logo');

function pre_process_shortcode($content) {
	global $shortcode_tags;
	foreach ($shortcode_tags as $key => $value){
		 if( @stristr($value, 'iva_') ) {
			$shortcode[$key]=$key;
		}
	}


	$block = join("|",$shortcode);
	 
	// opening tag
	$rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);
	// closing tag
	$rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)?/","[/$2]",$rep);
	 
	return $rep;
	}

/**
 * Multiple taxonomies
 */
function multi_tax_terms($where)
{
    global $wp_query, $wpdb;
    
    if (isset($wp_query->query_vars['term']) && (strpos($wp_query->query_vars['term'], ',') !== false && strpos($where, "AND 0") !== false)) {
        //Get the terms
        $term_arr = explode(",", $wp_query->query_vars['term']);
        foreach ($term_arr as $term_item) {
            $terms[] = get_terms($wp_query->query_vars['taxonomy'], array(
                'slug' => $term_item
            ));
        } //$term_arr as $term_item
        
        //Get the id of posts with that term in that taxonomy
        foreach ($terms as $term) {
            $term_ids[] = $term[0]->term_id;
        } //$terms as $term
        
        $post_ids = get_objects_in_term($term_ids, $wp_query->query_vars['taxonomy']);
        
        if (!is_wp_error($post_ids) && count($post_ids)) {
            // Build the new query
            $new_where = " AND $wpdb->posts.ID IN (" . implode(', ', $post_ids) . ") ";
            $where     = str_replace("AND 0", $new_where, $where);
        } else {
        }
    } //$wp_query
    return $where;
}

// Excerpt removes ...
function new_excerpt_more($excerpt)
{
    return str_replace('[...]', '...', $excerpt);
}

//  Custom Upload file extension
function atp_custom_upload_mimes($existing_mimes)
{
    // add the file extension to the array
    $existing_mimes['eot']  = 'font/eot';
    $existing_mimes['ttf']  = 'font/ttf';
    $existing_mimes['woff'] = 'font/woff';
    $existing_mimes['svg']  = 'font/svg';
    
    return $existing_mimes;
}
 if ( ! function_exists( 'get_attachment_id_from_src' ) ) {
		 function get_attachment_id_from_src ($image_src) {

			global $wpdb;
			$query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$image_src'";
			$id = $wpdb->get_var($query);
			return $id;

		}
	}
/***
 * code that executes when theme is being activated
 */
if (is_admin() && isset($_GET['activated']) && $pagenow == 'themes.php') {
    
    $default_option_values = '';
	//add default values for the theme options
    add_option('atp_default_template_option_values', $default_option_values, '', 'yes');
    atp_options();
    update_option_values($options, unserialize(base64_decode($default_option_values)));
}

// Limit Post Title by amount of characters
function short_title() {
	$producttitle = get_the_title();
	$title = html_entity_decode($producttitle, ENT_QUOTES, "UTF-8"); 
	$limit = "20";
	$pad="...";

if(strlen($title) >= ($limit+3)) {
	$title = mb_substr($title, 0, $limit) . $pad; }
echo $title;
}
if ( class_exists('woocommerce') ) {
	//Woocommerce Config File
	require_once( 'woocommerce/config.php' );
}

?>