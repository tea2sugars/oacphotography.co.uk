<?php
/**
 * @file
 * tm_boxed_content.bean.inc
 */

/**
 * Implements hook_bean_admin_ui_types().
 */
function tm_boxed_content_bean_admin_ui_types() {
  $export = array();

  $bean_type = new stdClass();
  $bean_type->disabled = FALSE; /* Edit this to true to make a default bean_type disabled initially */
  $bean_type->api_version = 5;
  $bean_type->name = 'boxed_content';
  $bean_type->label = 'Boxed Content';
  $bean_type->options = '';
  $bean_type->description = 'A Bean to add content to a page in a specific boxed style';
  $export['boxed_content'] = $bean_type;

  return $export;
}
