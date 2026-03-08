<?php

include "constans.php";

add_action('after_setup_theme', 'wpdocs_theme_setup');
/**
 * Load translations for wpdocs_theme
 */
function wpdocs_theme_setup(){
    load_theme_textdomain('Optimun Home', get_template_directory() . '/languages');
}

/**
 * Theme suports
 */
function mec_setup(){

    //imagenes destacadas
    add_theme_support('post-thumbnails');

    //titulos para seo
    add_theme_support('title-tag');
    add_theme_support('widgets');

}

add_action('after_setup_theme', 'mec_setup');

// Función para registrar la zona de widgets
function custom_theme_widgets() {
    register_sidebar( array(
        'name'          => 'Zona de Widgets Principal',
        'id'            => 'main-widget-area',
        'description'   => 'Esta es la zona principal de widgets.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}

// Enganchar la función a la acción 'widgets_init'
add_action( 'widgets_init', 'custom_theme_widgets' );


function ces_mec_styles_scripts(){
     // Bootstrap icons
     wp_enqueue_style('bootstrap_icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"', '1.11.1', false);

     // Bootstrap style
     wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '4.1.3');
 
     wp_enqueue_script('bootstrap_jq', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
     wp_enqueue_script('bootstrap_poper', 'https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js', array(), '4.1.3');
 
     // Bootstrap scripts
     wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js', array(), '4.1.3');
    
     //splide scripts
     wp_enqueue_script('splide_js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array('jquery'), '4.1.3', true);


     wp_enqueue_style('splide_css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css', array(), '4.1.3');

    wp_register_style('mec-style', get_template_directory_uri() . '/assets/css/main.css', array(), ASSETS_VERSION, 'all');
    wp_enqueue_style('mec-style');

  
   
 
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), ASSETS_VERSION, true);

    // wp_enqueue_script('animation', get_template_directory_uri() . '/assets/js/animation.js', array('jquery'), ASSETS_VERSION, true);

    /* Font awesome */
     wp_register_style('font-awesome', get_template_directory_uri() . '/assets/fontawesome/css/all.min.css', 'all');
     wp_enqueue_style('font-awesome');
  
    }
add_action("wp_enqueue_scripts", "ces_mec_styles_scripts");   

function acf_save_field_to_json( $field ) {
    // Obtén el nombre del campo
    $field_name = $field['name'];
    
    // Obtén los datos del campo en formato JSON
    $json_data = json_encode($field);
    
    // Ruta donde se guardarán los archivos JSON
    $json_file_path = get_stylesheet_directory() . '/acf-json/' . $field_name . '.json';
    
    // Guarda el JSON en el archivo
    file_put_contents($json_file_path, $json_data);
}

add_action('acf/save_field', 'acf_save_field_to_json');


/* Menu de navegacion */

function ces_mec_menus()
{
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu', 'mec'),
            'secondary-menu' => __('Secondary Menu', 'mec')
        )
    );
}
add_action('init', 'ces_mec_menus');

/**
 * Modules
 */
require_once get_template_directory() . '/modules/modules.php';
require_once get_template_directory() . '/inc/custom_blocks.php';

/*Permitir la subida de archivos svg*/
function allow_svg_upload($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');


/**
 * Breadcrumbs
 */
function crear_breadcrumbs() {
    echo '<a href="' . home_url() . '">Home&nbsp;</a>';

    if (is_category() || is_single()) {
        echo ' &raquo; ';
        the_category(' &bull; ');
        if (is_single()) {
            echo ' &raquo; ';
            the_title();
        }
    } elseif (is_page() && !is_front_page()) {
        echo ' &raquo;&nbsp; ';
        echo get_the_title();
    } elseif (is_search()) {
        echo ' &raquo; Búsqueda de "' . get_search_query() . '"';
    } elseif (is_404()) {
        echo ' &raquo; Página no encontrada';
    }
}


