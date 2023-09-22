<?php get_header(); ?> <!-- Header  -->
    

    <!-- Main  -->
    <main class="main">
      <section class="hero">
        <div class="hero__container">
          <?php 
            $background_image = get_field('product__background_image');
          ?>
          <div class="hero__background" style="background-image: url('<?php echo esc_url($background_image); ?>');">
            <h1 data-post-title="" class="boxed centered hero__heading hero__heading--large"><?php echo get_the_title(); ?></h1>
          </div>

          <div class="curve">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
              <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
            </svg>
          </div>
        </div>

        <div class="card-text card-text--center hero__card boxed centered">
          <div>
            <?php 
              $page_info = get_field('page__page_info');
              $heading = $page_info['heading'];
              $text = $page_info['text'];
            ?>
            <div class="heading card-text__heading"><?php echo esc_html($heading); ?></div>
          </div>
          <p class="card-text__text">
            <?php echo esc_html($text); ?>
          </p>
        </div>

        <div class="hero__shape-divider">
          <img data-uploads="home-milk-shape-divider.png" src=" <?php echo 
    str_replace( wp_upload_dir()['basedir'], 
    wp_upload_dir()['baseurl'],
    wp_upload_dir()['basedir'] . wp_upload_dir()['subdir'] . '/' . 'home-milk-shape-divider.png' ); ?>" alt="" class="milestones__shape-divider-img">
        </div>
      </section>

      <section class="single-product">
        <div class="boxed centered single-product__container">
          <div class="single-product__img-container">
            <img data-featured-image-url="" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="single-product__img">
          </div>
          <div class="single-product__info">
            <div data-post-title="" class="heading single-product__heading"><?php echo get_the_title(); ?></div>
            <div data-post-content="" class="single-product__description"><?php echo the_content(); ?></div>
            <div tabs-buttons="" class="single-product__tabs">
              <?php 
                $uses = get_field('product__uses');
                $standard_product_analysis = get_field('product__standard_product_analysys');

                // Disable WordPress adding <p> tags
                $standard_product_analysis_without_wpautop = wpautop($standard_product_analysis);
                remove_filter('acf_the_content', 'wpautop');
              ?>
              <div data-tab="1" class="text single-product__tab">Uses</div>
              <div data-tab="2" class="tabs__button text single-product__tab">
                Standard Product Analysis
              </div>
            </div>
            <div data-tab="1" class="tabs__content hidden">
              <?php echo esc_html($uses); ?>
            </div>
            <div data-tab="2" class="tabs__content single-product__table-container hidden">
              <?php echo $standard_product_analysis_without_wpautop; ?>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer  --> <?php get_footer(); ?>