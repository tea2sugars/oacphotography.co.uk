<?php
/**
 * @file
 * core.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function core_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'view the administration theme'.
  $permissions['view the administration theme'] = array(
    'name' => 'view the administration theme',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'system',
  );

  return $permissions;
}
