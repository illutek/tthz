<?php
/**
 * 2019-01-25
 * 
 */

?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="leden-node">
        <h3><?php print $title; ?></h3>
        <?php print render($content['field_image']); ?>
    </div>
</div>
