          <!-- Call to action-->
          <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
              <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                  <div class="mb-4 mb-xl-0">
                      <div class="fs-3 fw-bold text-white"><?php the_field('title','option');?></div>
                      <div class="text-white-50"><?php the_field('subtitle','option');?></div>
                  </div>
                  <div class="ms-xl-4">
                      <div class="input-group mb-2">
                        <?php echo do_shortcode('[contact-form-7 id="55" title="Контактна форма 1"]');?>
                          <!-- <input class="form-control" type="text" placeholder="Email address..." aria-label="Email address..." aria-describedby="button-newsletter" />
                          <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign up</button> -->
                      </div>
                      <div class="small text-white-50"><?php the_field('form_subtitle','option');?></div>
                  </div>
              </div>
          </aside>