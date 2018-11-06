<?php
  function addCustomThemeStyles() {
    // Style
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.1.3', 'all');
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/theme-style.css');

    // Scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.1.3', true);
    wp_enqueue_style('theme-script', get_template_directory_uri() . '/assets/js/theme-script.js');
  }

  add_action('wp_enqueue_scripts', 'addCustomThemeStyles');

  function addCustomMenus() {
    add_theme_support('menus');
    register_nav_menu('header_nav', 'This is the navigation at the top of the page');
    register_nav_menu('footer_nav', 'This is the navigation at the bottom of the page');
  }

  add_action('init', 'addCustomMenus');

  add_theme_support( 'post-thumbnails' );

  require get_parent_theme_file_path('./addons/custom_post_types.php');
