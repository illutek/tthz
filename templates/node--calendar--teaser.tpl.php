<?php

/**
 * @file
 * SCSS 03-regions/_calendar-block.scss
 * 
 * 
 */
?>
<div id="node-<?php print $node->nid; ?>" class="calendar__teaser"<?php print $attributes; ?>>

  <div class="calendar__title"><?php print $title; ?></div>

  <div class="calendar__date">
    <?php print render($content['field_calendar_date']); ?>
  </div>
  
  <div class="calendar__body"<?php print $content_attributes; ?>>
    <?php print render($content['body']); ?>
  </div>

</div>
