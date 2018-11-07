<?php

  function custom_theme_customizer($wp_customize) {
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
