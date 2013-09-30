<?php
/**
 * @file
 * the_courses.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function the_courses_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "boxes" && $api == "box") {
    return array("version" => "1");
  }
  if ($module == "context" && $api == "context") {
    return array("version" => "3");
  }
  if ($module == "ds" && $api == "ds") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function the_courses_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function the_courses_node_info() {
  $items = array(
    'course' => array(
      'name' => t('Course'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'course_variant' => array(
      'name' => t('Course Variant'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Variant ID'),
      'help' => '',
    ),
  );
  return $items;
}

/**
 * Implements hook_default_registration_state().
 */
function the_courses_default_registration_state() {
  $items = array();
  $items['alumni'] = entity_import('registration_state', '{
    "name" : "alumni",
    "label" : "Full Payment Received",
    "description" : "Full payment has been received and inserted into system",
    "default_state" : "0",
    "active" : "1",
    "show_on_form" : "1",
    "weight" : "-11"
  }');
  $items['canceled'] = entity_import('registration_state', '{
    "name" : "canceled",
    "label" : "Canceled",
    "description" : "Registration was cancelled",
    "default_state" : "0",
    "active" : "1",
    "show_on_form" : "1",
    "weight" : "-10"
  }');
  $items['complete'] = entity_import('registration_state', '{
    "name" : "complete",
    "label" : "Deposit Received",
    "description" : "Deposit has been received and inserted into system",
    "default_state" : "0",
    "active" : "1",
    "show_on_form" : "1",
    "weight" : "-12"
  }');
  $items['interested'] = entity_import('registration_state', '{
    "name" : "interested",
    "label" : "Awaiting Approval",
    "description" : "The initial registration request has been made",
    "default_state" : "1",
    "active" : "1",
    "show_on_form" : "1",
    "weight" : "-15"
  }');
  $items['pending'] = entity_import('registration_state', '{
    "name" : "pending",
    "label" : "Full Details Received",
    "description" : "The user has completed the full registration form",
    "default_state" : "0",
    "active" : "1",
    "show_on_form" : "1",
    "weight" : "-13"
  }');
  $items['temporarily_on_hold'] = entity_import('registration_state', '{
    "name" : "temporarily_on_hold",
    "label" : "Temporarily On Hold",
    "description" : "This registration has been put on hold for some reason or other",
    "default_state" : "0",
    "active" : "1",
    "show_on_form" : "1",
    "weight" : "-9"
  }');
  return $items;
}

/**
 * Implements hook_default_registration_type().
 */
function the_courses_default_registration_type() {
  $items = array();
  $items['course_basic'] = entity_import('registration_type', '{
    "name" : "course_basic",
    "label" : "Course: Basic",
    "locked" : "0",
    "weight" : "0",
    "data" : null
  }');
  return $items;
}
