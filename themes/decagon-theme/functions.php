<?php
include( get_theme_file_path('/includes/theme_customizer.php') );
include( get_theme_file_path('/includes/customizer/social.php') );
include( get_theme_file_path('/includes/helper-function.php') );

function teamE_decagon_files(){
    wp_enqueue_style('decagon_main_css', esc_url(get_stylesheet_uri()) );
    wp_enqueue_style('mulish_font', '//fonts.googleapis.com/css2?family=Mulish:wght@400;600;700;800&display=swap' );
    wp_enqueue_style('bootstrap_1', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_style('slick_css', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
    wp_enqueue_style('slick_theme', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
    wp_enqueue_script('tag_manager', '//www.googletagmanager.com/gtag/js?id=UA-167189023-1', null, '1.0', false);
    wp_enqueue_script('gtag', esc_url(get_theme_file_uri('/assets/js/gtag.js')), null, '1.0', false);
    wp_enqueue_script('bootstrap-script', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js',
     null, '1.0', true);
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', null, '1.0', true); 
    wp_enqueue_script('slick-carousel', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js',
     null, '1.0', true);
    wp_enqueue_script('script.js', esc_url(get_theme_file_uri('/assets/js/script.js')), null, '1.0', true);
    
}

add_action('wp_enqueue_scripts','teamE_decagon_files' );

function tag_manager_async_scriptsfunction( $tag, $handle ) {

	if ( 'tag_manager' !== $handle ) {
		return $tag;
	}

	return str_replace( ' src', ' async src', $tag );

}
add_filter( 'script_loader_tag', 'tag_manager_async_scriptsfunction', 10, 3 );

function decagon_features(){
    $arg = array(
      'default-image' => get_theme_file_uri('assets/img/hero.jpg'),
      'header-text' => true,
      'default-text-color' => '000',
       'random-default' => false,
       'uploads'       => true,
       'admin-head-callback' => 'adminhead_cb',
       'admin-preview-callback' => 'adminpreview_cb',
       'width' => 1920,
        'height' => 1279,
       'flex-width' => true,
       'flex-height' => true,
    );
    add_theme_support('custom-header', $arg);
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    register_nav_menu('main_menu', 'Main Menu');
    register_nav_menu('footer_menu','Footer Menu' );
}

add_action('after_setup_theme', 'decagon_features');

function top_menu_classes($classes, $item, $args){
    if($args->theme_location == 'main_menu'){
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'top_menu_classes', 1, 3);

  //This function add class to anchor tag in top menu
function my_walker_nav_menu_start_el($item_output, $item, $depth, $args) {
    
    $pos = stripos($item_output, ">");
    $str = rtrim(substr($item_output, $pos + 1), '</a>');
    $str = trim($str);
    if($str === 'Get Started'){
      $classes = 'nav-link nav-btn';
    }
    else{
      $classes = 'nav-link';
    }

    $item_output = preg_replace('/<a /', '<a class="'.$classes.'"', $item_output, 1);
    return $item_output;
  }
add_filter('walker_nav_menu_start_el', 'my_walker_nav_menu_start_el', 10, 4);


function decagon_footer_widgets(){

    register_sidebar(array(
        'name' => __('Footer Links'),
        'id' => 'footer_link',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="footer-heading">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
      'name' => __('Footer Locations'),
      'id' => 'footer_location',
      'before_widget' => '<div class="footer-links">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="footer-heading">',
      'after_title' => '</h4>',
    ));

    register_sidebar(array(
      'name' => __('Footer Contacts'),
      'id' => 'footer_contact',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="footer-heading">',
      'after_title' => '</h4>',
    ));

    register_sidebar(array(
      'name' => __('Footer Social'),
      'id' => 'footer_social',
      'class' => 'footer_social',
      'before_widget' => '',
      'after_widget' => '',
      
      
    ));

}
add_action('widgets_init', 'decagon_footer_widgets');

function decagon_get_sidebar($widget){
    // $content = '';
    // ob_start();
    // dynamic_sidebar($widget);
    // $content = ob_get_clean();
    // return str_replace("<ul>", '<ul class="footer-links">', $content);
  


    // ob_start();
    // dynamic_sidebar($widget); 
    // $sidebar = ob_get_contents();
    // ob_end_clean();

    // $sidebar_corrected_ul = str_replace("<ul>", '<ul class="footer-links">', $sidebar);
    // return $sidebar_corrected_ul;

}

add_action('customize_register', 'decagon_customizer');

?>
