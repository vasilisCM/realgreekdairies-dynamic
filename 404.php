<?php get_header(); ?> <!-- Header  -->

    




        <!-- Main  -->
        <main class="main">
      <section class="hero error-404">
        <div class="hero__container">
          <div class="hero__background">
            <div class="error-404__container boxed centered">
              <div class="error-404__img-container">
                <img class="centered" src="<?php echo get_template_directory_uri() . '/./assets/img/guru-goat.png'; ?>" alt="" />
              </div>
              <div class="error-404__text-container">
                <h2 class="error-404__heading">404</h2>
                <p class="heading-medium-large error-404__text">
                  Η σελίδα δεν βρέθηκε.
                </p>
              </div>
              <a href="/"
                ><button class="button">
                  <span>Αρχική</span>
                </button></a
              >
            </div>
          </div>
        </div>
      </section>
    </main>




    <!-- Footer  --> <?php get_footer(); ?>