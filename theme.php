<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DS Theme</title>
    <?php wp_head(); ?>
</head>

<?php 
    if ( is_front_page() ) :
        $awesome_classes = array('ds-class', 'my-ds-class');
    else :
        $awesome_classes = array('no-ds-class');
    endif;
?>

<body <?php body_class( $awesome_classes ); ?>>
    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>        
</body>
</html>
