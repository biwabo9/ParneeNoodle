<?php  

function parnee_files(){
   wp_enqueue_script('parnee-fontawesome', '//kit.fontawesome.com/75126a8bc7.js', NULL, '1.0', true);
   wp_enqueue_script('parnee-bootstrap01', '//code.jquery.com/jquery-3.3.1.slim.min.js', NULL, '1.0', true);
   wp_enqueue_script('parnee-bootstrap02', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', NULL, '1.0', true);
   wp_enqueue_script('parnee-bootstrap03', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', NULL, '1.0', true);
   wp_enqueue_style('bootstrap-style', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
   wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Amatic+SC&display=swap');
   wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
   wp_enqueue_style('parnee_main_styles', get_stylesheet_uri()); 
}

add_action('wp_enqueue_scripts', 'parnee_files');

function parnee_features() {
   add_theme_support('title-tag');
}

add_action('after_setup_theme', 'parnee_features');

add_theme_support('menus');