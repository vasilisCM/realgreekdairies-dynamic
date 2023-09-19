
    <?php /* Template Name: Real Greek Dairies */ ?>
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
              <div class="carousel__slide hero__slide carousel__slide" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/home-hero-001.webp'; ?>');">
                <div class="carousel__content boxed centered">
                  <h3 class="hero__heading">
                    <span class="hero__heading--large">Έμπνευσή μας</span>
                    <span class="hero__heading--small">η αγνότητα της Ελληνικής Φύσης</span>
                  </h3>
                </div>
              </div>
              <div class="carousel__slide hero__slide carousel__slide" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/home-hero-002.jpg'; ?>');">
                <div class="carousel__content boxed centered">
                  <h3 class="hero__heading">
                    <span class="hero__heading--small">Σημείο αναφοράς για την</span>
                    <span class="hero__heading--large">
                      αειφορία στη γεωργία</span>
                  </h3>
                </div>
              </div>
              <div class="carousel__slide hero__slide carousel__slide" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/home-hero-003.jpg'; ?>');">
                <div class="carousel__content boxed centered">
                  <h3 class="hero__heading">
                    <span class="hero__heading--small">Βάση μας η αγνότητα της</span>
                    <span class="hero__heading--large">ελληνικής φύσης</span>
                  </h3>
                </div>
              </div>
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
          <h1 class="heading card-text__heading">Real Greek Dairies</h1>
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

          <a href=""><button class="button">
              <span>Διαβάστε περισσότερα</span>
            </button></a>

          <p class="text-medium-large bold card-text__text card-text__text--bold">
            Η πορεία του ομίλου ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ περιλαμβάνει σημαντικά
            ορόσημα, που αντικατοπτρίζουν την ανάπτυξη και την επιτυχία μας:
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
          <img data-uploads="home-milk-shape-divider.png" src=" <?php echo 
    str_replace( wp_upload_dir()['basedir'], 
    wp_upload_dir()['baseurl'],
    wp_upload_dir()['basedir'] . wp_upload_dir()['subdir'] . '/' . 'home-milk-shape-divider.png' ); ?>" alt="" class="milestones__shape-divider-img">
        </div>
      </section>

      <section class="products-home">
        <div class="products-home__card boxed-no-desktop centered">
          <div class="card-text products-home__text-container">
            <h2 class="heading">
              <span class="card-text__heading">Real Greek Dairies</span>
              <br><span class="card-text__subheading">Αγνή Ελληνική Πρωτεΐνη
              </span>
            </h2>
            <p class="card-text__text">
              Ο όμιλος ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ ιδρύθηκε το 1995 με στόχο να
              δημιουργήσει ελληνικά γαλακτοκομικά και τυροκομικά προϊόντα υψηλής
              ποιότητας, καθώς και βρεφικά γάλατα σε σκόνη. Αποστολή μας είναι
              να ανταποκρινόμαστε καθημερινά στον ανταγωνιστικό διεθνή χώρο
              προσφέροντας προϊόντα που ανταποκρίνονται στις ανάγκες όλων των
              κατηγοριών και ηλικιών. Γι’ αυτό δημιουργήσαμε τη σειρά προϊόντων
              REAL GREEK DAIRIES. Η πορεία του ομίλου ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ
              περιλαμβάνει σημαντικά ορόσημα, που αντικατοπτρίζουν την ανάπτυξη
              και την επιτυχία μας.
            </p>
            <a href=""><button class="button">
                <span>Διαβάστε περισσότερα</span>
              </button></a>
          </div>
          <div class="products-home__img-container">
            <img data-uploads="home-products-001.png" src=" <?php echo 
    str_replace( wp_upload_dir()['basedir'], 
    wp_upload_dir()['baseurl'],
    wp_upload_dir()['basedir'] . wp_upload_dir()['subdir'] . '/' . 'home-products-001.png' ); ?>" alt="" class="products-home__img">
          </div>
        </div>
        <div class="products-home__card products-home__card--flipped boxed-no-desktop centered">
          <div class="card-text card-text--right products-home__text-container">
            <h2 class="heading">
              <span class="card-text__heading">Real Greek Dairies</span>
              <br><span class="card-text__subheading">Αγνή Ελληνική Πρωτεΐνη
              </span>
            </h2>
            <p class="card-text__text">
              Ο όμιλος ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ ιδρύθηκε το 1995 με στόχο να
              δημιουργήσει ελληνικά γαλακτοκομικά και τυροκομικά προϊόντα υψηλής
              ποιότητας, καθώς και βρεφικά γάλατα σε σκόνη. Αποστολή μας είναι
              να ανταποκρινόμαστε καθημερινά στον ανταγωνιστικό διεθνή χώρο
              προσφέροντας προϊόντα που ανταποκρίνονται στις ανάγκες όλων των
              κατηγοριών και ηλικιών. Γι’ αυτό δημιουργήσαμε τη σειρά προϊόντων
              REAL GREEK DAIRIES. Η πορεία του ομίλου ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ
              περιλαμβάνει σημαντικά ορόσημα, που αντικατοπτρίζουν την ανάπτυξη
              και την επιτυχία μας.
            </p>
            <a href=""><button class="button">
                <span>Διαβάστε περισσότερα</span>
              </button></a>
          </div>
          <div class="products-home__img-container">
            <img data-uploads="home-products-002.png" src=" <?php echo 
    str_replace( wp_upload_dir()['basedir'], 
    wp_upload_dir()['baseurl'],
    wp_upload_dir()['basedir'] . wp_upload_dir()['subdir'] . '/' . 'home-products-002.png' ); ?>" alt="" class="products-home__img">
          </div>
        </div>
        <div class="products-home__card boxed-no-desktop centered">
          <div class="card-text products-home__text-container">
            <h2 class="heading">
              <span class="card-text__heading">Real Greek Dairies</span>
              <br><span class="card-text__subheading">Αγνή Ελληνική Πρωτεΐνη
              </span>
            </h2>
            <p class="card-text__text">
              Ο όμιλος ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ ιδρύθηκε το 1995 με στόχο να
              δημιουργήσει ελληνικά γαλακτοκομικά και τυροκομικά προϊόντα υψηλής
              ποιότητας, καθώς και βρεφικά γάλατα σε σκόνη. Αποστολή μας είναι
              να ανταποκρινόμαστε καθημερινά στον ανταγωνιστικό διεθνή χώρο
              προσφέροντας προϊόντα που ανταποκρίνονται στις ανάγκες όλων των
              κατηγοριών και ηλικιών. Γι’ αυτό δημιουργήσαμε τη σειρά προϊόντων
              REAL GREEK DAIRIES. Η πορεία του ομίλου ΕΛΛΗΝΙΚΗ ΠΡΩΤΕΙΝΗ
              περιλαμβάνει σημαντικά ορόσημα, που αντικατοπτρίζουν την ανάπτυξη
              και την επιτυχία μας.
            </p>
            <a href=""><button class="button">
                <span>Διαβάστε περισσότερα</span>
              </button></a>
          </div>
          <div class="products-home__img-container">
            <img data-uploads="home-products-003.png" src=" <?php echo 
    str_replace( wp_upload_dir()['basedir'], 
    wp_upload_dir()['baseurl'],
    wp_upload_dir()['basedir'] . wp_upload_dir()['subdir'] . '/' . 'home-products-003.png' ); ?>" alt="" class="products-home__img">
          </div>
        </div>
      </section>

      <section class="company-home">
        <div class="banner" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/banner-bg-001.jpg'; ?>');">
          <div class="banner__container boxed centered">
            <div class="card-text banner__card">
              <h2 class="heading card-text__heading">Ελληνικότητα</h2>
              <p class="card-text__text">
                Είμαστε υπερήφανοι για την ελληνική μας καταγωγή και αξιοποιούμε
                τα παραδοσιακά και ποιοτικά χαρακτηριστικά των ελληνικών
                προϊόντων. Τα προϊόντα μας παράγονται από αίγειο και πρόβειο
                γάλα, προσφέροντας μια μοναδική γευστική εμπειρία.
              </p>
              <a href=""><button class="button">
                  <span>Διαβάστε περισσότερα</span>
                </button></a>
            </div>
          </div>
        </div>

        <div class="company-home__outer-container centered">
          <div class="company-home__container">
            <div class="company-home__text-container centered">
              <h2 class="heading-medium-large">
                Η παρουσία των προϊόντων REAL GREEK DAIRIES είναι δυναμική και
                συνεχής σε πολλές χώρες, σε όλο τον κόσμο.
              </h2>
              <p>
                Με έδρα μας την Ευρώπη, έχουμε επεκταθεί στην Κίνα και τις
                Ηνωμένες Πολιτείες. Αυτό μας επιτρέπει να φέρνουμε τα προϊόντα
                μας κοντά σε ακόμα περισσότερους ανθρώπους που αναζητούν υγιεινή
                διατροφή και υψηλή ποιότητα σε προϊόντα πλούσια σε γεύση.
              </p>
            </div>
          </div>
        </div>

        <div class="company-home__img-container">
          <img data-uploads="home-company-001.webp" src=" <?php echo 
    str_replace( wp_upload_dir()['basedir'], 
    wp_upload_dir()['baseurl'],
    wp_upload_dir()['basedir'] . wp_upload_dir()['subdir'] . '/' . 'home-company-001.webp' ); ?>" alt="" class="company-home__img centered">
        </div>

        <div class="company-home__img-container company-home__img-container--milk centered">
          <img data-uploads="home-company-002.png" src=" <?php echo 
    str_replace( wp_upload_dir()['basedir'], 
    wp_upload_dir()['baseurl'],
    wp_upload_dir()['basedir'] . wp_upload_dir()['subdir'] . '/' . 'home-company-002.png' ); ?>" alt="" class="company-home__img">
        </div>

        <div class="banner" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/banner-bg-002.jpg'; ?>');">
          <div class="banner__container boxed centered">
            <div class="card-text banner__card">
              <h2 class="heading card-text__heading">Φάρμα</h2>
              <p class="card-text__text">
                Η <strong>φάρμα αιγών</strong> αναδεικνύεται ως ένα από τα
                κεντρικά σημεία της πρωτοποριακής προσέγγισης της
                <strong>REAL GREEK DAIRIES</strong>. Πέρα από το να αποτελεί
                πηγή ποιοτικού και υγιεινού γάλακτος, η φάρμα διαδραματίζει έναν
                διπλό ρόλο:
                <strong>αυξάνει τη βιωσιμότητα της επιχείρησης και αποτελεί πρότυπο
                  για τη νέα γενιά των παραγωγών.</strong>
              </p>
              <a href=""><button class="button">
                  <span>Διαβάστε περισσότερα</span>
                </button></a>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer  --> <?php get_footer(); ?>