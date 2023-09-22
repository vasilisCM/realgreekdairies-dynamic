
    <?php /* Template Name: About */ ?>
    <?php get_header(); ?> <!-- Header  -->
    

    <!-- Main  -->
    <main class="main">
      <section class="hero hero--inner">
        <div class="hero__container">
          <div data-featured-image-url="" class="hero__background" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
          <h3
              class="boxed centered hero__heading hero__heading--double"
            >
              <span class="hero__heading--small">Ένας Όμιλος</span>
              <span class="hero__heading--large">με Όραμα</span>
            </h3>
          </div>
        </div>

        <div class="hero__shape-divider">
          <img data-uploads="home-milk-shape-divider.png" src=" <?php echo 
    str_replace( wp_upload_dir()['basedir'], 
    wp_upload_dir()['baseurl'],
    wp_upload_dir()['basedir'] . wp_upload_dir()['subdir'] . '/' . 'home-milk-shape-divider.png' ); ?>" alt="" class="milestones__shape-divider-img">
        </div>
      </section>

      <section class="products about">
        <div class="products__container boxed centered">
          <div class="card-text card-text--product">
            <div>
              <img src="<?php echo get_template_directory_uri() . '/assets/img/singe-product-001.jpg'; ?>" class="products__featured-img" alt="">
            </div>
            <div class="card-text__text-container">
              <h2 class="card-text__heading">Real Greek Dairies</h2>
              <p class="card-text__text">
                Ο όμιλος ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ ιδρύθηκε το 1995 με στόχο να
                δημιουργήσει ελληνικά γαλακτοκομικά και τυροκομικά προϊόντα
                υψηλής ποιότητας, καθώς και βρεφικά γάλατα σε σκόνη. Αποστολή
                μας είναι να ανταποκρινόμαστε καθημερινά στον ανταγωνιστικό
                διεθνή χώρο προσφέροντας προϊόντα που ανταποκρίνονται στις
                ανάγκες όλων των κατηγοριών και ηλικιών. Γι’ αυτό δημιουργήσαμε
                τη σειρά προϊόντων REAL GREEK DAIRIES. Η πορεία του ομίλου
                ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ περιλαμβάνει σημαντικά ορόσημα, που
                αντικατοπτρίζουν την ανάπτυξη και την επιτυχία μας.
              </p>
            </div>
          </div>

          <div class="card-text card-text--right card-text--product">
            <div>
              <img src="<?php echo get_template_directory_uri() . '/assets/img/home-products-001.png'; ?>" class="products__featured-img" alt="">
            </div>
            <div class="card-text__text-container">
              <h2 class="card-text__heading">Real Greek Dairies</h2>
              <p class="card-text__text">
                Ο όμιλος ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ ιδρύθηκε το 1995 με στόχο να
                δημιουργήσει ελληνικά γαλακτοκομικά και τυροκομικά προϊόντα
                υψηλής ποιότητας, καθώς και βρεφικά γάλατα σε σκόνη. Αποστολή
                μας είναι να ανταποκρινόμαστε καθημερινά στον ανταγωνιστικό
                διεθνή χώρο προσφέροντας προϊόντα που ανταποκρίνονται στις
                ανάγκες όλων των κατηγοριών και ηλικιών. Γι’ αυτό δημιουργήσαμε
                τη σειρά προϊόντων REAL GREEK DAIRIES. Η πορεία του ομίλου
                ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ περιλαμβάνει σημαντικά ορόσημα, που
                αντικατοπτρίζουν την ανάπτυξη και την επιτυχία μας.
              </p>
            </div>
          </div>

          <div class="card-text card-text--product">
            <div>
              <img src="<?php echo get_template_directory_uri() . '/assets/img/home-products-001.png'; ?>" class="products__featured-img" alt="">
            </div>
            <div class="card-text__text-container">
              <h2 class="card-text__heading">Real Greek Dairies</h2>
              <p class="card-text__text">
                Ο όμιλος ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ ιδρύθηκε το 1995 με στόχο να
                δημιουργήσει ελληνικά γαλακτοκομικά και τυροκομικά προϊόντα
                υψηλής ποιότητας, καθώς και βρεφικά γάλατα σε σκόνη. Αποστολή
                μας είναι να ανταποκρινόμαστε καθημερινά στον ανταγωνιστικό
                διεθνή χώρο προσφέροντας προϊόντα που ανταποκρίνονται στις
                ανάγκες όλων των κατηγοριών και ηλικιών. Γι’ αυτό δημιουργήσαμε
                τη σειρά προϊόντων REAL GREEK DAIRIES. Η πορεία του ομίλου
                ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ περιλαμβάνει σημαντικά ορόσημα, που
                αντικατοπτρίζουν την ανάπτυξη και την επιτυχία μας.
              </p>
              <button class="button card-text__button about__button">
                <span>Διαβάστε περισσότερα</span>
              </button>
              <p class="card-text__text tabs__content about__content hidden">
                Ο όμιλος ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ ιδρύθηκε το 1995 με στόχο να
                δημιουργήσει ελληνικά γαλακτοκομικά και τυροκομικά προϊόντα
                υψηλής ποιότητας, καθώς και βρεφικά γάλατα σε σκόνη. Αποστολή
                μας είναι να ανταποκρινόμαστε καθημερινά στον ανταγωνιστικό
                διεθνή χώρο προσφέροντας προϊόντα που ανταποκρίνονται στις
                ανάγκες όλων των κατηγοριών και ηλικιών. Γι’ αυτό δημιουργήσαμε
                τη σειρά προϊόντων REAL GREEK DAIRIES. Η πορεία του ομίλου
                ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ περιλαμβάνει σημαντικά ορόσημα, που
                αντικατοπτρίζουν την ανάπτυξη και την επιτυχία μας.
              </p>
            </div>
          </div>

          <div class="card-text card-text--right card-text--product">
            <div>
              <img src="<?php echo get_template_directory_uri() . '/assets/img/home-products-001.png'; ?>" alt="" class="products__featured-img">
            </div>
            <div class="card-text__text-container">
              <h2 class="card-text__heading">Real Greek Dairies</h2>
              <p class="card-text__text">
                Ο όμιλος ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ ιδρύθηκε το 1995 με στόχο να
                δημιουργήσει ελληνικά γαλακτοκομικά και τυροκομικά προϊόντα
                υψηλής ποιότητας, καθώς και βρεφικά γάλατα σε σκόνη. Αποστολή
                μας είναι να ανταποκρινόμαστε καθημερινά στον ανταγωνιστικό
                διεθνή χώρο προσφέροντας προϊόντα που ανταποκρίνονται στις
                ανάγκες όλων των κατηγοριών και ηλικιών. Γι’ αυτό δημιουργήσαμε
                τη σειρά προϊόντων REAL GREEK DAIRIES. Η πορεία του ομίλου
                ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ περιλαμβάνει σημαντικά ορόσημα, που
                αντικατοπτρίζουν την ανάπτυξη και την επιτυχία μας.
              </p>
            </div>
          </div>

          <div class="card-text card-text--product">
            <div>
              <img src="<?php echo get_template_directory_uri() . '/assets/img/home-products-001.png'; ?>" class="products__featured-img" alt="">
            </div>
            <div class="card-text__text-container">
              <h2 class="card-text__heading">Real Greek Dairies</h2>
              <p class="card-text__text">
                Ο όμιλος ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ ιδρύθηκε το 1995 με στόχο να
                δημιουργήσει ελληνικά γαλακτοκομικά και τυροκομικά προϊόντα
                υψηλής ποιότητας, καθώς και βρεφικά γάλατα σε σκόνη. Αποστολή
                μας είναι να ανταποκρινόμαστε καθημερινά στον ανταγωνιστικό
                διεθνή χώρο προσφέροντας προϊόντα που ανταποκρίνονται στις
                ανάγκες όλων των κατηγοριών και ηλικιών. Γι’ αυτό δημιουργήσαμε
                τη σειρά προϊόντων REAL GREEK DAIRIES. Η πορεία του ομίλου
                ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ περιλαμβάνει σημαντικά ορόσημα, που
                αντικατοπτρίζουν την ανάπτυξη και την επιτυχία μας.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="company-about">
        <div class="company-about__container boxed centered">
          <h3>Οι Πιστοποιήσεις μας</h3>
          <div class="company-about__logos">
            <div class="company-about__logo-container">
              <img data-uploads="about-logo-001-fscc.webp" src=" <?php echo 
    str_replace( wp_upload_dir()['basedir'], 
    wp_upload_dir()['baseurl'],
    wp_upload_dir()['basedir'] . wp_upload_dir()['subdir'] . '/' . 'about-logo-001-fscc.webp' ); ?>" alt="" class="company-about__logo-img">
            </div>
            <div class="company-about__logo-container">
              <img data-uploads="about-logo-002-hqc.webp" src=" <?php echo 
    str_replace( wp_upload_dir()['basedir'], 
    wp_upload_dir()['baseurl'],
    wp_upload_dir()['basedir'] . wp_upload_dir()['subdir'] . '/' . 'about-logo-002-hqc.webp' ); ?>" alt="" class="company-about__logo-img">
            </div>
            <div class="company-about__logo-container">
              <img data-uploads="about-logo-003-ISO.webps" src=" <?php echo 
    str_replace( wp_upload_dir()['basedir'], 
    wp_upload_dir()['baseurl'],
    wp_upload_dir()['basedir'] . wp_upload_dir()['subdir'] . '/' . 'about-logo-003-ISO.webps' ); ?>" alt="" class="company-about__logo-img">
            </div>
            <div class="company-about__logo-container">
              <img data-uploads="about-logo-004-haccp.webp" src=" <?php echo 
    str_replace( wp_upload_dir()['basedir'], 
    wp_upload_dir()['baseurl'],
    wp_upload_dir()['basedir'] . wp_upload_dir()['subdir'] . '/' . 'about-logo-004-haccp.webp' ); ?>" alt="" class="company-about__logo-img">
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer  --> <?php get_footer(); ?>