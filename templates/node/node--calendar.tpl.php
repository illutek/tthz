<?php
/**
 * @file
 * SCSS - 05-content/_node-calendar.scss
 *
 */
?>
<div id="node-<?php print $node->nid; ?>" class="calendar-node"<?php print $attributes; ?>>

  <div class="calendar-node__title">
    <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
  </div>

  <div class="calendar-node__date">
    <?php print render($content["field_calendar_date"]); ?>
  </div>

  <div class="calendar-node__body"<?php print $content_attributes; ?>>
    <?php print render($content["body"]); ?>
  </div>

</div>