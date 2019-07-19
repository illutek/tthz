<?php
/**
 * @file
 *
 * SCSS - 03-regions/_news.scss
 *
 */
?>
<div href="<?php print $node_url; ?>" class="news__teaser" <?php print $attributes; ?>>

  <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>

  <div class="content"<?php print $content_attributes; ?>>
    <?php print render($content['body']); ?>

    <div class="news__btn"><a href="<?php print $node_url; ?>">Lees verder</a></div>
  </div>

</div>