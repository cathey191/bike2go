<?php

  function add_bikes_post_type() {
    $labels = array(
      'name' => _x('Products', 'post type name', 'bike2gocustomtheme'),
      'singular_name' => _x('Products', 'post type name', 'bike2gocustomtheme'),
      'add_new' => _x('Add New Product', 'adding new product', 'bike2gocustomtheme'),
      'add_new_item' => _x('Add New Product', 'adding new product', 'bike2gocustomtheme')
    );

    $args = array(
      'labels' => $labels,
      'description' => 'Here are all the company products',
      'public' => true,
      'hierarchical' => true,
      'menu_position' => 2,
      'menu_icon' => 'dashicons-screenoptions',
      'supports' => array( 'title', 'comments', 'author', 'thumbnail')
    );

    register_post_type('products', $args);
  }

  add_action('init', 'add_bikes_post_type');
