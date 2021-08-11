<?php

/**
 * @file
 * Theme settings form for Oscar theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function oscar_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['oscar'] = [
    '#type' => 'details',
    '#title' => t('Oscar'),
    '#open' => TRUE,
  ];

  $form['oscar']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size'),
    '#min' => 12,
    '#max' => 18,
    '#default_value' => theme_get_setting('font_size'),
  ];

}
