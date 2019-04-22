/**
 * Created by Stefan on 17/03/2015.
 */
(function($){
    $(document).ready(function(){
        var base = window.Drupal.settings.basePath + 'sites/all/themes/tthz/images/header/';
        $(".bcg_header").backstretch([
                base + 'tthz-001.jpg',
                base + 'tthz-002.jpg',
                base + 'tthz-004.jpg',
                base + 'cycling-race.jpg',
                base + 'groot_100702-wielrenners-min.jpg'],
            {fade: 750, duration: 4000});
    });
    }(jQuery))