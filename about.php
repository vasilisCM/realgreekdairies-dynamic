
    <?php /* Template Name: About */ ?>
    <?php get_header(); ?> <!-- Header  -->
    

    <!-- Main  -->
    <main class="main">
      <section class="hero hero--inner">
        <div class="hero__container">
          <div data-featured-image-url="" 
            class="hero__background" 
            style="
              background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
            <h3 class="boxed centered hero__heading hero__heading--double">
              <?php 
                $hero = get_field('about__hero');
                $heading_1 = $hero['heading_1'];
                $heading_2 = $hero['heading_2'];
              ?>
              <span class="hero__heading--small"><?php echo esc_html($heading_1); ?></span>
              <span class="hero__heading--large"><?php echo esc_html($heading_2); ?></span>
            </h3>
          </div>
        </div>

        <div class="hero__shape-divider">
          <img data-uploads="home-milk-shape-divider.png" 
            src="
              <?php echo 
              str_replace( wp_upload_dir()['basedir'], 
              wp_upload_dir()['baseurl'],
              wp_upload_dir()['basedir'] . wp_upload_dir()['subdir'] . '/' . 'home-milk-shape-divider.png' ); ?>
              " 
            alt="" class="milestones__shape-divider-img">
        </div>
      </section>

      <section class="products about">
        <div class="products__container boxed centered">

        <?php
              if( have_rows('about__content') ): while ( have_rows('about__content') ) : the_row(); 
                if( have_rows('card') ): while ( have_rows('card') ) : the_row();
            ?>       

              <div class="card-text card-text--product">
                <div>
                  <img src="<?php echo esc_html(get_sub_field('image')); ?>" class="products__featured-img" alt="">
                </div>
                <div class="card-text__text-container">
                  <h2 class="card-text__heading"><?php echo esc_html(get_sub_field('heading')); ?></h2>
                  <p class="card-text__text">
                  <?php echo esc_html(get_sub_field('text')); ?>
                  </p>
                    <?php
                      // Check if the ACF boolean field is true
                      if (get_sub_field('button')) :
                    ?>
                        <button class="button card-text__button about__button">
                            <span>Διαβάστε περισσότερα</span>
                        </button>
                    <?php
                    endif;
                    ?>
                  <p class="card-text__text tabs__content about__content hidden">
                    <?php echo esc_html(get_sub_field('more_text')); ?>
                  </p>
                </div>
              </div>
          
            <?php
                endwhile; endif;
              endwhile; endif;
            ?>

        </div>
      </section>

      <section class="company-about">
        <div class="company-about__container boxed centered">
          <?php 
            $certifications = get_field('about__certifications');
            $text = $certifications['text'];
            $heading = $certifications['heading'];
          ?>
          <p class="text-medium-large bold card-text__text card-text__text--bold">
            <?php echo esc_html($text); ?>
          </p>
          <h3 class="company-about__heading"><?php echo esc_html($heading); ?></h3>
        
          <div class="company-about__logos">

            <?php
              if( have_rows('about__certifications') ): while ( have_rows('about__certifications') ) : the_row(); 
                if( have_rows('logo') ): while ( have_rows('logo') ) : the_row();
            ?>       

              <div class="company-about__logo-container">
                <img 
                src="<?php echo esc_html(get_sub_field('image')); ?>" 
                alt="" class="company-about__logo-img">
              </div>

            <?php
          endwhile; endif;
        endwhile; endif;
        ?>
</div>

        </div>
      </section>
    </main>

    <!-- Footer  --> <?php get_footer(); ?>