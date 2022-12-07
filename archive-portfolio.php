<?php get_header(); ?>

<section class="py-5">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">Наші роботи</h1>
                <p class="lead fw-normal text-muted mb-0">Роботи студентів МНЦ Боско</p>
            </div>
            <div class="row gx-5">
              <?php 
                $posts = get_posts(array(
                  'posts_per_page'    => 10,
                  'post_type'         => 'portfolio'
                ));

                foreach ($posts as $post){ ?>

                  <div class="col-lg-6">
                    <div class="position-relative mb-5">
                      <?php the_post_thumbnail('full', array('class' => 'img-fluid rounded-3 mb-3')); ?>
                        <!-- <img class="img-fluid rounded-3 mb-3" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /> -->
                        <a class="h3 fw-bolder text-decoration-none link-dark stretched-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                  </div>

              <?php
                }
                wp_reset_postdata();
              ?>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container px-5 my-5">
            <?php get_template_part('/template-parts/cta'); ?>
        </div>
    </section>

<?php get_footer();?>