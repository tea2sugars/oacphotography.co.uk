<?php
/**
 * @file
 * tm_boxed_content.default_picture_mapping.inc
 */

/**
 * Implements hook_default_picture_mapping().
 */
function tm_boxed_content_default_picture_mapping() {
  $export = array();

  $picture_mapping = new stdClass();
  $picture_mapping->disabled = FALSE; /* Edit this to true to make a default picture_mapping disabled initially */
  $picture_mapping->api_version = 1;
  $picture_mapping->machine_name = 'side_content';
  $picture_mapping->breakpoint_group = 'side_content';
  $picture_mapping->mapping = array(
    'custom.user.fluid' => array(
      '1x' => 'side_content_custom_user_fluid_1x',
      '1.5x' => 'side_content_custom_user_fluid_1_5x',
      '2x' => 'side_content_custom_user_fluid_2x',
    ),
    'custom.user.narrow' => array(
      '1x' => 'side_content_custom_user_narrow_1x',
      '1.5x' => 'side_content_custom_user_narrow_1_5x',
      '2x' => 'side_content_custom_user_narrow_2x',
    ),
    'custom.user.normal' => array(
      '1x' => 'side_content_custom_user_normal_1x',
    ),
    'custom.user.wide' => array(
      '1x' => 'side_content_custom_user_wide_1x',
    ),
  );
  $export['side_content'] = $picture_mapping;

  return $export;
}
