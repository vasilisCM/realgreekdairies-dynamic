

<?php get_header(); ?> <!-- Header  -->

    

    <!-- Main  -->

    <main class="main">

      <section class="hero hero-product">

        <div class="hero__container">

          <?php

            $term = get_queried_object(); // Get the current term

            $background_image_url = get_field('product_category__background_image', $term);

          ?>

          <div class="hero__background" style="background-image: url('<?php echo esc_url($background_image_url); ?>');">

              <h1 data-archive-title="" class="boxed centered hero__heading hero__heading--large"><?php single_term_title(); ?></h1>

          </div>

          <div class="curve">

            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">

              <!-- <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path> -->
              <path d="M500,110C300,110,-100,60,0,60V120H1200V45C1400,60,900,110,600,110Z" class="shape-fill"></path>

            </svg>

          </div>

        </div>



        <div class="boxed centered card-text card-text--center hero__card">

          <div data-archive-title="" class="heading card-text__heading"><?php single_term_title(); ?></div>

          <p data-archive-description="" class="card-text__text"><?php echo get_the_archive_description(); ?></p>

        </div>



        <div class="hero__shape-divider">

          <img src="<?php echo get_template_directory_uri() . '/assets/img/home-milk-shape-divider.png'; ?>" alt="" class="milestones__shape-divider-img">

        </div>

      </section>



      <section class="products">

        <div class="products__container boxed centered">

          <?php

            $term = get_queried_object(); // Get the current taxonomy term



            // Check if the ACF field 'product_category__content' exists for this term

            if (have_rows('product_category__content', $term)) :

              while (have_rows('product_category__content', $term)) : the_row();

                // Inside the 'product_category__content' group, check for the 'card' repeater

                if (have_rows('card')) :

                  while (have_rows('card')) : the_row();

          ?>

          <div class="card-text card-text--product">

            <div class="card-text__img-container">

              <img src="<?php echo esc_url(get_sub_field('image')); ?>" class="products__featured-img" alt="">

            </div>

            <div class="card-text__text-container">

              <h2 class="card-text__heading"><?php echo esc_html(get_sub_field('heading')); ?></h2>

              <p class="card-text__text">

                <?php echo esc_html(get_sub_field('text')); ?>

              </p>

              <?php

                // Check if the 'button' group field has values

                if (have_rows('button')) :

                  while (have_rows('button')) : the_row();



                  // Check if the 'text' subfield has a value

                  $button_text = get_sub_field('text');

                  if (!empty($button_text)) :



                  // Check if the 'link' subfield has a value

                  $button_link = get_sub_field('link');

                  if (!empty($button_link)) :

              ?>

                <a href="<?php echo esc_url($button_link['url']); ?>">

                    <button class="button">

                        <span><?php echo esc_html($button_text); ?></span>

                    </button>

                </a>

              <?php

                endif; // End 'link' subfield check

                endif; // End 'text' subfield check

                endwhile; // End 'button' group loop

                endif; // End 'button' group check

              ?>

            </div>

          </div>

          <?php

            endwhile; // End 'card' repeater loop

            endif; // End 'card' repeater check

            endwhile; // End 'product_category__content' group loop

            endif; // End 'product_category__content' group check

          ?>

        </div>

      </section>

    </main>



    <!-- Footer  --> <?php get_footer(); ?>