<?php
/**
 * 
 */

?>

<div id="node-<?php print $node->nid; ?>" class="sponsor-node"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <div class="sponsor__content">

      <div class="sponsor__logo">
        <?php print render($content['field_sponsor_logo']); ?>
      </div>
      <div class="sponsor__url">
        <?php print render($content['field_url']); ?>
      </div>
      
    </div>
</div>
