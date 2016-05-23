<?php
/**
 * sachyya Theme Customizer.
 *
 * @package sachyya
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function sachyya_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    /*
    Extra options in site identitiy section
     */
    // Header Logo
    $wp_customize->add_setting( 'sachyya_header_logo_setting', array(
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sachyya_header_logo_setting', array(
        'label'    => __( 'Chage Header Logo', 'sachyya' ),
        'section'  => 'title_tagline',
        'settings' => 'sachyya_header_logo_setting',
    ) ) );

    // Footr Logo
    $wp_customize->add_setting( 'sachyya_footer_logo_setting', array(
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sachyya_footer_logo_setting', array(
        'label'    => __( 'Chage Footer Logo', 'sachyya' ),
        'section'  => 'title_tagline',
        'settings' => 'sachyya_footer_logo_setting',
    ) ) );

    /**
     * Front Page Section
     */
    $wp_customize->add_panel( 'sachyya_home_panel', array(
        'description'    => __( 'Home Page Sections', 'sachyya' ),
        'capability'     => 'edit_theme_options',
        'priority'       => 20,
        'title'          => __( 'Home Page Sections', 'sachyya' ),
    ) );

    /*
    About
     */
    $wp_customize->add_section( 'sachyya_about_section', array(
        'description'   => __( 'Edit the about section.', 'sachyya' ),
        'panel'         => 'sachyya_home_panel',
        'title'         => __( 'Edit About Section', 'sachyya' ),
        'priority'      => 201,
    ) );

    // Image
    $wp_customize->add_setting( 'sachyya_about_image_setting', array(
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sachyya_about_image_setting', array(
        'label'    => __( 'Change Image', 'sachyya' ),
        'section'  => 'sachyya_about_section',
        'settings' => 'sachyya_about_image_setting',
    ) ) );

    // Quote
    $wp_customize->add_setting( 'sachyya_about_quote_setting', array(
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'sachyya_about_quote_setting', array(
        'label'    => __( 'Edit Quote', 'sachyya' ),
        'section'  => 'sachyya_about_section',
        'settings' => 'sachyya_about_quote_setting',
        'type'     => 'textarea',
    ) );

    // Name
    $wp_customize->add_setting( 'sachyya_about_name_setting', array(
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'sachyya_about_name_setting', array(
        'label'    => __( 'Edit Name', 'sachyya' ),
        'section'  => 'sachyya_about_section',
        'settings' => 'sachyya_about_name_setting',
        'type'     => 'text',
    ) );

    // Phone
    $wp_customize->add_setting( 'sachyya_about_phone_setting', array(
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'sachyya_about_phone_setting', array(
        'label'    => __( 'Edit Telephone', 'sachyya' ),
        'section'  => 'sachyya_about_section',
        'settings' => 'sachyya_about_phone_setting',
        'type'     => 'tel',
    ) );

    // Email
    $wp_customize->add_setting( 'sachyya_about_email_setting', array(
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'sachyya_about_email_setting', array(
        'label'    => __( 'Edit Email', 'sachyya' ),
        'section'  => 'sachyya_about_section',
        'settings' => 'sachyya_about_email_setting',
        'type'     => 'email',
    ) );

    // Address
    $wp_customize->add_setting( 'sachyya_about_address_setting', array(
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'sachyya_about_address_setting', array(
        'label'    => __( 'Edit Address', 'sachyya' ),
        'section'  => 'sachyya_about_section',
        'settings' => 'sachyya_about_address_setting',
        'type'     => 'textarea',
    ) );

    // Skype
    $wp_customize->add_setting( 'sachyya_about_skype_setting', array(
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'sachyya_about_skype_setting', array(
        'label'    => __( 'Edit Skype', 'sachyya' ),
        'section'  => 'sachyya_about_section',
        'settings' => 'sachyya_about_skype_setting',
        'type'     => 'text',
    ) );

    // Instagram
    $wp_customize->add_setting( 'sachyya_about_instagram_setting', array(
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'sachyya_about_instagram_setting', array(
        'label'    => __( 'Edit Instagram', 'sachyya' ),
        'section'  => 'sachyya_about_section',
        'settings' => 'sachyya_about_instagram_setting',
        'type'     => 'url',
    ) );

    // Wordpress
    $wp_customize->add_setting( 'sachyya_about_wordpress_setting', array(
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'sachyya_about_wordpress_setting', array(
        'label'    => __( 'Edit Wordpress', 'sachyya' ),
        'section'  => 'sachyya_about_section',
        'settings' => 'sachyya_about_wordpress_setting',
        'type'     => 'url',
    ) );

    // Github
    $wp_customize->add_setting( 'sachyya_about_github_setting', array(
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'sachyya_about_github_setting', array(
        'label'    => __( 'Edit Github', 'sachyya' ),
        'section'  => 'sachyya_about_section',
        'settings' => 'sachyya_about_github_setting',
        'type'     => 'url',
    ) );

    /*
    Work
     */
    $wp_customize->add_section( 'sachyya_work_section', array(
        'description'   => __( 'Edit the work section.', 'sachyya' ),
        'panel'         => 'sachyya_home_panel',
        'title'         => __( 'Edit Work Section', 'sachyya' ),
        'priority'      => 201,
    ) );

    // Quote
    $wp_customize->add_setting( 'sachyya_work_quote_setting', array(
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'sachyya_work_quote_setting', array(
        'label'    => __( 'Edit Quote', 'sachyya' ),
        'section'  => 'sachyya_work_section',
        'settings' => 'sachyya_work_quote_setting',
        'type'     => 'textarea'
    ) );

    /*
    Service
     */
    $wp_customize->add_section( 'sachyya_service_section', array(
        'description'   => __( 'Edit the service section.', 'sachyya' ),
        'panel'         => 'sachyya_home_panel',
        'title'         => __( 'Edit Service Section', 'sachyya' ),
        'priority'      => 201,
    ) );

    // Quote
    $wp_customize->add_setting( 'sachyya_service_quote_setting', array(
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'sachyya_service_quote_setting', array(
        'label'    => __( 'Edit Quote', 'sachyya' ),
        'section'  => 'sachyya_service_section',
        'settings' => 'sachyya_service_quote_setting',
        'type'     => 'textarea'
    ) );

    /*
    Employement
     */
    $wp_customize->add_section( 'sachyya_employement_section', array(
        'description'   => __( 'Edit the employement section.', 'sachyya' ),
        'panel'         => 'sachyya_home_panel',
        'title'         => __( 'Edit Employement Section', 'sachyya' ),
        'priority'      => 201,
    ) );

    // Quote
    $wp_customize->add_setting( 'sachyya_employement_quote_setting', array(
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'sachyya_employement_quote_setting', array(
        'label'    => __( 'Edit Quote', 'sachyya' ),
        'section'  => 'sachyya_employement_section',
        'settings' => 'sachyya_employement_quote_setting',
        'type'     => 'textarea'
    ) );

    /*
    Skill
     */
    $wp_customize->add_section( 'sachyya_skill_section', array(
        'description'   => __( 'Edit the skill section.', 'sachyya' ),
        'panel'         => 'sachyya_home_panel',
        'title'         => __( 'Edit Skill Section', 'sachyya' ),
        'priority'      => 201,
    ) );

    // Quote
    $wp_customize->add_setting( 'sachyya_skill_quote_setting', array(
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'sachyya_skill_quote_setting', array(
        'label'    => __( 'Edit Quote', 'sachyya' ),
        'section'  => 'sachyya_skill_section',
        'settings' => 'sachyya_skill_quote_setting',
        'type'     => 'textarea'
    ) );

    /*
    Education
     */
    $wp_customize->add_section( 'sachyya_education_section', array(
        'description'   => __( 'Edit the education section.', 'sachyya' ),
        'panel'         => 'sachyya_home_panel',
        'title'         => __( 'Edit Education Section', 'sachyya' ),
        'priority'      => 201,
    ) );

    // Quote
    $wp_customize->add_setting( 'sachyya_education_quote_setting', array(
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'sachyya_education_quote_setting', array(
        'label'    => __( 'Edit Quote', 'sachyya' ),
        'section'  => 'sachyya_education_section',
        'settings' => 'sachyya_education_quote_setting',
        'type'     => 'textarea'
    ) );

    /*
    Blog
     */
    $wp_customize->add_section( 'sachyya_blog_section', array(
        'description'   => __( 'Edit the blog section.', 'sachyya' ),
        'panel'         => 'sachyya_home_panel',
        'title'         => __( 'Edit Blog Section', 'sachyya' ),
        'priority'      => 201,
    ) );

    // Quote
    $wp_customize->add_setting( 'sachyya_blog_quote_setting', array(
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'sachyya_blog_quote_setting', array(
        'label'    => __( 'Edit Quote', 'sachyya' ),
        'section'  => 'sachyya_blog_section',
        'settings' => 'sachyya_blog_quote_setting',
        'type'     => 'textarea'
    ) );

    /**
     * Social Media Section
     */
    $wp_customize->add_panel( 'sachyya_social_media_panel', array(
        'description'    => __( 'Edit social Media Links', 'sachyya' ),
        'capability'     => 'edit_theme_options',
        'priority'       => 30,
        'title'          => __( 'Social Media Links', 'sachyya' ),
    ) );

    /*
    Social Media
     */
    $wp_customize->add_section( 'sachyya_social_media_section', array(
        'description'   => __( 'Edit the social media links.', 'sachyya' ),
        'panel'         => 'sachyya_social_media_panel',
        'title'         => __( 'Edit Social Media Links', 'sachyya' ),
        'priority'      => 201,
    ) );

    // fb
    $wp_customize->add_setting( 'sachyya_social_media_fb_setting', array(
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'sachyya_social_media_fb_setting', array(
        'label'    => __( 'Change Facebook Link', 'sachyya' ),
        'section'  => 'sachyya_social_media_section',
        'settings' => 'sachyya_social_media_fb_setting',
        'type'     => 'url'
    ) );

    // twitter
    $wp_customize->add_setting( 'sachyya_social_media_twitter_setting', array(
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'sachyya_social_media_twitter_setting', array(
        'label'    => __( 'Change Change Twitter Link', 'sachyya' ),
        'section'  => 'sachyya_social_media_section',
        'settings' => 'sachyya_social_media_twitter_setting',
        'type'     => 'url'
    ) );

    // google+
    $wp_customize->add_setting( 'sachyya_social_media_google_setting', array(
        'capability'        => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'sachyya_social_media_google_setting', array(
        'label'    => __( 'Change Change Google+ Link', 'sachyya' ),
        'section'  => 'sachyya_social_media_section',
        'settings' => 'sachyya_social_media_google_setting',
        'type'     => 'url'
    ) );

}
add_action( 'customize_register', 'sachyya_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function sachyya_customize_preview_js() {
	wp_enqueue_script( 'sachyya_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'sachyya_customize_preview_js' );
