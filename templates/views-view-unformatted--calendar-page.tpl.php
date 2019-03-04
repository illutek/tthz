<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 * 
 * SCSS - 05-content/_node-calendar.scss
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div class="calendar-node__unformatted">
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
