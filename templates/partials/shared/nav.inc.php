<?php
 /**
  * SCSS - 03-regions/_nav.scss
  * <li class="navbar__item"><a href="<?php print base_path() ?>hoe-sponseren">Hoe sponseren</a></li>
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
        <li class="navbar-nav__item">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="navbar-nav__link">Home</a>
        </li>
        <li class="navbar-nav__item">
          <a href="<?php print base_path() ?>tthz-contacteren" class="navbar-nav__link">Contacteren</a>
        </li>
        <li class="navbar-nav__item">
          <a href="<?php print base_path() ?>bestuur" class="navbar-nav__link">Bestuur-Team</a>
        </li>
        <li class="navbar-nav__item">
          <a href="<?php print base_path() ?>reglement" class="navbar-nav__link">TTHZ-spirit</a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Bolderberg Koerse!
            <span class="caret"></span>
          </a>
            <ul class="dropdown-menu" role="menu">
              <li class="dropdown-menu__no-link">Toeristen</li>
              <li><a href="<?php print base_path() ?>evenement/save-date-24082019-bolderberg-koerse">Info</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-menu__no-link">Dorpelingen</li>
              <li><a href="<?php print base_path() ?>evenement/save-date-24082019-bolderberg-dorpelingen-koerse">Info</a></li>
              
            </ul>
        </li>
        <li class="navbar-nav__item">
          <a href="<?php print base_path() ?>tthz-kalender" class="navbar-nav__link">Kalender</a>
        </li>
        <li class="navbar-nav__item">
          <a href="<?php print base_path() ?>fotoalbums" class="navbar-nav__link">Fotoalbums</a>
        </li>

        <?php global $user;
          if ($user->uid != 0) { ?>
            <li class="navbar__item"><a href="<?php print base_path() ?>user/logout">Uitloggen</a></li>
          <?php } else { ?>
            <li class="navbar__item"><a href="<?php print base_path() ?>user">Leden</a></li>
          <?php } ?>
       
        
         

      </ul>
    </div>
  </div>
</nav>