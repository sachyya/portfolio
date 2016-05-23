<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sachyya
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--PRELOADER-->
    <div id="preloader">
      <div id="status">
        <img alt="logo" src="<?php echo get_theme_mod( 'sachyya_header_logo_setting' );?>">
      </div>
    </div>
    <!--/.PRELOADER END-->

    <!--HEADER -->
    <div class="header">
      <div class="for-sticky">
        <!--LOGO-->
        <div class="col-md-2 col-xs-6 logo">
          <a href="<?php echo home_url(); ?>"><img alt="logo" class="logo-nav" src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
        </div>
        <!--/.LOGO END-->
      </div>
      <div class="menu-wrap">
        <nav class="menu">
          <div class="menu-list">
            <a data-scroll="" href="#home" class="active">
              <span>Home</span>
            </a>
            <a data-scroll="" href="#about">
              <span>About</span>
            </a>
            <a data-scroll="" href="#work">
              <span>Work</span>
            </a>
             <a data-scroll="" href="#services">
              <span>Services</span>
            </a>
            <a data-scroll="" href="#employement">
              <span>Employement</span>
            </a>
            <a data-scroll="" href="#skill">
              <span>Skills</span>
            </a>
            <a data-scroll="" href="#education">
              <span>Education</span>
            </a>
            <a data-scroll="" href="#testimonial">
              <span>Testimonial</span>
            </a>
            <a data-scroll="" href="#blog">
              <span>Blog</span>
            </a>
            <a data-scroll="" href="#contact">
              <span>Contact</span>
            </a>
          </div>
        </nav>
        <button class="close-button" id="close-button">Close Menu</button>
      </div>
      <?php if ( is_front_page() ) { ?>
      <button class="menu-button" id="open-button">
        <span></span>
        <span></span>
        <span></span>
      </button><!--/.for-sticky-->
      <?php } ?>
    </div>
    <!--/.HEADER END-->

	<!--CONTENT WRAP-->
    <div class="content-wrap">
      <!--CONTENT-->
      <div class="content">