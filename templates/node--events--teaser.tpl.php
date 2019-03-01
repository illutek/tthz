<?php

/**
 * @file
 *
 */
?>

<a href="<?php print $node_url; ?>" id="node-<?php print $node->nid; ?>" class="event__teaser"<?php print $attributes; ?>>

  <div class="event__teaser-wrap">

    <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
    
    <div class="content"<?php print $content_attributes; ?>>
      <?php print render($content['body']); ?>
    </div>

    <div class="btn">Lees verder</div>

  </div>

  
  </a>