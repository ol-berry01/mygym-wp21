<?php
/**
 * Header file for the MyGym 2020 theme.
 */

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <!-- Header -->
    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img id="logo" class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/inc/img/mygym-logo-63.png">
          </a>
          <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <?php
                wp_nav_menu(
                  array(
                    'theme_location'  => 'headerMenu',
                    'menu_id'         => 'primary-menu',
                    'menu_class'      => 'navbar-nav ml-auto ml-lg-0 mx-lg-auto',
                    'walker'          => new wp_bootstrap_navwalker()
                  )
                );
            ?>
          </div>
          <div class="top-social d-none d-lg-block">
            <a href="https://www.facebook.com/myGym.salisbury/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/mygymsalisbury/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/organization-guest/company/mygym-health-&-fitness-limited" target="_blank"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </nav>
    
      <div id="main">