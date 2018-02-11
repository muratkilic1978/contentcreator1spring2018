<!DOCTYPE html>
<!-- Displays the language attributes for the html tag -->
<html <?php language_attributes(); ?> >
<head>
    <!-- the bloginfo('charset') displays the “Encoding for pages" set in Settings > Reading. -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- the bloginfo('name') displays the site-title in WordPress -->
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    
   <!-- site-header -->
   <header class="site-header">
       <!-- returns the path to the home URL  -->
       <h1><a href="<?php echo home_url();   ?>"> <?php bloginfo('name'); ?> </a></h1>
        <!-- the bloginfo('description') displays the tag-line in WordPress-settings -->
       <h5><?php bloginfo('description'); ?></h5>
   </header>
  
 




