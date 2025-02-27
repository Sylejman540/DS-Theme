<?php 
function mytheme_enqueue_assets(){
    // Load theme stylesheet
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());

    // Load custom JavaScript file
    wp_enqueue_script('mytheme-script', get_template_directory_uri().'/assets/js/script.js', array('jquery'), false, true);

    // Enqueue comment reply script
    
}
?>