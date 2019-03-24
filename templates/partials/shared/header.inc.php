<?php 
/**
 * SCSS 03-regions/_header.scss
 * for the slider images now i used https://www.jquery-backstretch.com/
 * 
 * *A better alternative would be 
 * https://codepen.io/bradtraversy/pen/oVPBaa
 * 
 */
?>

<div class="bcg_header">
  <div class="container">
    <div class="row">
      <div class="logo">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <div class="logo__img">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>