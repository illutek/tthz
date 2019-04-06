<?php

/**
 * @file
 *
 */
?>
<div id="node-<?php print $node->nid; ?>" class="albums__teaser"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="content photo-album"<?php print $content_attributes; ?>>
    <?php print render($content['field_image'][0]); ?>
  </div>


</div>
