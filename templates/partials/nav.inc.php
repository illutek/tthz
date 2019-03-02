<?php
 /**
  * 
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
        <li><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">Home</a></li>
        <li><a href="<?php print base_path() ?>tthz-contacteren">Contacteren</a></li>
        <li><a href="<?php print base_path() ?>#">Bestuur-Team</a></li>
        <li><a href="<?php print base_path() ?>#">Clubregelement</a></li>
        <li><a href="<?php print base_path() ?>fotoalbums">Fotoalbums</a></li>
      </ul>
    </div>
  </div>
</nav>