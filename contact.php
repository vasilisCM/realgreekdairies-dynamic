

    <?php /* Template Name: Contact */ ?>

    <?php get_header(); ?> <!-- Header  -->

    



    <!-- Main  -->

    <main class="main">

      <section class="hero hero--inner">

        <div class="hero__container">

          <div data-featured-image-url="" class="hero__background hero__background--contact" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/contact-hero.jpg'; ?>');"></div>

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

            <?php echo $text ?>

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

              <?php if( $telephone_text ): ?>
              <div class="contact-info__item">

                <a class="text contact-info__link contact-info__link--tel" href="tel:<?php echo esc_html($telephone_number); ?>"> <?php echo esc_html($telephone_text); ?> </a>

              </div>
              <?php endif; ?>
              
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

            <span class="card-text__heading"><?php echo __('Στείλτε μας το μήνυμά σας','realgreekdairies'); ?></span>

            <br><span class="card-text__subheading"><?php echo __('Στείλτε μας το μήνυμά σας και θα σας απαντήσουμε το συντομότερο

              δυνατό.','realgreekdairies'); ?>

            </span>

          </h2>



          <div class="contact-form">

            <div class="contact-form__form">

              <?php echo do_shortcode('[contact-form-7 id="6bf6d1f" title="Contact Form"]'); ?>

  

              </div>

          </div>

        </div>

      </section>

    </main>



    <!-- Footer  --> <?php get_footer(); ?>