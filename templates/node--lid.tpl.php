<?php
/**
 * 2019-01-25
 * 
 */

?>

<div id="node-<?php print $node->nid; ?>" class="node-bestuur clearfix"<?php print $attributes; ?>>
    <div class="leden-node">
        <h3><?php print $title; ?></h3>
        <div class="bestuur__img col-xs-5">
        
          <?php print render($content['field_image']); ?>
        </div>
        <div class="bestuur__description col-xs-7">
          <?php print render($content['field_functie']); ?>
          <?php print render($content['field_lid_adres']); ?>
          <?php print render($content['field_lid_gemeente']); ?>
          <?php print render($content['field_lid_telefoon']); ?>
          <?php print render($content['field_lid_email']); ?>
        </div>
        
        
    </div>
</div>
