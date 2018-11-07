<?php get_header('header.php'); ?>

  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card-columns">
          <?php
            $args = array( 'post_type' => 'products');
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
