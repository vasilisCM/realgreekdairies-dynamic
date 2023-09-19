
    <?php /* Template Name: Products */ ?>
    <?php get_header(); ?> <!-- Header  -->
    

    <!-- Main  -->
    <main class="main">
      <section class="hero">
        <div class="hero__container">
          <div class="hero__background" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/archive-product-hero.webp'; ?>');"></div>

          <div class="curve">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
              <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
            </svg>
          </div>
        </div>

        <div class="card-text card-text--center hero__card boxed centered">
          <h1 class="heading card-text__heading">Προϊόντα</h1>
          <p class="card-text__text">
            Ο όμιλος ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ ιδρύθηκε το 1995 με στόχο να δημιουργήσει
            ελληνικά γαλακτοκομικά και τυροκομικά προϊόντα υψηλής ποιότητας,
            καθώς και βρεφικά γάλατα σε σκόνη. Αποστολή μας είναι να
            ανταποκρινόμαστε καθημερινά στον ανταγωνιστικό διεθνή χώρο
            προσφέροντας προϊόντα που ανταποκρίνονται στις ανάγκες όλων των
            κατηγοριών και ηλικιών. Γι’ αυτό δημιουργήσαμε τη σειρά προϊόντων
            REAL GREEK DAIRIES. Η πορεία του ομίλου ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ
            περιλαμβάνει σημαντικά ορόσημα, που αντικατοπτρίζουν την ανάπτυξη
            και την επιτυχία μας.
          </p>
        </div>

        <div class="hero__shape-divider">
          <img data-uploads="home-milk-shape-divider.png" src=" <?php echo 
    str_replace( wp_upload_dir()['basedir'], 
    wp_upload_dir()['baseurl'],
    wp_upload_dir()['basedir'] . wp_upload_dir()['subdir'] . '/' . 'home-milk-shape-divider.png' ); ?>" alt="" class="milestones__shape-divider-img">
        </div>
      </section>

      <section class="products">
        <div data-archive-container="" class="products__container boxed centered"><?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
    ?>
     
          <div data-archive-posts="" class="card-text card-text--product">
            <div>
              <img data-featured-image-url="" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="card-text__text-container">
              <h2 data-post-title="" class="card-text__heading"><?php echo get_the_title(); ?></h2>
              <p data-post-excerpt="" class="card-text__text"><?php echo get_the_excerpt(); ?></p>
              <a data-post-url="" href="<?php echo the_permalink(); ?>"><button class="button">
                  <span>Διαβάστε περισσότερα</span>
                </button></a>
            </div>
          </div>
    <?php
      endwhile;
      endif;
    ?></div>
      </section>
    </main>

    <!-- Footer  --> <?php get_footer(); ?>