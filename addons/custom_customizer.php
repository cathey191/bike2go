<?php

  function custom_theme_customizer($wp_customize) {
    // Colours
    $wp_customize->add_panel('colour_panel',array(
      'title' => 'Colour Styles',
      'description' => 'All Editable colours',
      'priority' => 10,
    ));

    $wp_customize->add_section('custom_theme_body_colours', array(
      'title' => __('Body', 'bike2gocustomtheme'),
      'priority' => 20,
      'panel' => 'colour_panel'
    ));

    $wp_customize->add_setting('body_background_color_setting', array(
      'default' => '#d9dee2',
      'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'body_background_color_control', array(
      'label' => __('Body Background Colour', 'bike2gocustomtheme'),
      'section' => 'custom_theme_body_colours',
      'settings' => 'body_background_color_setting'
    )));

    $wp_customize->add_section('custom_theme_header_colours', array(
      'title' => __('Header', 'bike2gocustomtheme'),
      'priority' => 20,
      'panel' => 'colour_panel'
    ));

    $wp_customize->add_setting('header_background_color_setting', array(
      'default' => '#343a40',
      'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_background_color_control', array(
      'label' => __('Header Background Colour', 'bike2gocustomtheme'),
      'section' => 'custom_theme_header_colours',
      'settings' => 'header_background_color_setting'
    )));

    $wp_customize->add_setting('header_text_color_setting', array(
      'default' => '#808e9b',
      'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_text_color_control', array(
      'label' => __('Header Text Colour', 'bike2gocustomtheme'),
      'section' => 'custom_theme_header_colours',
      'settings' => 'header_text_color_setting'
    )));

    $wp_customize->add_section('custom_theme_footer_colours', array(
      'title' => __('Footer', 'bike2gocustomtheme'),
      'priority' => 20,
      'panel' => 'colour_panel'
    ));

    $wp_customize->add_setting('footer_background_color_setting', array(
      'default' => '#303952',
      'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_background_color_control', array(
      'label' => __('Footer Background Colour', 'bike2gocustomtheme'),
      'section' => 'custom_theme_footer_colours',
      'settings' => 'footer_background_color_setting'
    )));

    $wp_customize->add_setting('footer_text_color_setting', array(
      'default' => '#808e9b',
      'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_text_color_control', array(
      'label' => __('Footer Text Colour', 'bike2gocustomtheme'),
      'section' => 'custom_theme_footer_colours',
      'settings' => 'footer_text_color_setting'
    )));

    $wp_customize->add_section('custom_theme_card_colours', array(
      'title' => __('Products', 'bike2gocustomtheme'),
      'priority' => 20,
      'panel' => 'colour_panel'
    ));

    $wp_customize->add_setting('card_background_color_setting', array(
      'default' => '#808e9b',
      'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'card_background_color_control', array(
      'label' => __('Card Background Colour', 'bike2gocustomtheme'),
      'section' => 'custom_theme_card_colours',
      'settings' => 'card_background_color_setting'
    )));

    $wp_customize->add_setting('card_text_color_setting', array(
      'default' => '#343a40',
      'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'card_text_color_control', array(
      'label' => __('Card Text Colour', 'bike2gocustomtheme'),
      'section' => 'custom_theme_card_colours',
      'settings' => 'card_text_color_setting'
    )));

    $wp_customize->add_section('custom_theme_button_colours', array(
      'title' => __('Button', 'bike2gocustomtheme'),
      'priority' => 20,
      'panel' => 'colour_panel'
    ));

    $wp_customize->add_setting('main_button_background_color_setting', array(
      'default' => '#5c8c5b',
      'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'main_button_background_color_control', array(
      'label' => __('Main Button Background Colour', 'bike2gocustomtheme'),
      'section' => 'custom_theme_button_colours',
      'settings' => 'main_button_background_color_setting'
    )));

    $wp_customize->add_setting('main_button_text_color_setting', array(
      'default' => '#0f540b',
      'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'main_button_text_color_control', array(
      'label' => __('Main Button Text Colour', 'bike2gocustomtheme'),
      'section' => 'custom_theme_button_colours',
      'settings' => 'main_button_text_color_setting'
    )));

    // Footer
    $wp_customize->add_section('custom_theme_footer_info', array(
      'title' => __('Footer', 'bike2gocustomtheme'),
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
        body {
          background-color: <?= get_theme_mod('body_background_color_setting', '#d9dee2'); ?>!important;
          color: <?= get_theme_mod('card_text_color_setting', '#343a40'); ?>!important;
        }

        .bg-dark {
          background-color: <?= get_theme_mod('header_background_color_setting', '#343a40'); ?>!important;
        }

        #header_nav li a {
          color: <?= get_theme_mod('header_text_color_setting', '#808e9b'); ?>!important;
        }

        .footer {
          background-color: <?= get_theme_mod('footer_background_color_setting', '#303952'); ?>!important;
        }

        .footer p {
          color: <?= get_theme_mod('footer_text_color_setting', '#808e9b'); ?>!important;
        }

        .card {
          color: <?= get_theme_mod('card_text_color_setting', '#343a40'); ?>!important;
          background-color: <?= get_theme_mod('card_background_color_setting', '#808e9b'); ?>!important;
        }

        .btn-primary {
          color: <?= get_theme_mod('main_button_text_color_setting', '#0f540b'); ?>!important;
          background-color: <?= get_theme_mod('main_button_background_color_setting', '#5c8c5b'); ?>!important;
          border-color: <?= get_theme_mod('main_button_text_color_setting', '#0f540b'); ?>!important;
        }
      </style>
    <?php
  }

  add_action('wp_head', 'custom_theme_customizer_styles');
