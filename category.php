<?php
/* Template Name: Product Categories template */
?>
<?php get_header('header.php'); ?>

  <div class="container">
    <h2><?php single_cat_title(); ?></h2>
    <div class="row">
      <div class="col">
        <div class="card-columns">
          <?php
            $args = array( 'post_type' => 'products', 'category' => get_queried_object_id(), 'category__in' => array( get_queried_object_id() ));
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
          ?>
            <?php get_template_part('content', get_post_format()); ?>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>

<?php get_footer('footer.php'); ?>
