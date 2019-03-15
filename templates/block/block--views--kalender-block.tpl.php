<?php
/**
 * @file
 *
 * SCSS - 03-regions/_calendar-block.scss
 *
 */
?>
<div id="<?php print $block_html_id; ?>" class="calendar-block"<?php print $attributes; ?>>

  <h2<?php print $title_attributes; ?>><?php print $block->subject ?></h2>

  <div class="calendar-block__content"<?php print $content_attributes; ?>>
    <?php print $content ?>
  </div>

  <a href="<?php print base_path() ?>tthz-kalender" class="btn btn--green calendar-block__read-more">
    <?php print ("Meer"); ?>
  </a>

</div>
