<?php
/**
 * @file
 *
 * SCSS - 03-regions/_events.scss
 *
 */
?>

<a href="<?php print $node_url; ?>" id="node-<?php print $node->nid; ?>" class="event__teaser"<?php print $attributes; ?>>

  <div class="event__teaser-wrap">

    <h2 <?php print $title_attributes; ?>><?php print $title; ?></h2>

    <div class="content event__body"<?php print $content_attributes; ?>>
      <?php print render($content['body']); ?>
    </div>

    <div class="event__btn btn">Lees verder</div>

  </div>

</a>