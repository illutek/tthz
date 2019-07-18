<?php

/**
 * @file
 *
 * SCSS - 05-content/node-page.scss
 * Used the same css as node--page.tpl.php
 *
 */
?>
<div id="node-<?php print $node->nid; ?>" class="page-node"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="page-node__images">
  <?php print render($content['field_news_img']); ?>
  </div>

  <div class="page-node__body"<?php print $content_attributes; ?>>
    <?php print render($content['body']); ?>
  </div>

</div>
