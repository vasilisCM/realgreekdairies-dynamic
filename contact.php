
    <?php /* Template Name: Contact */ ?>
    <?php get_header(); ?> <!-- Header  -->
    

    <!-- Main  -->
    <main class="main">
      <section class="hero hero--inner">
        <div class="hero__container">
          <div data-featured-image-url="" class="hero__background hero__background--contact" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/contact-hero.jpg'; ?>');"></div>
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

      <section >
        <div class="card-text card-text--center boxed centered">
          <div class="contact-info">
            <div class="contact-info__container">
              <?php 
                $contact_info = get_field('contact__contact_info');
                $telephone = $contact_info['telephone'];
                $telephone_text =  $telephone['text'];
                $telephone_number =  $telephone['number'];
                $email = $contact_info['email'];
                $email_text = $email['text'];
                $email_address = $email['address'];
                $location = $contact_info['location'];
                $location_text = $location['text'];
                $location_pin = $location['pin'];
              ?>
              <div class="contact-info__item">
                <a class="text contact-info__link contact-info__link--tel" href="tel:<?php echo esc_html($telephone_number); ?>"> <?php echo esc_html($telephone_text); ?> </a>
              </div>
              <div class="contact-info__item">
                <a class="text contact-info__link contact-info__link--email" href="mailto:<?php echo esc_html($email_address); ?>"><?php echo esc_html($email_text); ?></a>
              </div>
              <div class="contact-info__item">
                <a class="text contact-info__link contact-info__link--location" href="<?php echo esc_html($location_pin); ?>" target="_blank"><?php echo esc_html($location_text); ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="contact">
        <div class="contact__container boxed centered">
          <h2 class="heading">
            <span class="card-text__heading">Στείλτε μας το μήνυμά σας</span>
            <br><span class="card-text__subheading">Στείλτε μας το μήνυμά σας και θα σας απαντήσουμε το συντομότερο
              δυνατό
            </span>
          </h2>

          <div class="contact-form">
            <form action="" class="contact-form__form">
              <div class="contact-form__field">
                <label class="contact-form__label text" lang="el" for="name">Όνομα *</label>
                <input class="contact-form__input" lang="el" type="text" name="name" id="name" required="">
              </div>

              <div class="contact-form__field">
                <label class="contact-form__label text" lang="el" for="tel">Κινητό Τηλέφωνο *</label>
                <input class="contact-form__input" type="tel" name="tel" id="tel" required="">
              </div>

              <div class="contact-form__field">
                <label class="contact-form__label text" for="email">Email *</label>
                <input class="contact-form__input" type="email" name="email" id="email" required="">
              </div>

              <div class="contact-form__field contact-form__field--message">
                <label class="contact-form__label text" lang="el" for="message">Μήνυμα *</label>
                <textarea lang="el" name="message" id="message" class="contact-form__input contact-form__input--message" required=""></textarea>
              </div>
              <div class="contact-form__submit-container">
                <div class="contact-form__field contact-form__field--terms">
                  <input class="contact-form__input contact-form__input--terms" type="checkbox" name="terms" id="terms" required="">
                  <label lang="el" class="text-small contact-form__label contact-form__label--terms text" for="terms">Συμφωνώ με τους
                    <a lang="el" href="">Όρους Χρήσης</a></label>
                </div>
                <div class="contact-form__field">
                  <button class="button" type="submit" value="Submit">
                    <span>Υποβολή</span>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer  --> <?php get_footer(); ?>