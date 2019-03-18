<?php
/**
 * include for navigation
 * ../partials/nav.inc.php won't work
 * 
 * solution
 * include dirname(__FILE__) . '/../includes/nav.inc.php'
 * from PHP 5.3 you can use __DIR__ in place of dirname(__FILE__)
 */

// navigation
  include __DIR__ . '/../partials/shared/nav.inc.php';

// bcg_header
  include __DIR__ . '/../partials/shared/header.inc.php';

// main-content
  include __DIR__ . '/../partials/main-content.inc.php';
      
// sidebar 
  include __DIR__ . '/../partials/sidebar.inc.php';
?>

  </div>
  <!-- end row -->
</div>
<!-- end container /container_wrap-->

<?php
// footer
  include __DIR__ . '/../partials/shared/footer.inc.php';
?>