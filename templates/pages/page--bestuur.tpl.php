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

// navigation
  include __DIR__ . '/partials/nav.inc.php';

// bcg_header
  include __DIR__ . '/partials/header.inc.php';
?>


<!-- zijbalk content en bottom content, dus alle inhoud -->
<div class="container container__wrap">
    <div class="row">
        <div id="content_wrap" class="col-md-12">

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
                <?php print $feed_icons; ?>
            </div>
            <!-- end content -->
           
        </div>
        <!-- end content_wrap -->

    </div>
    <!-- end row -->
</div>
<!-- end container /container_wrap-->

<?php
  include __DIR__ . '/partials/footer.inc.php';
?>