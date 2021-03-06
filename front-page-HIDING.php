<?php get_header('header.php'); ?>

    <div class="container text-center my-3">
      <h2>Bootstrap 4 Multiple Item Carousel</h2>
      <div class="row mx-auto my-auto">
          <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
              <div class="carousel-inner w-100" role="listbox">
                  <div class="carousel-item active">
                      <img class="d-block col-4 img-fluid" src="https://via.placeholder.com/150">
                  </div>
                  <div class="carousel-item">
                      <img class="d-block col-4 img-fluid" src="http://placehold.it/350x180?text=2">
                  </div>
                  <div class="carousel-item">
                      <img class="d-block col-4 img-fluid" src="http://placehold.it/350x180?text=3">
                  </div>
                  <div class="carousel-item">
                      <img class="d-block col-4 img-fluid" src="http://placehold.it/350x180?text=4">
                  </div>
                  <div class="carousel-item">
                      <img class="d-block col-4 img-fluid" src="http://placehold.it/350x180?text=5">
                  </div>
                  <div class="carousel-item">
                      <img class="d-block col-4 img-fluid" src="http://placehold.it/350x180?text=6">
                  </div>
              </div>
              <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
      </div>
      <h4>Advances one slide at a time</h4>
    </div>

<?php get_footer('footer.php'); ?>
