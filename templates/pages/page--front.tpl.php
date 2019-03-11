<!-- naviagatie stiky on top -->

<?php
/**
 * include van navigatie
 * ../partials/nav.inc.php gaat niet lukken
 * 
 * oplossing
 * include dirname(__FILE__) . '/../includes/nav.inc.php'
 * vanaf PHP 5.3 you can use __DIR__ in place of dirname(__FILE__)
 */

  include __DIR__ . '/partials/nav.inc.php';

// bcg_heade

  include __DIR__ . '/partials/header.inc.php';

// events
  include __DIR__ . '/partials/events.inc.php';


// zijbalk content en bottom content, dus alle inhoud

  include __DIR__ . '/partials/main-content.inc.php';
        
// end content_wrap -->
        
// deze zijbalk wordt altijd getoond -->
        
  include __DIR__ . '/partials/sidebar.inc.php';
?>
        <!-- end sidebar_left -->
    </div>
    <!-- end row -->
</div>
<!-- end container /container_wrap-->

<?php
  include __DIR__ . '/partials/footer.inc.php';
?>