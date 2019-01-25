/**
 * Created by Stefan on 17/03/2015.
 */
(function($){
    $(document).ready(function(){
        var base = window.Drupal.settings.basePath + 'sites/all/themes/tthz/images/';
        $(".bcg_header").backstretch([
                base + 'tthz-bike01.jpg',
                base + 'tthz-bike02.jpg'],
            {fade: 750, duration: 4000});
    });
    }(jQuery))