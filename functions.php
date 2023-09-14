<?php

    //Load CSS

    function enqueue_custom_styles() {
        wp_enqueue_style('custom-main-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all');
        wp_enqueue_style('custom-header-style', get_stylesheet_directory_uri() . '/assets/css/header.css', array(), '1.0', 'all');
        wp_enqueue_style('custom-footer-style', get_stylesheet_directory_uri() . '/assets/css/footer.css', array(), '1.0', 'all');
        wp_enqueue_style('custom-faq-style', get_stylesheet_directory_uri() . '/assets/css/faq.css', array(), '1.0', 'all');
        wp_enqueue_style('custom-value-style', get_stylesheet_directory_uri() . '/assets/css/value.css', array(), '1.0', 'all');
        wp_enqueue_style('custom-objective-style', get_stylesheet_directory_uri() . '/assets/css/objective.css', array(), '1.0', 'all');
        wp_enqueue_style('custom-why-us-style', get_stylesheet_directory_uri() . '/assets/css/why-us.css', array(), '1.0', 'all');
        wp_enqueue_style('custom-courses-style', get_stylesheet_directory_uri() . '/assets/css/courses.css', array(), '1.0', 'all');
        wp_enqueue_style('custom-primary-menu-style', get_stylesheet_directory_uri() . '/assets/css/primary-menu.css', array(), '1.0', 'all');        
        wp_enqueue_style('custom-secondary-menu-style', get_stylesheet_directory_uri() . '/assets/css/secondary-menu.css', array(), '1.0', 'all');
        wp_enqueue_style('custom-layout-home-style', get_stylesheet_directory_uri() . '/assets/css/layouts/home.css', array(), '1.0', 'all');
        wp_enqueue_style('custom-mission-style', get_stylesheet_directory_uri() . '/assets/css/mission.css', array(), '1.0', 'all');
        wp_enqueue_style('custom-contact-information-style', get_stylesheet_directory_uri() . '/assets/css/contact-information.css', array(), '1.0', 'all');
        wp_enqueue_style('custom-form-style', get_stylesheet_directory_uri() . '/assets/css/form.css', array(), '1.0', 'all');
        wp_enqueue_style('custom-404-style', get_stylesheet_directory_uri() . '/assets/css/404.css', array(), '1.0', 'all');
        wp_enqueue_style('custom-course-style', get_stylesheet_directory_uri() . '/assets/css/course.css', array(), '1.0', 'all');        
        wp_enqueue_style('custom-registration-style', get_stylesheet_directory_uri() . '/assets/css/registration.css', array(), '1.0', 'all');
    }

    add_action('wp_enqueue_scripts', 'enqueue_custom_styles');   
    

    //Remove the default wordpress margin-top 
    function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
    add_action('get_header', 'remove_admin_login_header');


    //Load javascript
    function load_javascript(){
        wp_enqueue_script('jquery');
        wp_enqueue_script( 'faq', get_template_directory_uri() . '/assets/js/faq.js', array());
        wp_enqueue_script( 'secondary-menu', get_template_directory_uri() . '/assets/js/secondary-menu.js', array());
        wp_enqueue_script( 'form', get_template_directory_uri() . '/assets/js/form.js', array());
        wp_enqueue_script( 'curriculum-table', get_template_directory_uri() . '/assets/js/curriculum-table.js', array());
    }

    add_action("wp_enqueue_scripts", "load_javascript");


    //Themes Options
    add_theme_support("menus");



    //Menu
    register_nav_menus(array(
        'primary' => 'primary menu',
        'secondary' =>  'secondary menu'
    ));

?>