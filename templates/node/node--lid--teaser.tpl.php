<?php
/**
 * 2019-01-25
 * <h3><?php print $title; ?></h3>
 * SCSS - 05-content/_node-team.scss
 */

?>

<div id="node-<?php print $node->nid; ?>" class="node-lid"<?php print $attributes; ?>>
    <div class="node-lid__image">        
        <?php print render($content['field_image']); ?>
    </div>
</div>
