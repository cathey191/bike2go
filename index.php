<?php get_header('header.php'); ?>

  <div class="container">
    <h2>Catourage</h2>
    <div class="row">
      <div class="col">
        <?php if(have_posts()): ?>
          <div class="card-columns">
            <?php while(have_posts()): the_post();?>
              <?php get_template_part('content', get_post_format()); ?>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

<?php get_footer('footer.php'); ?>
