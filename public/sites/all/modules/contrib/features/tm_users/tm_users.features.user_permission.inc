<?php
/**
 * @file
 * tm_users.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function tm_users_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'access user profiles'.
  $permissions['access user profiles'] = array(
    'name' => 'access user profiles',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'user',
  );

  // Exported permission: 'administer permissions'.
  $permissions['administer permissions'] = array(
    'name' => 'administer permissions',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'user',
  );

  // Exported permission: 'administer profile types'.
  $permissions['administer profile types'] = array(
    'name' => 'administer profile types',
    'roles' => array(),
    'module' => 'profile2',
  );

  // Exported permission: 'administer profiles'.
  $permissions['administer profiles'] = array(
    'name' => 'administer profiles',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'profile2',
  );

  // Exported permission: 'administer users'.
  $permissions['administer users'] = array(
    'name' => 'administer users',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'user',
  );

  // Exported permission: 'assign all roles'.
  $permissions['assign all roles'] = array(
    'name' => 'assign all roles',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'role_delegation',
  );

  // Exported permission: 'assign editor role'.
  $permissions['assign editor role'] = array(
    'name' => 'assign editor role',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'role_delegation',
  );

  // Exported permission: 'assign student (basic) role'.
  $permissions['assign student (basic) role'] = array(
    'name' => 'assign student (basic) role',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'role_delegation',
  );

  // Exported permission: 'assign student (completed) role'.
  $permissions['assign student (completed) role'] = array(
    'name' => 'assign student (completed) role',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'role_delegation',
  );

  // Exported permission: 'cancel account'.
  $permissions['cancel account'] = array(
    'name' => 'cancel account',
    'roles' => array(),
    'module' => 'user',
  );

  // Exported permission: 'change own username'.
  $permissions['change own username'] = array(
    'name' => 'change own username',
    'roles' => array(
      'administrator' => 'administrator',
      'authenticated user' => 'authenticated user',
      'editor' => 'editor',
    ),
    'module' => 'user',
  );

  // Exported permission: 'edit any additional_information profile'.
  $permissions['edit any additional_information profile'] = array(
    'name' => 'edit any additional_information profile',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'profile2',
  );

  // Exported permission: 'edit any car_travel profile'.
  $permissions['edit any car_travel profile'] = array(
    'name' => 'edit any car_travel profile',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'profile2',
  );

  // Exported permission: 'edit any health_form profile'.
  $permissions['edit any health_form profile'] = array(
    'name' => 'edit any health_form profile',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'profile2',
  );

  // Exported permission: 'edit any main profile'.
  $permissions['edit any main profile'] = array(
    'name' => 'edit any main profile',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'profile2',
  );

  // Exported permission: 'edit own additional_information profile'.
  $permissions['edit own additional_information profile'] = array(
    'name' => 'edit own additional_information profile',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
      'student (basic)' => 'student (basic)',
    ),
    'module' => 'profile2',
  );

  // Exported permission: 'edit own car_travel profile'.
  $permissions['edit own car_travel profile'] = array(
    'name' => 'edit own car_travel profile',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
      'student (basic)' => 'student (basic)',
    ),
    'module' => 'profile2',
  );

  // Exported permission: 'edit own health_form profile'.
  $permissions['edit own health_form profile'] = array(
    'name' => 'edit own health_form profile',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
      'student (basic)' => 'student (basic)',
    ),
    'module' => 'profile2',
  );

  // Exported permission: 'edit own main profile'.
  $permissions['edit own main profile'] = array(
    'name' => 'edit own main profile',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
      'student (basic)' => 'student (basic)',
    ),
    'module' => 'profile2',
  );

  // Exported permission: 'select account cancellation method'.
  $permissions['select account cancellation method'] = array(
    'name' => 'select account cancellation method',
    'roles' => array(),
    'module' => 'user',
  );

  // Exported permission: 'view any additional_information profile'.
  $permissions['view any additional_information profile'] = array(
    'name' => 'view any additional_information profile',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'profile2',
  );

  // Exported permission: 'view any car_travel profile'.
  $permissions['view any car_travel profile'] = array(
    'name' => 'view any car_travel profile',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'profile2',
  );

  // Exported permission: 'view any health_form profile'.
  $permissions['view any health_form profile'] = array(
    'name' => 'view any health_form profile',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'profile2',
  );

  // Exported permission: 'view any main profile'.
  $permissions['view any main profile'] = array(
    'name' => 'view any main profile',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'profile2',
  );

  // Exported permission: 'view own additional_information profile'.
  $permissions['view own additional_information profile'] = array(
    'name' => 'view own additional_information profile',
    'roles' => array(
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'profile2',
  );

  // Exported permission: 'view own car_travel profile'.
  $permissions['view own car_travel profile'] = array(
    'name' => 'view own car_travel profile',
    'roles' => array(
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'profile2',
  );

  // Exported permission: 'view own health_form profile'.
  $permissions['view own health_form profile'] = array(
    'name' => 'view own health_form profile',
    'roles' => array(
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'profile2',
  );

  // Exported permission: 'view own main profile'.
  $permissions['view own main profile'] = array(
    'name' => 'view own main profile',
    'roles' => array(
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'profile2',
  );

  return $permissions;
}
