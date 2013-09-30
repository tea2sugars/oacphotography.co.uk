<?php
/**
 * @file
 * tm_users.features.inc
 */

/**
 * Implements hook_default_profile2_type().
 */
function tm_users_default_profile2_type() {
  $items = array();
  $items['additional_information'] = entity_import('profile2_type', '{
    "userCategory" : false,
    "userView" : false,
    "type" : "additional_information",
    "label" : "Additional Information",
    "weight" : "4",
    "data" : { "registration" : 0, "use_page" : 1 }
  }');
  $items['car_travel'] = entity_import('profile2_type', '{
    "userCategory" : false,
    "userView" : false,
    "type" : "car_travel",
    "label" : "Car Travel",
    "weight" : "2",
    "data" : { "registration" : 0, "use_page" : 1 }
  }');
  $items['health_form'] = entity_import('profile2_type', '{
    "userCategory" : false,
    "userView" : false,
    "type" : "health_form",
    "label" : "Health Form",
    "weight" : "3",
    "data" : { "registration" : 0, "use_page" : 1 }
  }');
  $items['main'] = entity_import('profile2_type', '{
    "userCategory" : false,
    "userView" : false,
    "type" : "main",
    "label" : "Further Information",
    "weight" : "1",
    "data" : { "registration" : 0, "use_page" : 1 }
  }');
  return $items;
}
