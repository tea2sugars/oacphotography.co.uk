<?php
/**
 * @file
 * tm_boxed_content.ds.inc
 */

/**
 * Implements hook_ds_view_modes_info().
 */
function tm_boxed_content_ds_view_modes_info() {
  $export = array();

  $ds_view_mode = new stdClass();
  $ds_view_mode->api_version = 1;
  $ds_view_mode->view_mode = 'boxed_content_both';
  $ds_view_mode->label = 'Boxed Content: Both';
  $ds_view_mode->entities = array(
    'bean' => 'bean',
  );
  $export['boxed_content_both'] = $ds_view_mode;

  $ds_view_mode = new stdClass();
  $ds_view_mode->api_version = 1;
  $ds_view_mode->view_mode = 'boxed_content_image';
  $ds_view_mode->label = 'Boxed Content: Image';
  $ds_view_mode->entities = array(
    'bean' => 'bean',
  );
  $export['boxed_content_image'] = $ds_view_mode;

  $ds_view_mode = new stdClass();
  $ds_view_mode->api_version = 1;
  $ds_view_mode->view_mode = 'boxed_content_text';
  $ds_view_mode->label = 'Boxed Content: Text';
  $ds_view_mode->entities = array(
    'bean' => 'bean',
  );
  $export['boxed_content_text'] = $ds_view_mode;

  return $export;
}
