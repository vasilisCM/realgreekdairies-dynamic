

      <!DOCTYPE html>

      <html lang="en">

      <head>

      <meta charset="UTF-8" />

      <meta http-equiv="X-UA-Compatible" content="IE=edge" />

      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <?php wp_head(); ?>

      </head>

      <body class="body">

      <header data-header="" sticky-header="" class="header">

  <div class="header__container boxed centered">

    <!-- Main Menu 1-->

    <nav class="main-menu main-menu--1 main-menu--closed">

      

        <?php

          wp_nav_menu(

            array(

              'menu' => "main-1",

              'container' => '',

              'theme_location' => "main-1",

              'items_wrap' => '<ul id="" class="main-menu__list">%3$s</ul>'

              )

            );

          ?>

    </nav>



    <!-- Logo  -->

    <div class="header__logo-container">

      <a href="<?php echo home_url('/'); ?>">

        <img data-featured-image="" src="<?php echo get_template_directory_uri() . '/./assets/img/logo.svg'; ?>" alt="" class="logo header__logo">

      </a>

    </div>



    <!-- Main Menu 2-->

    <nav class="main-menu main-menu--2 main-menu--closed">

      

        <?php

          wp_nav_menu(

            array(

              'menu' => "main-2",

              'container' => '',

              'theme_location' => "main-2",

              'items_wrap' => '<ul id="" class="main-menu__list ">%3$s</ul>'

              )

            );

          ?>



		<!-- Language Switcher -->

		<!-- <div class="language-switcher">

		  <?php /*

			$languages = icl_get_languages('skip_missing=0&orderby=code');

			if (!empty($languages)) {

			  foreach ($languages as $language) {

				if (!$language['active']) {

				  $code = $language['language_code'];

				  $url = $language['url'];

				  $native_name = ($code === 'en') ? 'EN' : $language['native_name'];



				  echo '<a href="' . esc_url($url) . '" class="language-switcher__item">' . esc_html($native_name) . '</a>';

				}

			  }

			} */

		  ?>

		</div> -->

    </nav>



    <!-- Mobile Menu Button  -->

    <div class="hamburger-container">
      <div class="hamburger" pressed="false"></div>
    </div>

  </div>

</header>