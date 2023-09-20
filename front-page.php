
       <?php get_header(); ?> <!-- Header  -->
    

    <!-- Main  -->
    <main class="main">
      <div class="loader">
        <div class="loader__spinner"></div>
      </div>
      <section class="hero hero-home">
        <div class="carousel hero__carousel">
          <div class="carousel__button carousel__button--previous"></div>
          <div class="carousel__container hero__carousel-container">
          <div class="carousel__slides hero__slides-container">
            <?php
              if( have_rows('home__carousel') ): while ( have_rows('home__carousel') ) : the_row(); 
                if( have_rows('slide') ): while ( have_rows('slide') ) : the_row();
            ?>       

              <div
                  class="carousel__slide hero__slide carousel__slide"
                  style="background-image: url(<?php echo esc_html(get_sub_field('image')); ?>)">
                  <div class="carousel__content boxed centered">
                    <h3 class="hero__heading hero__heading--home">
                      <span class="hero__heading--small"
                        ><?php echo esc_html(get_sub_field('heading_1')); ?></span
                      >
                      <span class="hero__heading--large">
                      <?php echo esc_html(get_sub_field('heading_2')); ?></span
                      >
                    </h3>
                  </div>
              </div>
          
            <?php
                endwhile; endif;
              endwhile; endif;
            ?>
          </div>
 

          </div>
          <div class="carousel__navigation boxed centered">
            <div class="carousel__dots carousel__dots--home"></div>
          </div>
          <div class="carousel__button carousel__button--next"></div>
        </div>

        <div class="curve curve--home">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M741,116.23C291,117.43,0,27.57,0,6V120H1200V6C1200,27.93,1186.4,119.83,741,116.23Z" class="shape-fill"></path>
          </svg>
        </div>

        <div class="card-text card-text--center hero__card boxed centered">
          <?php 
            $page_info = get_field('home__page_info');
            $heading = $page_info['heading'];
            $description = $page_info['description'];
            $button = $page_info['button'];
            $button_text = $page_info['button']['text'];
            $button_link = $page_info['button']['link'];
          ?>

          <h1 class="heading card-text__heading"><?php echo esc_html($heading); ?></h1>
          <p class="card-text__text"><?php echo esc_html($description); ?></p>
          <a href="<?php echo esc_html($button_link); ?>">
            <button class="button">
              <span><?php echo esc_html($button_text); ?></span>
            </button></a>

          <?php 
          $milestones = get_field('home__milestones');
          $milestones_description = $milestones['description'];
          $milestones_shape_divider = $milestones['shape_divider'];
          ?>
          <p class="text-medium-large bold card-text__text card-text__text--bold">
            <?php echo esc_html($milestones_description); ?>
          </p>
        </div>
      </section>

      <section class="milestones">
        <svg>
          <clipPath id="shape">
            <path id="milestones-shape" d="M164.888,162.531H23a23,23,0,0,1-23-23V23A23,23,0,0,1,23,0H330a23,23,0,0,1,23,23v116.53a23,23,0,0,1-23,23H190L177.208,180Z" fill="#9cc4ed"></path>
          </clipPath>
        </svg>
        <div class="carousel boxed centered">
          <div class="carousel__button carousel__button--previous"></div>
          <div class="carousel__container carousel__container--milestones">
            <div class="carousel__slides">
              <div class="carousel__slide milestones__milestones boxed centered">
                <div class="card-milestone">
                  <div class="card-milestone__info-container" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/home-milestone-001.webp'; ?>');">
                    <div class="card-milestone__text-container">
                      <p class="card-milestone__text text-medium-small">
                        Ίδρυση του ομίλου ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ το 1995.
                      </p>
                    </div>
                  </div>

                  <div class="card-milestone__dot">
                    <div class="card-milestone__pulse"></div>
                    <span class="card-milestone__year text">1996</span>
                  </div>
                </div>
                <div class="card-milestone">
                  <div class="card-milestone__info-container" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/home-milestone-002.webp'; ?>');">
                    <div class="card-milestone__text-container">
                      <p class="card-milestone__text text-medium-small">
                        Βραβείο ΚΑΘΑΡΗΣ ΤΕΧΝΟΛΟΓΙΑΣ από τον Ευρωπαίο Επίτροπο
                        Περιβάλλοντος.
                      </p>
                    </div>
                  </div>
                  <div class="card-milestone__dot">
                    <span class="card-milestone__year text">2005</span>
                    <div class="card-milestone__pulse"></div>
                  </div>
                </div>
                <div class="card-milestone">
                  <div class="card-milestone__info-container" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/home-milestone-003.webp'; ?>');">
                    <div class="card-milestone__text-container">
                      <p class="card-milestone__text text-medium-small">
                        Επέκταση της παρουσίας μας σε πολλές χώρες, Κίνα και
                        Ηνωμένες Πολιτείες.
                      </p>
                    </div>
                  </div>
                  <div class="card-milestone__dot">
                    <div class="card-milestone__pulse"></div>
                    <span class="card-milestone__year text">2012</span>
                  </div>
                </div>
              </div>
              <div class="carousel__slide milestones__milestones boxed centered">
                <div class="card-milestone">
                  <div class="card-milestone__info-container" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/home-milestone-001.webp'; ?>');">
                    <div class="card-milestone__text-container">
                      <p class="card-milestone__text text-medium-small">
                        Ίδρυση του ομίλου ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ το 1995.
                      </p>
                    </div>
                  </div>

                  <div class="card-milestone__dot">
                    <div class="card-milestone__pulse"></div>
                    <span class="card-milestone__year text">2030</span>
                  </div>
                </div>
                <div class="card-milestone">
                  <div class="card-milestone__info-container" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/home-milestone-002.webp'; ?>');">
                    <div class="card-milestone__text-container">
                      <p class="card-milestone__text text-medium-small">
                        Βραβείο ΚΑΘΑΡΗΣ ΤΕΧΝΟΛΟΓΙΑΣ από τον Ευρωπαίο Επίτροπο
                        Περιβάλλοντος ως αναγνώριση της προσφοράς μας στο
                        περιβάλλον και την προστασία του.
                      </p>
                    </div>
                  </div>
                  <div class="card-milestone__dot">
                    <span class="card-milestone__year text">2040</span>
                    <div class="card-milestone__pulse"></div>
                  </div>
                </div>
                <div class="card-milestone">
                  <div class="card-milestone__info-container" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/home-milestone-003.webp'; ?>');">
                    <div class="card-milestone__text-container">
                      <p class="card-milestone__text text-medium-small">
                        Επέκταση της παρουσίας μας σε πολλές χώρες, Κίνα και
                        Ηνωμένες Πολιτείες.
                      </p>
                    </div>
                  </div>
                  <div class="card-milestone__dot">
                    <div class="card-milestone__pulse"></div>
                    <span class="card-milestone__year text">2050</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel__navigation boxed centered">
            <div class="carousel__dots"></div>
          </div>
          <div class="carousel__button carousel__button--next"></div>
        </div>

        <div class="milestones__shape-divider">
          <img data-uploads="home-milk-shape-divider.png" src="<?php echo $milestones_shape_divider; ?>" alt="" class="milestones__shape-divider-img">
        </div>
      </section>
           
      <section class="products-home">
        <?php
          // We can't use variables here
          if( have_rows('home__products') ): while ( have_rows('home__products') ) : the_row(); 
          if( have_rows('card') ): while ( have_rows('card') ) : the_row();       
        ?>
          <div class="products-home__card boxed-no-desktop centered">
              <div class="card-text products-home__text-container">
                <h2 class="heading">
                  <span class="card-text__heading"><?php echo esc_html(get_sub_field('heading')); ?></span>
                  <br /><span class="card-text__subheading"
                    ><?php echo esc_html(get_sub_field('subheading')); ?>
                  </span>
                </h2>
                <p class="card-text__text">
                  <?php echo esc_html(get_sub_field('text')); ?>
                </p>
                <a href="<?php echo esc_html(get_sub_field('button')['link']); ?>"
                  ><button class="button">
                    <span><?php echo esc_html(get_sub_field('button')['text']); ?></span>
                  </button></a
                >
              </div>
              <div class="products-home__img-container">
                <img
                  data-uploads="home-products-001.png"
                  src="<?php echo esc_html(get_sub_field('image')); ?>"
                  alt=""
                  class="products-home__img"
                />
              </div>
          </div>
        
        <?php
          endwhile; endif;
          endwhile; endif;
        ?>


      </section>


      <section class="company-home">

        <?php 
          // Banner 1
          $company = get_field('home__company');
          $banner_1 = $company['banner_1'];
          $banner_1_image = $banner_1['image'];
          $banner_1_heading = $banner_1['heading'];
          $banner_1_text = $banner_1['text'];
          $banner_1_button = $banner_1['button'];
          $banner_1_button_text = $banner_1_button['text'];
          $banner_1_button_link = $banner_1_button['link'];

          // Heading
          $heading = $company['heading']; // Variables are scoped ;)

          // Subeading
          $subheading = $company['subheading'];

          // Image 1
          $image_1 = $company['image_1'];

          // Image 2
          $image_2 = $company['image_2'];

          // Banner 1
          $company = get_field('home__company');
          $banner_2 = $company['banner_2'];
          $banner_2_image = $banner_2['image'];
          $banner_2_heading = $banner_2['heading'];
          $banner_2_text = $banner_2['text'];
          $banner_2_button = $banner_2['button'];
          $banner_2_button_text = $banner_2_button['text'];
          $banner_2_button_link = $banner_2_button['link'];
        ?>

        <div class="banner" style="background-image: url('<?php echo esc_html($banner_1_image); ?>');">
          <div class="banner__container boxed centered">
            <div class="card-text banner__card">
              <h2 class="heading card-text__heading"><?php echo esc_html($banner_1_heading); ?></h2>
              <p class="card-text__text">
              <?php echo esc_html($banner_1_text); ?>
              </p>
              <a href="<?php echo esc_html($banner_1_button_link); ?>"><button class="button">
                  <span><?php echo esc_html($banner_1_button_text); ?></span>
                </button></a>
            </div>
          </div>
        </div>

        <div class="company-home__outer-container centered">
          <div class="company-home__container">
            <div class="company-home__text-container centered">
              <h2 class="heading-medium-large">
                <?php echo esc_html( $heading); ?>
              </h2>
              <p>
                <?php echo esc_html($subheading); ?>
              </p>
            </div>
          </div>
        </div>

        <div class="company-home__img-container">
          <img data-uploads="home-company-001.webp" src="<?php echo esc_html($image_1); ?>" alt="" class="company-home__img centered">
        </div>

        <div class="company-home__img-container company-home__img-container--milk centered">
          <img data-uploads="home-company-002.png" src="<?php echo esc_html($image_2); ?>" alt="" class="company-home__img">
        </div>

        <div class="banner" style="background-image: url('<?php echo esc_html($banner_2_image); ?>');">
          <div class="banner__container boxed centered">
            <div class="card-text banner__card">
              <h2 class="heading card-text__heading"><?php echo esc_html($banner_2_heading); ?></h2>
              <p class="card-text__text">
              <?php echo esc_html($banner_2_text); ?>
              </p>
              <a href="<?php echo esc_html($banner_2_button_link); ?>"><button class="button">
                  <span><?php echo esc_html($banner_2_button_text); ?></span>
                </button></a>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer  --> <?php get_footer(); ?>