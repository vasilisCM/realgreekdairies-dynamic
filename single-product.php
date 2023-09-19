<?php get_header(); ?> <!-- Header  -->
    

    <!-- Main  -->
    <main class="main">
      <section class="hero">
        <div class="hero__container">
          <div class="hero__background" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/single-product-hero.webp'; ?>');"></div>

          <div class="curve">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
              <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
            </svg>
          </div>
        </div>

        <div class="card-text card-text--center hero__card boxed centered">
          <div>
            <h1 class="heading card-text__heading">Μητέρες κατά την κύηση</h1>
            <!-- <br />
            <span data-post-title class="heading card-text__subheading"
              >Φέτα</span
            > -->
          </div>
          <p data-post-content="" class="card-text__text"><?php echo the_content(); ?></p>
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
            <?php echo get_the_post_thumbnail(); ?>
          </div>
          <div class="single-product__info">
            <h2 class="heading single-product__heading">Product Title</h2>
            <div data-product-description="" class="single-product__description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris
              finibus sit amet urna eu suscipit. Nulla molestie volutpat enim
              vitae mattis. Vivamus ultricies sapien eu orci vestibulum, vel
              dapibus sem sodales. Pellentesque rutrum quis odio eu egestas.
              Aliquam dictum tellus lobortis, interdum urna vel, viverra orci.
            </div>
            <div class="single-product__tabs">
              <div class="text single-product__tab">Uses</div>
              <div class="text single-product__tab">
                Standard Product Analysis
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer  --> <?php get_footer(); ?>