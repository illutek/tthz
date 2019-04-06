<?php
/**
 * include for navigation
 * ../partials/nav.inc.php won't work
 * 
 * solution
 * include dirname(__FILE__) . '/../includes/nav.inc.php'
 * from PHP 5.3 you can use __DIR__ in place of dirname(__FILE__)
 * include here the divs to be able to set up the difference at the page-user
 */

// navigation
  include __DIR__ . '/../partials/shared/nav.inc.php';

// bcg_header
  // include __DIR__ . '/../partials/shared/header.inc.php';

?>

<div class="container container__wrap">
  <div class="login">
<!-- // content in the absence of sidebar -->
    <div class="login__form">
      <?php include __DIR__ . '/../partials/main-content-less-sidebar.inc.php'; ?>
    </div>

    <div class="login__club-logo">
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print base_path() . path_to_theme(); ?>/images/logo-login.jpg" alt="tthz logo">
      </a>  
    </div>

  </div>
      <!-- end login -->

</div>
<!-- end container /container_wrap-->

<?php
// footer
  include __DIR__ . '/../partials/shared/footer.inc.php';
?>