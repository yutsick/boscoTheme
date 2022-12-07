<?php get_header(); ?>
<section class="py-5">
  <div class="container px-5 my-5">
      <div class="row gx-5 justify-content-center">
          <div class="col-lg-6">
              <div class="text-center mb-5">
                  <h1 class="fw-bolder"><?php the_title(); ?></h1>
                  <p class="lead fw-normal text-muted mb-0"><?php the_excerpt(); ?></p>
              </div>
          </div>
      </div>
      <div class="row gx-5">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

              <?php 
              $images = get_field('gallery');
              $first = true;
              foreach ($images as $image){ 

                $src = $image['sizes']['large'];
                
                ?>

                <div class=" carousel-item <?php echo ($first) ? 'active' : ''; ?>">
                  <img src="<?php echo $src; ?>" class="d-block w-100 slider-img" alt="...">
                </div>
             
             <?php 
              $first = false;
              }

              ?>
              <!-- <div class="carousel-item active">
                <img src="..." class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

      </div>
      <div class="row px-3 ">
          <div class="col-lg-12">
              <div class=" my-5">
                <?php the_content(); ?>
              </div>
          </div>
      </div>
  </div>
</section>
<?php get_footer(); ?>