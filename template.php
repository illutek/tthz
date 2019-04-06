<?php

/**
 * include external js files
 */

function tthz_preprocess_html(&$variables){
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

  /**
 * @param $variables
 */
function tthz_preprocess_button(&$variables)
{
  $variables['element']['#attributes']['class'] = array();
  $variables['element']['#attributes']['class'][] = 'btn';
  if (stristr($variables['element']['#value'], 'Indienen') !== FALSE) {
    $variables['element']['#attributes']['class'][] = 'btn--blue';
  }
  if (stristr($variables['element']['#value'], 'Verzenden') !== FALSE) {
    $variables['element']['#attributes']['class'][] = 'btn--blue';
  }
  if (stristr($variables['element']['#value'], 'Inloggen') !== FALSE) {
    $variables['element']['#attributes']['class'][] = 'btn--blue';
  }
  if (stristr($variables['element']['#value'], 'Nieuw wachtwoord aanvragen') !== FALSE) {
    $variables['element']['#attributes']['class'][] = 'btn--blue';
  }
  if (stristr($variables['element']['#value'], 'Opslaan') !== FALSE) {
    $variables['element']['#attributes']['class'][] = 'btn--blue';
  }
}


