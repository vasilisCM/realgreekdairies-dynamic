<?php get_header(); ?> <!-- Header  -->
    

    <!-- Main  -->
    <main class="main">
      <section class="hero hero--inner">
        <div class="hero__container">
          <div data-featured-image-url="" class="hero__background" style="
          background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
          
            <h3 data-page-title="" class="boxed centered hero__heading hero__heading--large"><?php echo get_the_title(); ?></h3>
          </div>
        </div>

        <div class="hero__shape-divider">
          <img data-uploads="home-milk-shape-divider.png" src=" <?php echo 
    str_replace( wp_upload_dir()['basedir'], 
    wp_upload_dir()['baseurl'],
    wp_upload_dir()['basedir'] . wp_upload_dir()['subdir'] . '/' . 'home-milk-shape-divider.png' ); ?>" alt="" class="milestones__shape-divider-img">
        </div>
      </section>

      <section class="page-info">
        <div class="card-text card-text--center boxed centered">
          <?php 
            $page_info = get_field('page__page_info');
            $heading = $page_info['heading'];
            $text = $page_info['text'];
          ?>
          <h1 class="heading card-text__heading"><?php echo esc_html($heading); ?></h1>
          <p class="card-text__text">
            <?php echo esc_html($text); ?>
          </p>
        </div>
      </section>

      <section class="page-content">
        <div data-page-content="" class="page-content__container boxed centered"><?php echo the_content(); ?></div>
      </section>
    </main>

    <!-- Footer  --> <?php get_footer(); ?>