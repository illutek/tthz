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
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                       role="button" aria-expanded="false">
                        Het team
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php print base_path() ?>bestuur ">Het bestuur</a></li>
                        <li><a href="<?php print base_path() ?>leden">De leden</a></li>
                    </ul>
                </li>

                <li><a href="<?php print base_path() ?>interssante-linken">Linken</a></li>
                <li><a href="<?php print base_path() ?>tthz-contacteren">Contacteren</a></li>
                <li><a href="<?php print base_path() ?>gastenboek-berichten ">Gastenboek</a></li>
                <li><a href="<?php print base_path() ?>fotoalbums">Fotoalbums</a></li>
                
                <li><a href="<?php print base_path() ?>statuten">Statuten</a></li>
                <li><a href="<?php print base_path() ?>reglement">Reglement</a></li>
            </ul>
        
        </div>
        <!--/.navbar-collapse -->
    </div>
</nav>