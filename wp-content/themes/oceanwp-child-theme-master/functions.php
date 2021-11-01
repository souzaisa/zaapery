<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
/* enqueue script for parent theme stylesheeet */        
function childtheme_parent_styles() {
 
	// enqueue style
	wp_enqueue_style( 'parent', get_template_directory_uri().'/assets/css/style.min.css' );                       
}
add_action( 'wp_enqueue_scripts', 'childtheme_parent_styles');
function oceanwp_child_enqueue_parent_style() {
	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );
	// Load the stylesheet
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style( 'child-materialize', get_stylesheet_directory_uri() . '/materialize/css/materialize.css', array( 'oceanwp-style' ), $version );

	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), false, true );
	wp_enqueue_script( 'materialize_js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'script.js ',  get_stylesheet_directory_uri() .'/assets/js/script.js', false, '' );
	wp_enqueue_script('fontawesome', "https://kit.fontawesome.com/dfb8742735.js", array(), false, true);
}
add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );

// Tamanho de imagem personalizado
function wpdocs_theme_setup() {
    add_image_size( 'banner-zaapery', 1500, 750, true);
}
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );


// REMOVER A OPÇÃO DE DELETAR UM POST (POR CAUSA DO POST TYPE SERVIR PARA CONFIGURAÇÕES)
function prevent_default_theme_deletion($allcaps, $caps, $args) {
  $post_id = 285; //id do post
  if ( isset( $args[0] ) && isset( $args[2] ) && $args[2] == $post_id && $args[0] == 'delete_post' ) {
      $allcaps[ $caps[0] ] = false;
  }
  return $allcaps;
}
add_filter ('user_has_cap', 'prevent_default_theme_deletion', 10, 3);

/* Mostrar a topbar somente se o usuário tiver logado
function topbar_conditional_display( $return ) {
 
    if ( is_user_logged_in() ) {
        $return = true;
     } else {
        $return = false; 
    }

    // Return
    return $return;
    
}
add_filter( 'ocean_display_top_bar', 'topbar_conditional_display' );*/

//Limitar a dashboard do gerente da loja
function remove_menu_items() { 
  if( current_user_can( 'shop_manager' ) ): 
    remove_menu_page( 'index.php' ); 
    remove_menu_page( 'edit-comments.php' ); 
    remove_menu_page('edit.php'); 
    remove_menu_page('tools.php'); 
    remove_menu_page( 'themes.php' ); 
    remove_menu_page( 'edit.php?post_type=page' ); 
    remove_menu_page( 'edit.php?post_type=elementor_library&tabs_group=library' ); 
    remove_menu_page( 'customize.php?url=https%3A%2F%2Fzaapery.com.br%2F' ); 

  endif;
}
add_action( 'admin_menu', 'remove_menu_items' );

//Shortcode menu, usado no footer
function print_menu_shortcode($atts, $content = null) {
	extract(shortcode_atts(array( 'name' => null, 'class' => null ), $atts));
	return wp_nav_menu( array( 'menu' => $name, 'menu_class' => 'myclass', 'echo' => false ) );
}
add_shortcode('menu', 'print_menu_shortcode');


//Cálculo de frete depois do botão "adicionar ao carrinho"
add_filter('cfpp_hook_location', 'woocommerce_after_add_to_cart_button');
//Login por rede social
add_action( 'woocommerce_after_customer_login_form', 'custom_login_text' );
function custom_login_text() {
    if( ! is_user_logged_in() ){
        //Your link
        $link = home_url( '/register' );

        // The displayed (output)
        echo do_shortcode( '[nextend_social_login]' ); 
    }
}

function create_post_type() {
  //FAQ
  register_post_type( 'faq',
  array(
    'labels' => array(
      'name' => __( 'FAQ' ),
      'singular_name' => __( 'FAQ' )
    ),
    'public'      => true,
    'has_archive' => false,
        'menu_icon'   => 'dashicons-megaphone',//Modificar o ícone que aparecerá na dashboard
        'supports'    => ['title', 'editor'],//Seções presentes no post type
    'rewrite'     => array('slug' => 'faq')
  )
);

    // Configuração das informações do site
    register_post_type( 'configuração',
      array(
        'labels' => array(
          'name' => __( 'Configurações do Site' ),
          'singular_name' => __( 'Configuração' )
        ),
        'public'      => true,
        'has_archive' => false,
            'menu_icon'   => 'dashicons-admin-generic',//Modificar o ícone que aparecerá na dashboard
            'supports'    => ['title'],//Seções presentes no post type
        'rewrite'     => array('slug' => 'configuracao')
      )
    );
   
}add_action( 'init', 'create_post_type' );
