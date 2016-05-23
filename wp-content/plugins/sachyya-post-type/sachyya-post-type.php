<?php
/**
 * @package Sachyya_Post_Type
 * @version 1.6
 */
/*
Plugin Name: Sachyya Post Type
Plugin URI: https://sachyya.com/
Description: This is a plugin made to custom post types plugins required for this portfolio.
Author: Sachyya
Version: 1.0
Author URI: http://sachyya.com/
*/

add_action( 'init', 'create_work_post_type' );
function create_work_post_type() {
  register_post_type( 'sachyya_work',
    array(
      'labels' => array(
        'name' => __( 'Works' ),
        'singular_name' => __( 'Work' ),
        'add_new_item'       => __( 'Add New Work', 'sachyya' ),
      ),
      'public' => true,
      'has_archive' => true,
      'supports'           => array( 'title', 'thumbnail' ),
      'menu_icon' => 'dashicons-editor-paste-word'
    )
  );

  register_post_type( 'sachyya_skill',
    array(
      'labels' => array(
        'name' => __( 'Skills' ),
        'singular_name' => __( 'Skill' ),
        'add_new_item'       => __( 'Add New Skill', 'sachyya' ),
      ),
      'public' => true,
      'has_archive' => true,
      'supports'           => array( 'title' ),
      'menu_icon' => 'dashicons-editor-code'
    )
  );

  register_post_type( 'sachyya_service',
    array(
      'labels' => array(
        'name' => __( 'Services' ),
        'singular_name' => __( 'Service' ),
        'add_new_item'       => __( 'Add New Service', 'sachyya' ),
      ),
      'public' => true,
      'has_archive' => true,
      'supports'           => array( 'title', 'editor' ),
      'menu_icon' => 'dashicons-feedback'
    )
  );

  register_post_type( 'sachyya_employement',
    array(
      'labels' => array(
        'name' => __( 'Employements' ),
        'singular_name' => __( 'Employement' ),
        'add_new_item'       => __( 'Add New Employement', 'sachyya' ),
      ),
      'public' => true,
      'has_archive' => true,
      'supports'           => array( 'editor' ),
      'menu_icon' => 'dashicons-admin-post'
    )
  );

  register_post_type( 'sachyya_education',
    array(
    'labels'        => array(
        'name'          => __( 'Educations' ),
        'singular_name' => __( 'Education' ),
        'add_new_item'  => __( 'Add New Education', 'sachyya' ),
    ),
    'public'      => true,
    'has_archive' => true,
    'supports'    => array( 'title', 'editor' ),
    'menu_icon'   => 'dashicons-calendar-alt'
    )
  );

  register_post_type( 'sachyya_testimonial',
    array(
    'labels'        => array(
        'name'          => __( 'Testimonials' ),
        'singular_name' => __( 'Testimonial' ),
        'add_new_item'  => __( 'Add New Testimonial', 'sachyya' ),
    ),
    'public'      => true,
    'has_archive' => true,
    'supports'    => array( 'title', 'editor' ),
    'menu_icon'   => 'dashicons-universal-access-alt'
    )
  );
}