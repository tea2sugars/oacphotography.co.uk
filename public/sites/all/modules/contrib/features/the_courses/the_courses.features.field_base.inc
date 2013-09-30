<?php
/**
 * @file
 * the_courses.features.field_base.inc
 */

/**
 * Implements hook_field_default_field_bases().
 */
function the_courses_field_default_field_bases() {
  $field_bases = array();

  // Exported field_base: 'body'
  $field_bases['body'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(
      0 => 'node',
    ),
    'field_name' => 'body',
    'foreign keys' => array(
      'format' => array(
        'columns' => array(
          'format' => 'format',
        ),
        'table' => 'filter_format',
      ),
    ),
    'indexes' => array(
      'format' => array(
        0 => 'format',
      ),
    ),
    'locked' => 0,
    'module' => 'text',
    'settings' => array(),
    'translatable' => 0,
    'type' => 'text_with_summary',
  );

  // Exported field_base: 'field_course'
  $field_bases['field_course'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_course',
    'foreign keys' => array(
      'node' => array(
        'columns' => array(
          'target_id' => 'nid',
        ),
        'table' => 'node',
      ),
    ),
    'indexes' => array(
      'target_id' => array(
        0 => 'target_id',
      ),
    ),
    'locked' => 0,
    'module' => 'entityreference',
    'settings' => array(
      'handler' => 'base',
      'handler_settings' => array(
        'behaviors' => array(
          'views-select-list' => array(
            'status' => 0,
          ),
        ),
        'sort' => array(
          'type' => 'none',
        ),
        'target_bundles' => array(
          'course' => 'course',
        ),
      ),
      'target_type' => 'node',
    ),
    'translatable' => 0,
    'type' => 'entityreference',
  );

  // Exported field_base: 'field_course_images'
  $field_bases['field_course_images'] = array(
    'active' => 1,
    'cardinality' => -1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_course_images',
    'foreign keys' => array(
      'fid' => array(
        'columns' => array(
          'fid' => 'fid',
        ),
        'table' => 'file_managed',
      ),
    ),
    'indexes' => array(
      'fid' => array(
        0 => 'fid',
      ),
    ),
    'locked' => 0,
    'module' => 'image',
    'settings' => array(
      'default_image' => 0,
      'uri_scheme' => 'public',
    ),
    'translatable' => 0,
    'type' => 'image',
  );

  // Exported field_base: 'field_course_type'
  $field_bases['field_course_type'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_course_type',
    'foreign keys' => array(
      'tid' => array(
        'columns' => array(
          'tid' => 'tid',
        ),
        'table' => 'taxonomy_term_data',
      ),
    ),
    'indexes' => array(
      'tid' => array(
        0 => 'tid',
      ),
    ),
    'locked' => 0,
    'module' => 'taxonomy',
    'settings' => array(
      'allowed_values' => array(
        0 => array(
          'vocabulary' => 'course_type',
          'parent' => 0,
        ),
      ),
    ),
    'translatable' => 0,
    'type' => 'taxonomy_term_reference',
  );

  // Exported field_base: 'field_date'
  $field_bases['field_date'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_date',
    'foreign keys' => array(),
    'indexes' => array(),
    'locked' => 0,
    'module' => 'date',
    'settings' => array(
      'cache_count' => 4,
      'cache_enabled' => 0,
      'granularity' => array(
        'day' => 'day',
        'hour' => 0,
        'minute' => 0,
        'month' => 'month',
        'second' => 0,
        'year' => 'year',
      ),
      'timezone_db' => '',
      'todate' => 'optional',
      'tz_handling' => 'none',
    ),
    'translatable' => 0,
    'type' => 'datetime',
  );

  // Exported field_base: 'field_days'
  $field_bases['field_days'] = array(
    'active' => 1,
    'cardinality' => -1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_days',
    'foreign keys' => array(),
    'indexes' => array(
      'value' => array(
        0 => 'value',
      ),
    ),
    'locked' => 0,
    'module' => 'list',
    'settings' => array(
      'allowed_values' => array(
        'mon' => 'Monday',
        'tues' => 'Tuesday',
        'wed' => 'Wednesday',
        'thurs' => 'Thursday',
        'fri' => 'Friday',
        'sat' => 'Saturday',
        'sun' => 'Sunday',
      ),
      'allowed_values_function' => '',
    ),
    'translatable' => 0,
    'type' => 'list_text',
  );

  // Exported field_base: 'field_duration'
  $field_bases['field_duration'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_duration',
    'foreign keys' => array(),
    'indexes' => array(),
    'locked' => 0,
    'module' => 'number',
    'settings' => array(),
    'translatable' => 0,
    'type' => 'number_integer',
  );

  // Exported field_base: 'field_end_time'
  $field_bases['field_end_time'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_end_time',
    'foreign keys' => array(),
    'indexes' => array(
      'value' => array(
        0 => 'value',
      ),
    ),
    'locked' => 0,
    'module' => 'list',
    'settings' => array(
      'allowed_values' => array(
        '00:00' => '12:00 AM',
        '00:15' => '12:15 AM',
        '00:30' => '12:30 AM',
        '00:45' => '12:45 AM',
        '01:00' => '1:00 AM',
        '01:15' => '1:15 AM',
        '01:30' => '1:30 AM',
        '01:45' => '1:45 AM',
        '02:00' => '2:00 AM',
        '02:15' => '2:15 AM',
        '02:30' => '2:30 AM',
        '02:45' => '2:45 AM',
        '03:00' => '3:00 AM',
        '03:15' => '3:15 AM',
        '03:30' => '3:30 AM',
        '03:45' => '3:45 AM',
        '04:00' => '4:00 AM',
        '04:15' => '4:15 AM',
        '04:30' => '4:30 AM',
        '04:45' => '4:45 AM',
        '05:00' => '5:00 AM',
        '05:15' => '5:15 AM',
        '05:30' => '5:30 AM',
        '05:45' => '5:45 AM',
        '06:00' => '6:00 AM',
        '06:15' => '6:15 AM',
        '06:30' => '6:30 AM',
        '06:45' => '6:45 AM',
        '07:00' => '7:00 AM',
        '07:15' => '7:15 AM',
        '07:30' => '7:30 AM',
        '07:45' => '7:45 AM',
        '08:00' => '8:00 AM',
        '08:15' => '8:15 AM',
        '08:30' => '8:30 AM',
        '08:45' => '8:45 AM',
        '09:00' => '9:00 AM',
        '09:15' => '9:15 AM',
        '09:30' => '9:30 AM',
        '09:45' => '9:45 AM',
        '10:00' => '10:00 AM',
        '10:15' => '10:15 AM',
        '10:30' => '10:30 AM',
        '10:45' => '10:45 AM',
        '11:00' => '11:00 AM',
        '11:15' => '11:15 AM',
        '11:30' => '11:30 AM',
        '11:45' => '11:45 AM',
        '12:00' => '12:00 PM',
        '12:15' => '12:15 PM',
        '12:30' => '12:30 PM',
        '12:45' => '12:45 PM',
        '13:00' => '1:00 PM',
        '13:15' => '1:15 PM',
        '13:30' => '1:30 PM',
        '13:45' => '1:45 PM',
        '14:00' => '2:00 PM',
        '14:15' => '2:15 PM',
        '14:30' => '2:30 PM',
        '14:45' => '2:45 PM',
        '15:00' => '3:00 PM',
        '15:15' => '3:15 PM',
        '15:30' => '3:30 PM',
        '15:45' => '3:45 PM',
        '16:00' => '4:00 PM',
        '16:15' => '4:15 PM',
        '16:30' => '4:30 PM',
        '16:45' => '4:45 PM',
        '17:00' => '5:00 PM',
        '17:15' => '5:15 PM',
        '17:30' => '5:30 PM',
        '17:45' => '5:45 PM',
        '18:00' => '6:00 PM',
        '18:15' => '6:15 PM',
        '18:30' => '6:30 PM',
        '18:45' => '6:45 PM',
        '19:00' => '7:00 PM',
        '19:15' => '7:15 PM',
        '19:30' => '7:30 PM',
        '19:45' => '7:45 PM',
        '20:00' => '8:00 PM',
        '20:15' => '8:15 PM',
        '20:30' => '8:30 PM',
        '20:45' => '8:45 PM',
        '21:00' => '9:00 PM',
        '21:15' => '9:15 PM',
        '21:30' => '9:30 PM',
        '21:45' => '9:45 PM',
        '22:00' => '10:00 PM',
        '22:15' => '10:15 PM',
        '22:30' => '10:30 PM',
        '22:45' => '10:45 PM',
        '23:00' => '11:00 PM',
        '23:15' => '11:15 PM',
        '23:30' => '11:30 PM',
        '23:45' => '11:45 PM',
      ),
      'allowed_values_function' => '',
    ),
    'translatable' => 0,
    'type' => 'list_text',
  );

  // Exported field_base: 'field_level'
  $field_bases['field_level'] = array(
    'active' => 1,
    'cardinality' => -1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_level',
    'foreign keys' => array(
      'tid' => array(
        'columns' => array(
          'tid' => 'tid',
        ),
        'table' => 'taxonomy_term_data',
      ),
    ),
    'indexes' => array(
      'tid' => array(
        0 => 'tid',
      ),
    ),
    'locked' => 0,
    'module' => 'taxonomy',
    'settings' => array(
      'allowed_values' => array(
        0 => array(
          'vocabulary' => 'level',
          'parent' => 0,
        ),
      ),
    ),
    'translatable' => 0,
    'type' => 'taxonomy_term_reference',
  );

  // Exported field_base: 'field_logo'
  $field_bases['field_logo'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_logo',
    'foreign keys' => array(
      'fid' => array(
        'columns' => array(
          'fid' => 'fid',
        ),
        'table' => 'file_managed',
      ),
    ),
    'indexes' => array(
      'fid' => array(
        0 => 'fid',
      ),
    ),
    'locked' => 0,
    'module' => 'image',
    'settings' => array(
      'default_image' => 0,
      'uri_scheme' => 'public',
    ),
    'translatable' => 0,
    'type' => 'image',
  );

  // Exported field_base: 'field_materials'
  $field_bases['field_materials'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_materials',
    'foreign keys' => array(
      'format' => array(
        'columns' => array(
          'format' => 'format',
        ),
        'table' => 'filter_format',
      ),
    ),
    'indexes' => array(
      'format' => array(
        0 => 'format',
      ),
    ),
    'locked' => 0,
    'module' => 'text',
    'settings' => array(),
    'translatable' => 0,
    'type' => 'text_long',
  );

  // Exported field_base: 'field_qualifications_gained'
  $field_bases['field_qualifications_gained'] = array(
    'active' => 1,
    'cardinality' => -1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_qualifications_gained',
    'foreign keys' => array(
      'tid' => array(
        'columns' => array(
          'tid' => 'tid',
        ),
        'table' => 'taxonomy_term_data',
      ),
    ),
    'indexes' => array(
      'tid' => array(
        0 => 'tid',
      ),
    ),
    'locked' => 0,
    'module' => 'taxonomy',
    'settings' => array(
      'allowed_values' => array(
        0 => array(
          'vocabulary' => 'qualifications',
          'parent' => 0,
        ),
      ),
    ),
    'translatable' => 0,
    'type' => 'taxonomy_term_reference',
  );

  // Exported field_base: 'field_register'
  $field_bases['field_register'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_register',
    'foreign keys' => array(
      'registration_type' => array(
        'columns' => array(
          'registration_type' => 'name',
        ),
        'table' => 'registration_type',
      ),
    ),
    'indexes' => array(
      'registration_type' => array(
        0 => 'registration_type',
      ),
    ),
    'locked' => 0,
    'module' => 'registration',
    'settings' => array(),
    'translatable' => 0,
    'type' => 'registration',
  );

  // Exported field_base: 'field_schedules'
  $field_bases['field_schedules'] = array(
    'active' => 1,
    'cardinality' => -1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_schedules',
    'foreign keys' => array(
      'fid' => array(
        'columns' => array(
          'fid' => 'fid',
        ),
        'table' => 'file_managed',
      ),
    ),
    'indexes' => array(
      'fid' => array(
        0 => 'fid',
      ),
    ),
    'locked' => 0,
    'module' => 'file',
    'settings' => array(
      'display_default' => 0,
      'display_field' => 0,
      'uri_scheme' => 'public',
    ),
    'translatable' => 0,
    'type' => 'file',
  );

  // Exported field_base: 'field_short_course_'
  $field_bases['field_short_course_'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_short_course_',
    'foreign keys' => array(),
    'indexes' => array(
      'value' => array(
        0 => 'value',
      ),
    ),
    'locked' => 0,
    'module' => 'list',
    'settings' => array(
      'allowed_values' => array(
        0 => 0,
        1 => 1,
      ),
      'allowed_values_function' => '',
    ),
    'translatable' => 0,
    'type' => 'list_boolean',
  );

  // Exported field_base: 'field_skills_gained'
  $field_bases['field_skills_gained'] = array(
    'active' => 1,
    'cardinality' => -1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_skills_gained',
    'foreign keys' => array(
      'tid' => array(
        'columns' => array(
          'tid' => 'tid',
        ),
        'table' => 'taxonomy_term_data',
      ),
    ),
    'indexes' => array(
      'tid' => array(
        0 => 'tid',
      ),
    ),
    'locked' => 0,
    'module' => 'taxonomy',
    'settings' => array(
      'allowed_values' => array(
        0 => array(
          'vocabulary' => 'skills',
          'parent' => 0,
        ),
      ),
    ),
    'translatable' => 0,
    'type' => 'taxonomy_term_reference',
  );

  // Exported field_base: 'field_start_time'
  $field_bases['field_start_time'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_start_time',
    'foreign keys' => array(),
    'indexes' => array(
      'value' => array(
        0 => 'value',
      ),
    ),
    'locked' => 0,
    'module' => 'list',
    'settings' => array(
      'allowed_values' => array(
        '00:00' => '12:00 AM',
        '00:15' => '12:15 AM',
        '00:30' => '12:30 AM',
        '00:45' => '12:45 AM',
        '01:00' => '1:00 AM',
        '01:15' => '1:15 AM',
        '01:30' => '1:30 AM',
        '01:45' => '1:45 AM',
        '02:00' => '2:00 AM',
        '02:15' => '2:15 AM',
        '02:30' => '2:30 AM',
        '02:45' => '2:45 AM',
        '03:00' => '3:00 AM',
        '03:15' => '3:15 AM',
        '03:30' => '3:30 AM',
        '03:45' => '3:45 AM',
        '04:00' => '4:00 AM',
        '04:15' => '4:15 AM',
        '04:30' => '4:30 AM',
        '04:45' => '4:45 AM',
        '05:00' => '5:00 AM',
        '05:15' => '5:15 AM',
        '05:30' => '5:30 AM',
        '05:45' => '5:45 AM',
        '06:00' => '6:00 AM',
        '06:15' => '6:15 AM',
        '06:30' => '6:30 AM',
        '06:45' => '6:45 AM',
        '07:00' => '7:00 AM',
        '07:15' => '7:15 AM',
        '07:30' => '7:30 AM',
        '07:45' => '7:45 AM',
        '08:00' => '8:00 AM',
        '08:15' => '8:15 AM',
        '08:30' => '8:30 AM',
        '08:45' => '8:45 AM',
        '09:00' => '9:00 AM',
        '09:15' => '9:15 AM',
        '09:30' => '9:30 AM',
        '09:45' => '9:45 AM',
        '10:00' => '10:00 AM',
        '10:15' => '10:15 AM',
        '10:30' => '10:30 AM',
        '10:45' => '10:45 AM',
        '11:00' => '11:00 AM',
        '11:15' => '11:15 AM',
        '11:30' => '11:30 AM',
        '11:45' => '11:45 AM',
        '12:00' => '12:00 PM',
        '12:15' => '12:15 PM',
        '12:30' => '12:30 PM',
        '12:45' => '12:45 PM',
        '13:00' => '1:00 PM',
        '13:15' => '1:15 PM',
        '13:30' => '1:30 PM',
        '13:45' => '1:45 PM',
        '14:00' => '2:00 PM',
        '14:15' => '2:15 PM',
        '14:30' => '2:30 PM',
        '14:45' => '2:45 PM',
        '15:00' => '3:00 PM',
        '15:15' => '3:15 PM',
        '15:30' => '3:30 PM',
        '15:45' => '3:45 PM',
        '16:00' => '4:00 PM',
        '16:15' => '4:15 PM',
        '16:30' => '4:30 PM',
        '16:45' => '4:45 PM',
        '17:00' => '5:00 PM',
        '17:15' => '5:15 PM',
        '17:30' => '5:30 PM',
        '17:45' => '5:45 PM',
        '18:00' => '6:00 PM',
        '18:15' => '6:15 PM',
        '18:30' => '6:30 PM',
        '18:45' => '6:45 PM',
        '19:00' => '7:00 PM',
        '19:15' => '7:15 PM',
        '19:30' => '7:30 PM',
        '19:45' => '7:45 PM',
        '20:00' => '8:00 PM',
        '20:15' => '8:15 PM',
        '20:30' => '8:30 PM',
        '20:45' => '8:45 PM',
        '21:00' => '9:00 PM',
        '21:15' => '9:15 PM',
        '21:30' => '9:30 PM',
        '21:45' => '9:45 PM',
        '22:00' => '10:00 PM',
        '22:15' => '10:15 PM',
        '22:30' => '10:30 PM',
        '22:45' => '10:45 PM',
        '23:00' => '11:00 PM',
        '23:15' => '11:15 PM',
        '23:30' => '11:30 PM',
        '23:45' => '11:45 PM',
      ),
      'allowed_values_function' => '',
    ),
    'translatable' => 0,
    'type' => 'list_text',
  );

  // Exported field_base: 'field_subject'
  $field_bases['field_subject'] = array(
    'active' => 1,
    'cardinality' => -1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_subject',
    'foreign keys' => array(
      'tid' => array(
        'columns' => array(
          'tid' => 'tid',
        ),
        'table' => 'taxonomy_term_data',
      ),
    ),
    'indexes' => array(
      'tid' => array(
        0 => 'tid',
      ),
    ),
    'locked' => 0,
    'module' => 'taxonomy',
    'settings' => array(
      'allowed_values' => array(
        0 => array(
          'vocabulary' => 'subjects',
          'parent' => 0,
        ),
      ),
    ),
    'translatable' => 0,
    'type' => 'taxonomy_term_reference',
  );

  // Exported field_base: 'field_worksheets'
  $field_bases['field_worksheets'] = array(
    'active' => 1,
    'cardinality' => -1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_worksheets',
    'foreign keys' => array(
      'fid' => array(
        'columns' => array(
          'fid' => 'fid',
        ),
        'table' => 'file_managed',
      ),
    ),
    'indexes' => array(
      'fid' => array(
        0 => 'fid',
      ),
    ),
    'locked' => 0,
    'module' => 'file',
    'settings' => array(
      'display_default' => 0,
      'display_field' => 0,
      'uri_scheme' => 'public',
    ),
    'translatable' => 0,
    'type' => 'file',
  );

  // Exported field_base: 'field_your_full_name'
  $field_bases['field_your_full_name'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_your_full_name',
    'foreign keys' => array(
      'format' => array(
        'columns' => array(
          'format' => 'format',
        ),
        'table' => 'filter_format',
      ),
    ),
    'indexes' => array(
      'format' => array(
        0 => 'format',
      ),
    ),
    'locked' => 0,
    'module' => 'text',
    'settings' => array(
      'max_length' => 255,
      'profile2_private' => FALSE,
    ),
    'translatable' => 0,
    'type' => 'text',
  );

  return $field_bases;
}
