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

?>



<!-- bcg_header -->
<?php
  include __DIR__ . '/partials/header.inc.php';
?>

<!-- events -->
<div class="events">
  <div class="container">
    <div class="row">
      <div class="events__grid">
        <?php print render($page['events']); ?>
      </div>
    </div>
  </div>
</div>

<!-- zijbalk content en bottom content, dus alle inhoud -->
<div class="container container_wrap">
    <div class="row">
        <div id="content_wrap" class="col-md-9 col-md-push-3">
            <?php if ($page['news_anoniem']): ?>
                <div id="news_anoniem">
                    <?php print render($page['news_anoniem']); ?>
                </div><!-- news_anoniem -->
            <?php endif; ?>
            <?php if ($page['news_leden']): ?>
                <div id="news_leden">
                    <?php print render($page['news_leden']); ?>
                </div><!-- news_anoniem -->
            <?php endif; ?>

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