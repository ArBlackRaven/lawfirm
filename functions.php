<?php 

add_theme_support("menus");


// this function to add all the style sheets 
function add_styles() {
    wp_enqueue_style("tailwind_style_file",(get_template_directory_uri() . "/src/output.css"));
    wp_enqueue_style("main_style_file",(get_template_directory_uri() . "/style.css"));
}
function add_scripts() {
    wp_enqueue_script("main_script_file",(get_template_directory_uri() . "/js.js"), array(),"", true );
}

// this function to make the theme support the navgation menus
function register_the_nav_menu () {
    register_nav_menu("nav_bar", __("is menu is on to of the page"));
}
 // add the sheets
add_action("wp_enqueue_scripts","add_styles");

 // add the scripts
add_action("wp_enqueue_scripts","add_scripts");

// add the nav menus support
add_action("init","register_the_nav_menu");