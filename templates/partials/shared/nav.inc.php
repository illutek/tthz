<?php
 /**
  * SCSS - 03-regions/_nav.scss
  *
  */
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="navbar__item"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">Home</a></li>
        <li class="navbar__item"><a href="<?php print base_path() ?>tthz-contacteren">Contacteren</a></li>
        <li class="navbar__item"><a href="<?php print base_path() ?>bestuur">Bestuur-Team</a></li>
        <li class="navbar__item"><a href="<?php print base_path() ?>reglement">Clubregelement</a></li>
        <li class="navbar__item"><a href="<?php print base_path() ?>hoe-sponseren">Hoe sponseren</a></li>
        <li class="navbar__item"><a href="<?php print base_path() ?>fotoalbums">Fotoalbums</a></li>

        <?php global $user;
          if ($user->uid != 0) { ?>
            <li class="navbar__item"><a href="<?php print base_path() ?>user/logout">Uitloggen</a></li>
          <?php } else { ?>
            <li class="navbar__item"><a href="<?php print base_path() ?>user">Inloggen</a></li>
          <?php } ?>
       
        
         

      </ul>
    </div>
  </div>
</nav>