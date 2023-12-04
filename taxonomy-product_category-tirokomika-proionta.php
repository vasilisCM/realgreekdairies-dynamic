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

      <section class="single-product" data-archive-container=""><?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
    ?>
     
        <div class="boxed centered single-product__container" data-archive-posts="">
          <div class="single-product__img-container">
            <img data-featured-image-url="" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="single-product__img">
          </div>
          <div class="single-product__info">
            <div data-post-title="" class="heading single-product__heading"><?php echo get_the_title(); ?></div>
            <div data-post-content="" class="single-product__description"><?php echo the_content(); ?></div>
            <a href="<?php the_permalink();?>">
              <button class="button">
                <span><?php echo __('Περισσότερα','realgreekdairies'); ?></span>
              </button>
            </a>
          </div>
        </div>
    <?php
      endwhile;
      endif;
    ?></section>
    </main>

    <!-- Footer  --> <?php get_footer(); ?>