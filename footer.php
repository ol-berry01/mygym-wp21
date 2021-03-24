<?php
/**
 * Footer file for the wp-boilerplate.
 */
?>

<!-- End: #main -->
</div>
<footer class="page-footer font-small mdb-color pt-4">
<div class="container text-center text-md-left">
  <div class="row text-center text-md-left mt-3 pb-3">
    <div id="footer-brand" class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img id="logo" class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/inc/img/mygym-logo-63.png">
      </a>
    </div>
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
      <p><i class="fas fa-map-marker-alt mr-3"></i> 16-18 Guilder Ln, Salisbury, SP1 1HW</p>
      <p><i class="fas fa-envelope mr-3"></i> info@mygym-salisbury.co.uk</p>
      <p><i class="fas fa-phone mr-3"></i> 01722 502566</p>
    </div>
  </div>
</div>
<div class="footer-copyright">
  <div class="container">
    <div class="row footer-copyright d-flex align-items-center">
      <div class="col-md-7 col-lg-8">
        <p class="text-center text-md-left">©<?php echo date('Y'); ?> Copyright<strong> MyGym Salisbury</strong></p>
      </div>

      <div class="col-md-5 col-lg-4 ml-lg-0">
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.facebook.com/myGym.salisbury/">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.instagram.com/mygymsalisbury/">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.linkedin.com/organization-guest/company/mygym-health-&-fitness-limited">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</footer>
</div>
<!-- End: #main -->
<?php wp_footer(); ?>
</body>
</html>
