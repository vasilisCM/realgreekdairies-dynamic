<?php get_header(); ?> <!-- Header  -->
    

    <!-- Main  -->
    <main class="main">
      <section class="hero">
        <div class="hero__container">
          <div class="hero__background" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/single-product-hero.webp'; ?>');">
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
            <div class="heading card-text__heading">Μητέρες κατά την κύηση</div>
            <!-- <br />
            <span data-post-title class="heading card-text__subheading"
              >Φέτα</span
            > -->
          </div>
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

      <section class="single-product">
        <div class="boxed centered single-product__container">
          <div class="single-product__img-container">
            <img data-featured-image-url="" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="single-product__img">
          </div>
          <div class="single-product__info">
            <div data-post-title="" class="heading single-product__heading"><?php echo get_the_title(); ?></div>
            <div data-post-content="" class="single-product__description"><?php echo the_content(); ?></div>
            <div tabs-buttons="" class="single-product__tabs">
              <div data-tab="1" class="text single-product__tab">Uses</div>
              <div data-tab="2" class="tabs__button text single-product__tab">
                Standard Product Analysis
              </div>
            </div>
            <div data-tab="1" class="tabs__content hidden">
              WHEYPRΟ is used widely in food, functional food, nutritional
              supplements, children and baby nutrition.
            </div>
            <div data-tab="2" class="tabs__content single-product__table-container hidden">
              <table>
                <tbody>
                  <tr class="single-product__table-heading">
                    <td class="single-product__table-heading-column">
                      <strong>Chemical constitution</strong>
                    </td>
                    <td class="single-product__table-heading-column">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr class="row-3 odd">
                    <td>Total Protein (Ν x 6.38) DM</td>
                    <td>%</td>
                    <td>35,0</td>
                  </tr>
                  <tr class="row-4 even">
                    <td>Lactose</td>
                    <td>%</td>
                    <td>53,0</td>
                  </tr>
                  <tr class="row-5 odd">
                    <td>Fat</td>
                    <td>%</td>
                    <td>1,4</td>
                  </tr>
                  <tr class="row-6 even">
                    <td>Ash</td>
                    <td>%</td>
                    <td>5,6</td>
                  </tr>
                  <tr class="row-7 odd">
                    <td>Humidity</td>
                    <td>%</td>
                    <td>max 5,0</td>
                  </tr>
                  <tr class="row-8 even">
                    <td>Calcium (Ca)</td>
                    <td>g/Kg</td>
                    <td>4,8</td>
                  </tr>
                  <tr class="row-9 odd">
                    <td>Phosphorus (P)</td>
                    <td>g/Kg</td>
                    <td>4,9</td>
                  </tr>
                  <tr class="row-10 even">
                    <td>Sodium (Na)</td>
                    <td>g/Kg</td>
                    <td>4,6</td>
                  </tr>
                  <tr class="row-11 odd">
                    <td>Potassium (K)</td>
                    <td>g/Kg</td>
                    <td>12,3</td>
                  </tr>
                  <tr class="row-12 even">
                    <td>Magnesium (Mg)</td>
                    <td>g/Kg</td>
                    <td>1,1</td>
                  </tr>
                  <tr class="row-13 odd">
                    <td>Chlorine (Cl)</td>
                    <td>g/Kg</td>
                    <td>12,9</td>
                  </tr>
                  <tr class="single-product__table-heading">
                    <td>
                      <strong>Natural properties</strong>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr class="row-15 odd">
                    <td>pH (10% solution)</td>
                    <td>&nbsp;</td>
                    <td>6,2</td>
                  </tr>
                  <tr class="row-16 even">
                    <td>Bulk density</td>
                    <td>g/L</td>
                    <td>400</td>
                  </tr>
                  <tr class="row-17 odd">
                    <td>Tapped Density</td>
                    <td>g/L</td>
                    <td>600</td>
                  </tr>
                  <tr class="row-18 even">
                    <td>Solubility index</td>
                    <td>ml</td>
                    <td>0,2</td>
                  </tr>
                  <tr class="row-19 odd">
                    <td>Purity (ADMI)</td>
                    <td>disc</td>
                    <td>A/B</td>
                  </tr>
                  <tr class="single-product__table-heading">
                    <td>
                      <strong>Microbiological specifications</strong>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr class="row-21 odd">
                    <td>Total microbe load</td>
                    <td>cfu/g</td>
                    <td>max 50.000</td>
                  </tr>
                  <tr class="row-22 even">
                    <td>Coliforms</td>
                    <td>cfu/g</td>
                    <td>max 10</td>
                  </tr>
                  <tr class="row-23 odd">
                    <td>Yeasts &amp; Molds</td>
                    <td>cfu/g</td>
                    <td>max 10</td>
                  </tr>
                  <tr class="row-24 even">
                    <td>Staphylococcus aureus</td>
                    <td>cfu/g</td>
                    <td>Not Present</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer  --> <?php get_footer(); ?>