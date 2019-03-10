<?php
/**
 * 2019-01-25
 * 
 */

?>

<div id="node-<?php print $node->nid; ?>" class="node-bestuur clearfix"<?php print $attributes; ?>>
    <div class="node-bestuur__wrap">

        <h3 class="node-bestuur__title"><?php print $title; ?></h3>

        <div class="node-bestuur__img">        
          <?php print render($content['field_image']); ?>
        </div>

        <div class="node-bestuur__description">
          <div class="description__wrap">
            <?php print render($content['field_functie']); ?>
            <?php print render($content['field_lid_adres']); ?>
            <?php print render($content['field_lid_gemeente']); ?>
            <?php print render($content['field_lid_telefoon']); ?>
            <?php print render($content['field_lid_email']); ?>
          </div>
        </div>
        
        
    </div>
</div>
