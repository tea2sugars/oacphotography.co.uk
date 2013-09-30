<?php
/**
 * @file
 * the_courses.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function the_courses_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'administer CAPTCHA settings'.
  $permissions['administer CAPTCHA settings'] = array(
    'name' => 'administer CAPTCHA settings',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'captcha',
  );

  // Exported permission: 'administer course_basic registration'.
  $permissions['administer course_basic registration'] = array(
    'name' => 'administer course_basic registration',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'administer own course_basic registration'.
  $permissions['administer own course_basic registration'] = array(
    'name' => 'administer own course_basic registration',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'administer registration'.
  $permissions['administer registration'] = array(
    'name' => 'administer registration',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'administer registration states'.
  $permissions['administer registration states'] = array(
    'name' => 'administer registration states',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'administer registration types'.
  $permissions['administer registration types'] = array(
    'name' => 'administer registration types',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'create course_basic registration'.
  $permissions['create course_basic registration'] = array(
    'name' => 'create course_basic registration',
    'roles' => array(
      'anonymous user' => 'anonymous user',
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'create course_basic registration other anonymous'.
  $permissions['create course_basic registration other anonymous'] = array(
    'name' => 'create course_basic registration other anonymous',
    'roles' => array(
      'administrator' => 'administrator',
      'anonymous user' => 'anonymous user',
      'authenticated user' => 'authenticated user',
      'editor' => 'editor',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'create course_basic registration other users'.
  $permissions['create course_basic registration other users'] = array(
    'name' => 'create course_basic registration other users',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'delete any course_basic registration'.
  $permissions['delete any course_basic registration'] = array(
    'name' => 'delete any course_basic registration',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'delete own course_basic registration'.
  $permissions['delete own course_basic registration'] = array(
    'name' => 'delete own course_basic registration',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'edit course_basic registration state'.
  $permissions['edit course_basic registration state'] = array(
    'name' => 'edit course_basic registration state',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'skip CAPTCHA'.
  $permissions['skip CAPTCHA'] = array(
    'name' => 'skip CAPTCHA',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'captcha',
  );

  // Exported permission: 'update any course_basic registration'.
  $permissions['update any course_basic registration'] = array(
    'name' => 'update any course_basic registration',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'update own course_basic registration'.
  $permissions['update own course_basic registration'] = array(
    'name' => 'update own course_basic registration',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'view course_basic registration'.
  $permissions['view course_basic registration'] = array(
    'name' => 'view course_basic registration',
    'roles' => array(
      'administrator' => 'administrator',
      'editor' => 'editor',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'view own course_basic registration'.
  $permissions['view own course_basic registration'] = array(
    'name' => 'view own course_basic registration',
    'roles' => array(
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'registration',
  );

  return $permissions;
}
