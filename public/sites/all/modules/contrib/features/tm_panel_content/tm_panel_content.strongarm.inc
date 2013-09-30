<?php
/**
 * @file
 * tm_panel_content.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function tm_panel_content_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'picture_ckeditor_groups';
  $strongarm->value = array(
    'content' => array(
      'enabled' => 1,
      'weight' => '1',
      'fallback' => 'content_custom_user_fluid_1x',
    ),
    'colorbox' => array(
      'enabled' => 0,
      'weight' => '1',
      'fallback' => 'thumbnail',
    ),
    'course_thumb' => array(
      'enabled' => 0,
      'weight' => '1',
      'fallback' => 'thumbnail',
    ),
  );
  $export['picture_ckeditor_groups'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'picture_ckeditor_label';
  $strongarm->value = 'Image size (required)';
  $export['picture_ckeditor_label'] = $strongarm;

  return $export;
}
