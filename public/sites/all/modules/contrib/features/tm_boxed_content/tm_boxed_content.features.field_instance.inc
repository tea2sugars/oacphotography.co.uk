<?php
/**
 * @file
 * tm_boxed_content.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function tm_boxed_content_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance: 'bean-boxed_content-field_body'
  $field_instances['bean-boxed_content-field_body'] = array(
    'bundle' => 'boxed_content',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'boxed_content_both' => array(
        'label' => 'above',
        'module' => 'text',
        'settings' => array(),
        'type' => 'text_default',
        'weight' => 1,
      ),
      'boxed_content_image' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 2,
      ),
      'boxed_content_text' => array(
        'label' => 'above',
        'module' => 'text',
        'settings' => array(),
        'type' => 'text_default',
        'weight' => 1,
      ),
      'default' => array(
        'label' => 'above',
        'module' => 'text',
        'settings' => array(),
        'type' => 'text_default',
        'weight' => 1,
      ),
    ),
    'entity_type' => 'bean',
    'field_name' => 'field_body',
    'label' => 'Body',
    'required' => 0,
    'settings' => array(
      'text_processing' => 1,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'text',
      'settings' => array(
        'rows' => 5,
      ),
      'type' => 'text_textarea',
      'weight' => 3,
    ),
  );

  // Exported field_instance: 'bean-boxed_content-field_image'
  $field_instances['bean-boxed_content-field_image'] = array(
    'bundle' => 'boxed_content',
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'boxed_content_both' => array(
        'label' => 'above',
        'module' => 'picture',
        'settings' => array(
          'colorbox' => 'course_thumb',
          'fallback_image_style' => 'side_content_custom_user_fluid_1x',
          'image_link' => '',
          'picture_group' => 'side_content',
        ),
        'type' => 'picture',
        'weight' => 2,
      ),
      'boxed_content_image' => array(
        'label' => 'above',
        'module' => 'picture',
        'settings' => array(
          'colorbox' => 'course_thumb',
          'fallback_image_style' => 'content_custom_user_fluid_1x',
          'image_link' => '',
          'picture_group' => 'content',
        ),
        'type' => 'picture',
        'weight' => 0,
      ),
      'boxed_content_text' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 2,
      ),
      'default' => array(
        'label' => 'above',
        'module' => 'image',
        'settings' => array(
          'image_link' => '',
          'image_style' => '',
        ),
        'type' => 'image',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'bean',
    'field_name' => 'field_image',
    'label' => 'Image',
    'required' => 0,
    'settings' => array(
      'alt_field' => 0,
      'default_image' => 0,
      'file_directory' => '',
      'file_extensions' => 'png gif jpg jpeg',
      'max_filesize' => '',
      'max_resolution' => '',
      'min_resolution' => '',
      'title_field' => 0,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'image',
      'settings' => array(
        'insert' => 0,
        'insert_absolute' => 0,
        'insert_class' => '',
        'insert_default' => 'auto',
        'insert_picture_groups' => array(
          'colorbox' => 0,
          'content' => 0,
          'course_thumb' => 0,
        ),
        'insert_styles' => array(
          'auto' => 'auto',
          'colorbox__colorbox' => 0,
          'colorbox__colorbox_custom_user_fluid_1x' => 0,
          'colorbox__colorbox_custom_user_fluid_2x' => 0,
          'colorbox__colorbox_custom_user_narrow_1x' => 0,
          'colorbox__colorbox_custom_user_narrow_2x' => 0,
          'colorbox__colorbox_custom_user_normal_1x' => 0,
          'colorbox__colorbox_custom_user_wide_1x' => 0,
          'colorbox__content_custom_user_fluid_1_5x' => 0,
          'colorbox__content_custom_user_fluid_1x' => 0,
          'colorbox__content_custom_user_fluid_2x' => 0,
          'colorbox__content_custom_user_narrow_1_5x' => 0,
          'colorbox__content_custom_user_narrow_1x' => 0,
          'colorbox__content_custom_user_narrow_2x' => 0,
          'colorbox__content_custom_user_normal_1x' => 0,
          'colorbox__content_custom_user_wide_1x' => 0,
          'colorbox__course' => 0,
          'colorbox__course_thumb_custom_user_fluid_1x' => 0,
          'colorbox__course_thumb_custom_user_fluid_2x' => 0,
          'colorbox__course_thumb_custom_user_narrow_1x' => 0,
          'colorbox__course_thumb_custom_user_narrow_2x' => 0,
          'colorbox__course_thumb_custom_user_normal_1x' => 0,
          'colorbox__course_thumb_custom_user_wide_1x' => 0,
          'colorbox__epsacrop_thumb' => 0,
          'colorbox__large' => 0,
          'colorbox__medium' => 0,
          'colorbox__square_thumbnail' => 0,
          'colorbox__thumbnail' => 0,
          'colorbox__upsellx1' => 0,
          'colorbox__upsellx3' => 0,
          'icon_link' => 0,
          'image' => 0,
          'image_colorbox' => 0,
          'image_colorbox_custom_user_fluid_1x' => 0,
          'image_colorbox_custom_user_fluid_2x' => 0,
          'image_colorbox_custom_user_narrow_1x' => 0,
          'image_colorbox_custom_user_narrow_2x' => 0,
          'image_colorbox_custom_user_normal_1x' => 0,
          'image_colorbox_custom_user_wide_1x' => 0,
          'image_content_custom_user_fluid_1_5x' => 0,
          'image_content_custom_user_fluid_1x' => 0,
          'image_content_custom_user_fluid_2x' => 0,
          'image_content_custom_user_narrow_1_5x' => 0,
          'image_content_custom_user_narrow_1x' => 0,
          'image_content_custom_user_narrow_2x' => 0,
          'image_content_custom_user_normal_1x' => 0,
          'image_content_custom_user_wide_1x' => 0,
          'image_course' => 0,
          'image_course_thumb_custom_user_fluid_1x' => 0,
          'image_course_thumb_custom_user_fluid_2x' => 0,
          'image_course_thumb_custom_user_narrow_1x' => 0,
          'image_course_thumb_custom_user_narrow_2x' => 0,
          'image_course_thumb_custom_user_normal_1x' => 0,
          'image_course_thumb_custom_user_wide_1x' => 0,
          'image_epsacrop_thumb' => 0,
          'image_large' => 0,
          'image_medium' => 0,
          'image_square_thumbnail' => 0,
          'image_thumbnail' => 0,
          'image_upsellx1' => 0,
          'image_upsellx3' => 0,
          'link' => 0,
        ),
        'insert_width' => '',
        'preview_image_style' => 'thumbnail',
        'progress_indicator' => 'throbber',
      ),
      'type' => 'image_image',
      'weight' => 2,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Body');
  t('Image');

  return $field_instances;
}
