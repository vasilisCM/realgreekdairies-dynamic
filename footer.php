      <footer data-footer="" class="footer">

      <div class="banner-text">

        <div class="banner-text__container boxed centered">

          <?php 

            $banner = get_field('footer__banner', 'option');

          ?>

          <p class="text">

            <?php echo $banner['text']; ?>

          </p>

        </div>

      </div>



      <div class="footer__social">

        <div class="footer__social-text-container text-large">

          <span class="footer__social-text"><?php echo __('Ανακαλύψτε την','realgreekdairies'); ?></span>

          <div class="footer__logo-container">

            <img src="<?php echo get_template_directory_uri() . '/./assets/img/logo.svg'; ?>" alt="" class="logo footer__logo">

          </div>

          <span class="footer__social-text"><?php echo __('στα Social media','realgreekdairies'); ?></span>

        </div>

        <div class="footer__social-icons centered">

          <?php 

            $social = get_field('footer__social', 'option');

          ?>



          <div class="footer__social-icon-container">

            <a href="<?php echo $social['facebook']; ?>" target="_blank">

              <img data-uploads="ic-facebook.svg" src="<?php echo get_template_directory_uri() . '/assets/img/ic-facebook.svg'; ?>" alt="" class="footer__social-icon-img centered">

            </a>

          </div>

          <div class="footer__social-icon-container">

            <a href="<?php echo $social['instagram']; ?>" target="_blank">

              <img data-uploads="ic-instagram.svg" src="<?php echo get_template_directory_uri() . '/assets/img/ic-instagram.svg'; ?>" alt="" class="footer__social-icon-img centered">

            </a>

          </div>

          <div class="footer__social-icon-container">

            <a href="<?php echo $social['linkedin']; ?>" target="_blank">

              <img data-uploads="ic-linkedin.svg" src="<?php echo get_template_directory_uri() . '/assets/img/ic-linkedin.svg'; ?>" alt="" class="footer__social-icon-img centered">

            </a>

          </div>

        </div>

      </div>



      <div class="footer__links boxed centered">

        <?php 

          $headings = get_field('footer__headings', 'option');

        ?>

        <div class="footer__links-column">

          <h4 class="footer__heading heading-small">

            <?php echo $headings['heading_1']; ?>

          </h4>

          

            <?php

              wp_nav_menu(

                array(

                  'menu' => "footer-1",

                  'container' => '',

                  'theme_location' => "footer-1",

                  'items_wrap' => '<ul id="" class="footer__list">%3$s</ul>'

                  )

                );

              ?>

        </div>

        <div class="footer__links-column">

          <h4 class="footer__heading heading-small">

          <?php echo $headings['heading_2']; ?>

          </h4>

          

            <?php

              wp_nav_menu(

                array(

                  'menu' => "footer-2",

                  'container' => '',

                  'theme_location' => "footer-2",

                  'items_wrap' => '<ul id="" class="footer__list">%3$s</ul>'

                  )

                );

              ?>

        </div>

        <div class="footer__links-column">

          <h4 class="footer__heading heading-small">

          <?php echo $headings['heading_3']; ?>

          </h4>

          <ul class="footer__list">

            <?php 

              $contact_info = get_field('footer__contact_info', 'options');

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
            <li lang="el" class="footer__item text-small">

              <a class="contact-info__link contact-info__link--footer contact-info__link--tel" href="tel:<?php echo esc_html($telephone_number); ?>"><?php echo esc_html($telephone_text); ?></a>

            </li>
            <?php endif; ?>

            <li lang="el" class="footer__item text-small">

              <a class="contact-info__link contact-info__link--footer contact-info__link--email" href="mailto:<?php echo esc_html($email_address); ?>"><?php echo esc_html($email_text); ?></a>

            </li>

            <li lang="el" class="footer__item text-small">

              <a class="contact-info__link contact-info__link--footer contact-info__link--location" href="<?php echo esc_html($location_pin); ?>" target="_blank"><?php echo esc_html($location_text); ?>

              </a>

            </li>

          </ul>

        </div>

      </div>



      <!-- Copyrights -->

      <div class="footer__bottom-bar">

        <div class="footer__privacy-links text-medium-small">

 

      <?php

              if( have_rows('footer__bottom_bar', 'option') ): while ( have_rows('footer__bottom_bar', 'option') ) : the_row(); 

                if( have_rows('privacy_links') ): while ( have_rows('privacy_links') ) : the_row();

            ?>  



          <a href="<?php echo esc_html(get_sub_field('link')) ?>" class="footer__privacy-link"><?php echo esc_html(get_sub_field('text')) ?></a>

          <!-- <div class="footer__privacy-links-divider">|</div> -->

        



        <?php

            endwhile; endif;

          endwhile; endif;

        ?>



        </div>

        <div class="text-small footer__copyrights">



        <?php 

          $bottom_bar = get_field('footer__bottom_bar', 'option');

          $copyrights = $bottom_bar['copyrights'];

          $company =  $copyrights['company'];

          $text =  $copyrights['copyrights_text'];

          $creator =  $copyrights['creator'];

          $creator_website =  $copyrights['creator_website'];

        ?>



        <span><?php echo esc_html($company); ?></span> <?php echo date("Y"); ?> <span><?php echo esc_html($text); ?></span>. 

        Created by <a target="_blank" href="<?php echo esc_html($creator_website); ?>"><?php echo esc_html($creator); ?></a>

        </div>

      </div>



      <!-- Back to Top  -->

      <div class="back-to-top blob" back-to-top=""></div>

      </footer>

    <?php wp_footer(); ?>

  </body>

</html>