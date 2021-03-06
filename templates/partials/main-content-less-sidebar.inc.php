<?php
 /**
 * 2019-03-16
 * main content in the absence of sidebar
 *
*/
?>

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
