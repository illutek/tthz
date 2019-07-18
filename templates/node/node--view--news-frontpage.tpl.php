<?php
/**
 * @file
 *
 * SCSS - 03-regions/_news.scss
 *
 */
?>
<a href="<?php print $node_url; ?>" class="news__teaser" <?php print $attributes; ?>>



  <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>

  <div class="content"<?php print $content_attributes; ?>>
    <?php print render($content['body']); ?>

    <div class="news__btn">Lees verder</div>
  </div>

</a>