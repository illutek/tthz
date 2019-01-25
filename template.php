<?php

/**
 * include external js files
 */

function tthz_preprocess_html(&$variables){
    // drupal_add_js('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', 'external');
    drupal_add_js('https://code.jquery.com/jquery-migrate-1.2.1.min.js', 'external');
}

/**
 * That will let you use a template file like: node--[type|nodeid]--teaser.tpl.php
 */
function tthz_preprocess_node(&$vars) {
    if($vars['view_mode'] == 'teaser') {
      $vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->type . '__teaser';   
      $vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->nid . '__teaser';
    }
  }