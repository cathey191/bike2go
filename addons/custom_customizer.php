<?php

  function custom_theme_customizer($wp_customize) {
    // Header Nav
    $wp_customize->add_section('custom_theme_header_info', array(
      'title' => __('Header Styles', 'bike2gocustomtheme'),
      'priority' => 20
    ));

    $wp_customize->add_setting('header_background_color_setting', array(
      'default' => '#343a40',
      'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_background_color_control', array(
      'label' => __('Background Colour', 'bike2gocustomtheme'),
      'section' => 'custom_theme_header_info',
      'settings' => 'header_background_color_setting'
    )));

    $wp_customize->add_setting('header_text_color_setting', array(
      'default' => '#808e9b',
      'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_text_color_control', array(
      'label' => __('Text Colour', 'bike2gocustomtheme'),
      'section' => 'custom_theme_header_info',
      'settings' => 'header_text_color_setting'
    )));

    // Footer
    $wp_customize->add_section('custom_theme_footer_info', array(
      'title' => __('Footer Info', 'bike2gocustomtheme'),
      'priority' => 20
    ));

    $wp_customize->add_setting('footer_info_phone_setting', array(
      'default' => '',
      'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_info_phone_control', array(
      'label' => __('Phone Number', 'bike2gocustomtheme'),
      'section' => 'custom_theme_footer_info',
      'settings' => 'footer_info_phone_setting'
    )));

    $wp_customize->add_setting('footer_info_email_setting', array(
      'default' => '',
      'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_info_email_control', array(
      'label' => __('Email', 'bike2gocustomtheme'),
      'section' => 'custom_theme_footer_info',
      'settings' => 'footer_info_email_setting'
    )));

    $wp_customize->add_setting('footer_info_address_setting', array(
      'default' => '',
      'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_info_address_control', array(
      'label' => __('Address', 'bike2gocustomtheme'),
      'section' => 'custom_theme_footer_info',
      'settings' => 'footer_info_address_setting'
    )));
  }

  add_action('customize_register', 'custom_theme_customizer');

  function custom_theme_customizer_styles() {
    ?>
      <style type="text/css">
        .bg-dark {
          background-color: <?= get_theme_mod('header_background_color_setting', '#343a40'); ?>!important;
        }

        #header_nav li a {
          color: <?= get_theme_mod('header_text_color_setting', '#808e9b'); ?>!important;
        }
      </style>
    <?php
  }

  add_action('wp_head', 'custom_theme_customizer_styles');
