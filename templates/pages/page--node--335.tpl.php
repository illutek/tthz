<?php
/**
 * include for navigation
 * ../partials/nav.inc.php won't work
 * 
 * solution
 * include dirname(__FILE__) . '/../includes/nav.inc.php'
 * from PHP 5.3 you can use __DIR__ in place of dirname(__FILE__)
 * 
 * Fotoalbum page, this to create a message for non logged in members
 * 
 * SCSS - 05-content/_photo-album.scss
 */

// navigation
  include __DIR__ . '/../partials/shared/nav.inc.php';

// bcg_header
  include __DIR__ . '/../partials/shared/header.inc.php';

// !main-content on include here because of the message for anonymous visitors
?>
<div class="container container__wrap">
<div class="row">
  <div id="content_wrap" class="col-sm-9 col-md-9 col-sm-push-3 col-md-push-3">

    <div class="content">
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($tabs): ?>
        <div class="tabs"><?php print render($tabs); ?></div>
      <?php endif; ?>

      <?php print render($page['help']); ?>

      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>

      <div>
        <?php print render($page['extern_photos']); ?>
      </div>      

      <?php print render($page['content']); ?>
      
      <?php 
      /**
       * ! This message only on the Photo album page
       */

      global $user;
      if ($user->uid != 0) { ?>
        <div></div>
      <?php } else { ?>
        <div class="albums__msg">
          <?php print t('Foto albums enkel zichtbaar voor ingelogde leden'); ?>
        </div> 
      <?php } ?>
      
    </div>
    <!-- end content -->
         
  </div>
<?php
// sidebar 
  include __DIR__ . '/../partials/sidebar.inc.php';
?>

  </div>
  <!-- end row -->
</div>
<!-- end container /container_wrap-->



<?php
// footer
  include __DIR__ . '/../partials/shared/footer.inc.php';
?>