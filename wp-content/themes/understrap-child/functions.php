<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();

    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
     wp_enqueue_script( 'child-understrap-scripts1', get_stylesheet_directory_uri() . '/js/child-theme-custom.js', array(), $the_theme->get( 'Version' ), true );
}
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


/**
 * Add search box to primary menu



function wpgood_nav_search($items, $args) {
    // If this isn't the primary menu, do nothing
    if( !($args->theme_location == 'primary') ) 
    return $items;
    // Otherwise, add search form
    return $items . '<li>' . get_search_form(false) . '</li>';
}
add_filter('wp_nav_menu_items', 'wpgood_nav_search', 10, 2);

 */
add_filter( 'wp_nav_menu_items','add_search_box', 10, 2 );
function add_search_box( $items, $args ) {
$items .= '<li class="menu-item mega-menu-item trazi">' . get_search_form( false ) . '</li>';
return $items;
}


register_sidebar( array(
            'name'          => __( 'Check-up', 'understrap' ),
            'id'            => 'check-up',
            'description'   => 'Left sidebar widget area',
            'before_widget' => '<aside data-spy="affix" data-offset-top="205" id="%1$s" class="top fixedsticky widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Pazienti', 'understrap' ),
            'id'            => 'pazienti',
            'description'   => 'Left sidebar widget area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Aziende', 'understrap' ),
            'id'            => 'aziende',
            'description'   => 'Left sidebar widget area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3  class="widget-title">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Convenzioni', 'understrap' ),
            'id'            => 'convenzioni',
            'description'   => 'Left sidebar widget area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Collaborazioni', 'understrap' ),
            'id'            => 'collaborazioni',
            'description'   => 'Left sidebar widget area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Multimedica Lab', 'understrap' ),
            'id'            => 'multimedica Lab',
            'description'   => 'Left sidebar widget area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
        register_sidebar( array(
            'name'          => __( 'Staff', 'understrap' ),
            'id'            => 'staff',
            'description'   => 'Left sidebar widget area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
        register_sidebar( array(
            'name'          => __( 'Dove Siamo', 'understrap' ),
            'id'            => 'dove siamo',
            'description'   => 'Left sidebar widget area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Contatti', 'understrap' ),
            'id'            => 'contatti',
            'description'   => 'Left sidebar widget area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );