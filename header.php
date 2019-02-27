<!DOCTYPE html>
<html <?php language_attributes(); ?>
 <head>
   
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <?php wp_head(); ?>
 </head>
<body id="page-top">
   <header class="my-logo">
   <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
  
	<nav  style="padding-top:40px";>
     	 <div class="container col-md-3">

     	 </div>
    	  <div class="nav-menu col-md-8">
       		 <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
     	 </div>
            
	</nav>
 
    
</header