
      <footer data-footer="" class="footer">
  <div class="banner-text">
    <div class="banner-text__container boxed centered">
      <div class="banner-text__img-container">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/footer-patent.png'; ?>" alt="" class="centered banner-text__img">
      </div>
      <h3 class="heading">Η Ευρεσιτεχνία της Ελληνικής Πρωτεϊνης</h3>
      <p class="text">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta quam
        nihil eum asperiores esse nisi similique quis quia minus quae dolore qui
        beatae nobis veniam unde, magni aperiam! Voluptas, temporibus. Quod
        modi, optio pariatur repellat consequatur repellendus laborum eligendi
        sed vero temporibus autem provident veritatis officiis labore nemo
        dolorum qui soluta adipisci! Laudantium expedita, beatae voluptate
        facilis deserunt enim explicabo!
      </p>
    </div>
  </div>
  <div class="footer__social">
    <div class="footer__social-text-container text-large">
      <span class="footer__social-text">Ανακαλύψτε την</span>
      <div class="footer__logo-container">
        <img src="<?php echo get_template_directory_uri() . '/./assets/img/logo.svg'; ?>" alt="" class="logo footer__logo">
      </div>
      <span class="footer__social-text">στα Social media</span>
    </div>
    <div class="footer__social-icons centered">
      <div class="footer__social-icon-container">
        <a href="">
          <img data-uploads="ic-facebook.svg" src="<?php echo get_template_directory_uri() . '/assets/img/ic-facebook.svg'; ?>" alt="" class="footer__social-icon-img centered">
        </a>
      </div>
      <div class="footer__social-icon-container">
        <a href="">
          <img data-uploads="ic-instagram.svg" src="<?php echo get_template_directory_uri() . '/assets/img/ic-instagram.svg'; ?>" alt="" class="footer__social-icon-img centered">
        </a>
      </div>
      <div class="footer__social-icon-container">
        <a href="">
          <img data-uploads="ic-linkedin.svg" src="<?php echo get_template_directory_uri() . '/assets/img/ic-linkedin.svg'; ?>" alt="" class="footer__social-icon-img centered">
        </a>
      </div>
    </div>
  </div>

  <div class="footer__links boxed centered">
    <div class="footer__links-column">
      <h4 class="footer__heading heading-small">Πληροφορίες</h4>
      
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
      <h4 class="footer__heading heading-small">Προϊόντα</h4>
      
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
      <h4 class="footer__heading heading-small">Επικοινωνία</h4>
      <ul class="footer__list">
        <li lang="el" class="footer__item text-small">
          <a href="">Παράδοση</a>
        </li>
        <li lang="el" class="footer__item text-small">
          <a href="">Παράδοση</a>
        </li>
        <li lang="el" class="footer__item text-small">
          <a href="">Παράδοση</a>
        </li>
        <li lang="el" class="footer__item text-small">
          <a href="">Παράδοση</a>
        </li>
        <li lang="el" class="footer__item text-small">
          <a href="">Παράδοση</a>
        </li>
      </ul>
    </div>
  </div>

  <!-- Copyrights -->
  <div class="footer__bottom-bar">
    <div class="footer__privacy-links text-medium-small">
      <a href="" class="footer__privacy-link">Όροι Χρήσης</a>
      <div class="footer__privacy-links-divider">|</div>
      <a href="" class="footer__privacy-link">Πολιτική Απορρήτου</a>
      <div class="footer__privacy-links-divider">|</div>
      <a href="" class="footer__privacy-link">Πολιτική Χρήσης Cookies</a>
      <div class="footer__privacy-links-divider">|</div>
      <a href="" class="footer__privacy-link">Ρυθμίσεις Cookies</a>
    </div>
    <div class="text-small footer__copyrights">
      Real Greek Dairies 2023 All Rights Reserved. Created by
      <a href="">Concept Maniax.</a>
    </div>
  </div>

  <!-- Back to Top  -->
  <div class="back-to-top blob" back-to-top=""></div>
</footer>
      <?php wp_footer(); ?>
      </body>
      </html>