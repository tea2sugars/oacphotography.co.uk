<?php
/**
 * @file
 * the_courses.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function the_courses_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'courses';
  $context->description = '';
  $context->tag = 'courses';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'our-courses/course-detail/*' => 'our-courses/course-detail/*',
        '~our-courses/course-detail/*/*' => '~our-courses/course-detail/*/*',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'panels_mini-course_detail' => array(
          'module' => 'panels_mini',
          'delta' => 'course_detail',
          'region' => 'content',
          'weight' => '-10',
        ),
      ),
    ),
  );
  $context->condition_mode = 1;

  // Translatables
  // Included for use with string extractors like potx.
  t('courses');
  $export['courses'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'variant';
  $context->description = '';
  $context->tag = 'courses';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'our-courses/course-detail/*/*' => 'our-courses/course-detail/*/*',
        '~our-courses/course-detail/*/*/*' => '~our-courses/course-detail/*/*/*',
      ),
    ),
  );
  $context->reactions = array();
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('courses');
  $export['variant'] = $context;

  return $export;
}
