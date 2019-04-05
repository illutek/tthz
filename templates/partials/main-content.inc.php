<?php
 /**
 * 2019-03-11
 * main-content with sidebar
*/
?>

<div class="container container__wrap">
  <div class="row">
    <div id="content_wrap" class="col-sm-9 col-md-9 col-sm-push-3 col-md-push-3">

      <div class="content">
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1 class="title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>

        <?php if ($tabs): ?>
          <div class="tabs"><?php print render($tabs); ?></div>
        <?php endif; ?>

        <?php print render($page['help']); ?>

        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>

        <?php print render($page['content']); ?>
      </div>
      <!-- end content -->
           
    </div>