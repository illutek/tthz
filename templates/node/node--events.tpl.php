<?php

/**
 * @file
 *
 * @ingroup themeable
 * 
 * $output = field_view_field('node', $node, 'field_event_date', array(
 *   'label' => 'hidden',
 * )); 
 *   print render ($output);
 * 
 * $eventDate = field_get_items('node', $node, 'field_event_date');
 * $date1 = date_create($eventDate[0]['value']);
 * $day1 = date_format($date1, 'jS');
 * $month1 = date_format($date1, 'F');
 * 
 * print $month1.' '.$day1;
 * 
 * http://www.tenten71.com/drupal-theme-from-scratch/advanced-drupal-7-theming-techniques.php
 * 
 */
?>
<div class="event-node"<?php print $attributes; ?>>

  <div class="event-node__title">
    <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
  </div>

  <div class="event-node__date">
    <?php print render($content['field_event_date']); ?>
    
  </div>
  
  <?php $field = field_get_items('node', $node, 'field_event_img'); ?>

  <?php if ($field) { ?>
    <div class="event-node__images">
      <?php print render($content['field_event_img']); ?>
    </div>
  <?php } ?>

  <div class="event-node__body"<?php print $content_attributes; ?>>
    <?php print render($content['body']); ?>
  </div>

  <div class="event-node__file">
    <?php print render($content['field_event_file']); ?>
  </div>

  <?php 
  // $eventDate = field_get_items('node', $node, 'field_event_date');
  // $date1 = date_create($eventDate[0]['value']);
  // $day1 = date_format($date1, 'd');
  // $wday1 = date_format($date1, 'l');
  // $month1 = date_format($date1, 'F');
  // $year = date_format($date1, 'Y');
  
  // print $wday1 . ' ' . $day1 . ' ' . $month1 . ' ' . $year . '<br>';

  // print date("d/m/y", time());

  ?>

</div>
