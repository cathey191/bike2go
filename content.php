<div class="card" style="width: 18rem;">
  <?php if( has_post_thumbnail() ): ?>
      <?php the_post_thumbnail('thumbnail', ['class'=>'card-img-top img-fluid', 'alt'=>'Card image cap']); ?>
  <?php endif; ?>
  <div class="card-body">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <?php the_content(); ?>
    <a href="<?= esc_url(get_permalink()); ?>" class="btn btn-primary">Book Now</a>
  </div>
</div>
