<?php get_header(); ?> <!-- Header  -->
    

    <!-- Main  -->
    <main class="main">
      <section class="hero">
        <div class="hero__container">
          <div class="hero__background" style="
              background-image: url(https://pbs.twimg.com/media/CCNMHroUMAACbwd.jpg);
            "></div>

          <div class="curve">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
              <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
            </svg>
          </div>
        </div>

        <div class="card-text card-text--center hero__card boxed centered">
          <h1 class="heading card-text__heading">Σφάλμα 404</h1>
          <p class="card-text__text">Η σελίδα δε βρέθηκε.</p>
        </div>

        <div class="hero__shape-divider">
          <img data-uploads="home-milk-shape-divider.png" src=" <?php echo 
    str_replace( wp_upload_dir()['basedir'], 
    wp_upload_dir()['baseurl'],
    wp_upload_dir()['basedir'] . wp_upload_dir()['subdir'] . '/' . 'home-milk-shape-divider.png' ); ?>" alt="" class="milestones__shape-divider-img">
        </div>
      </section>
    </main>

    <!-- Footer  --> <?php get_footer(); ?>