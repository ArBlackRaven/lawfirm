<?php 

function add_styles() { 
    wp_enqueue_style("main_style_file",(get_template_directory_uri() . "/style.css"));
    wp_enqueue_style("tailwind_style_file",(get_template_directory_uri() . "/tailwind/src/output.css"));
}

add_action("wp_enqueue_scripts","add_styles");