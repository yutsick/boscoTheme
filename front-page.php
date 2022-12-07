<?php get_header(); ?>

  <!-- Header-->
  <header class="bg-dark py-5">
      <div class="container px-5">
          <div class="row gx-5 align-items-center justify-content-center">
              <div class="col-lg-8 col-xl-7 col-xxl-6">
                  <div class="my-5 text-center text-xl-start">
                      <h1 class="display-5 fw-bolder text-white mb-2"><?php the_title(); ?></h1>
                      <p class="lead fw-normal text-white-50 mb-4"><?php the_field('subtitle'); ?></p>
                      <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                          <a class="btn btn-primary btn-lg px-4 me-sm-3" href="<?php the_field('button1_url'); ?>"><?php the_field('button1');?></a>
                          <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                      </div>
                  </div>
              </div>
              <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                    <?php the_post_thumbnail('full', array( 'class' => 'img-fluid rounded-3 my-5')); ?>
                    <!-- <img class="img-fluid rounded-3 my-5" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /> -->
                </div>
          </div>
      </div>
  </header>
  <!-- Features section-->
  <section class="py-5" id="features">
      <div class="container px-5 my-5">
          <div class="row gx-5">
              <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0"><?php the_field('feature_title'); ?></h2></div>
              <div class="col-lg-8">
                  <div class="row gx-5 row-cols-1 row-cols-md-2">
                    <?php 
                    if (have_rows('features')){
                        while(have_rows('features')) : the_row(); ?>
                            <div class="col mb-5 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="<?php the_sub_field('icon'); ?>"></i></div>
                                <h2 class="h5"><?php the_sub_field('title'); ?></h2>
                                <p class="mb-0"><?php the_sub_field('description'); ?></p>
                            </div>
                    <?php
                        endwhile;
                    }
                    
                    ?>

                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Testimonial section-->
  <div class="py-5 bg-light">
      <div class="container px-5 my-5">
          <div class="row gx-5 justify-content-center">
              <div class="col-lg-10 col-xl-7">
                  <div class="text-center">
                      <div class="fs-4 mb-4 fst-italic">"<?php the_field('testimonial'); ?>"</div>
                      <div class="d-flex align-items-center justify-content-center">
                          <img class="rounded-circle me-3 author_ava" src="<?php the_field('author_ava'); ?>" alt="..." />
                          <div class="fw-bold">
                              <?php the_field('author_name'); ?>
                              <span class="fw-bold text-primary mx-1">/</span>
                              <?php the_field('author_title'); ?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Blog preview section-->
  <section class="py-5">
      <div class="container px-5 my-5">
          <div class="row gx-5 justify-content-center">
              <div class="col-lg-8 col-xl-6">
                  <div class="text-center">
                      <h2 class="fw-bolder">From our blog</h2>
                      <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                  </div>
              </div>
          </div>
          <div class="row gx-5">
            <?php 
                $args = array(
                    'numberposts'   =>  3
                );
                $posts = get_posts($args);
                // echo '<pre>';
                // print_r($posts);
                // echo '</pre>';
                foreach ($posts as $post){ ?>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <?php the_post_thumbnail('full', array('class' => 'card-img-top my-card-img')); ?>
                            <!-- <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="..." /> -->
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2"><?php echo get_the_category()[0] -> name; ?></div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3"><?php the_title(); ?></h5></a>
                                <p class="card-text mb-0"><?php the_excerpt(); ?></p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                        <div class="small">
                                            <div class="fw-bold">Kelly Rowan</div>
                                            <div class="text-muted">March 12, 2022 &middot; <?php the_field('read_time'); ?> хв</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`
                    </div>
              <?php  }
            ?>
          </div>
        <?php get_template_part('template-parts/cta');?>
      </div>
  </section>

<?php get_footer(); ?>