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
