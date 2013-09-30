<?php
/**
 * @file
 * tm_boxed_content.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function tm_boxed_content_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'create any boxed_content bean'.
  $permissions['create any boxed_content bean'] = array(
    'name' => 'create any boxed_content bean',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'bean',
  );

  // Exported permission: 'delete any boxed_content bean'.
  $permissions['delete any boxed_content bean'] = array(
    'name' => 'delete any boxed_content bean',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'bean',
  );

  // Exported permission: 'edit any boxed_content bean'.
  $permissions['edit any boxed_content bean'] = array(
    'name' => 'edit any boxed_content bean',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'bean',
  );

  // Exported permission: 'view any boxed_content bean'.
  $permissions['view any boxed_content bean'] = array(
    'name' => 'view any boxed_content bean',
    'roles' => array(
      'administrator' => 'administrator',
      'anonymous user' => 'anonymous user',
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'bean',
  );

  return $permissions;
}
