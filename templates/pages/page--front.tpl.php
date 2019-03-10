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
?>

<!-- zijbalk content en bottom content, dus alle inhoud -->
<div class="container container__wrap">
    <div class="row">
        <div id="content_wrap" class="col-md-9 col-md-push-3">

            <div class="content">
                <a id="main-content"></a>
                <?php print render($title_prefix); ?>
                <?php if ($title): ?>
                    <h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                <?php print render($title_suffix); ?>
                <?php if ($tabs): ?>
                    <div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links): ?>
                    <ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                <?php print render($page['content']); ?>
            </div>
            <!-- end content -->
           
        </div>
        <!-- end content_wrap -->
        
        <!-- deze zijbalk wordt altijd getoond -->
        <div id="sidebar_left" class="col-md-3 col-md-pull-9">
            <div id="inner_zijbalk_left">
                <?php print render($page['sidebar_left']); ?>
            </div>
        </div>
        <!-- end sidebar_left -->
    </div>
    <!-- end row -->
</div>
<!-- end container /container_wrap-->

<?php
  include __DIR__ . '/partials/footer.inc.php';
?>