<?php

function wordPress_ressources(){
    # wp_enqueue_style registers the style if source provided (does NOT overwrite) and enqueues. get_stylesheet_uri() returns the path to stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
# add_action() executes the function wordPress_ressources
add_action('wp_enqueue_scripts','wordPress_ressources')

?>