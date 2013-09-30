<?php
/**
 * @file
 * the_courses.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function the_courses_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'administration_registrations';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'registration';
  $view->human_name = 'Administration: Registrations';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Administration: Registrations (email)';
  $handler->display->display_options['use_ajax'] = TRUE;
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'role';
  $handler->display->display_options['access']['role'] = array(
    3 => '3',
    4 => '4',
  );
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'registration_id' => 'registration_id',
    'author' => 'author',
    'user_uid' => 'user_uid',
    'title' => 'title',
    'state' => 'state',
  );
  $handler->display->display_options['style_options']['default'] = 'registration_id';
  $handler->display->display_options['style_options']['info'] = array(
    'registration_id' => array(
      'sortable' => 1,
      'default_sort_order' => 'desc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'author' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'user_uid' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'title' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'state' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  /* Relationship: Registration: Registration to Node */
  $handler->display->display_options['relationships']['registration_related_node']['id'] = 'registration_related_node';
  $handler->display->display_options['relationships']['registration_related_node']['table'] = 'registration';
  $handler->display->display_options['relationships']['registration_related_node']['field'] = 'registration_related_node';
  /* Relationship: Registration: User */
  $handler->display->display_options['relationships']['user_uid']['id'] = 'user_uid';
  $handler->display->display_options['relationships']['user_uid']['table'] = 'registration';
  $handler->display->display_options['relationships']['user_uid']['field'] = 'user_uid';
  $handler->display->display_options['relationships']['user_uid']['label'] = 'User registered';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['relationship'] = 'registration_related_node';
  $handler->display->display_options['fields']['title']['label'] = 'Course Title';
  /* Field: Registration: Registration ID */
  $handler->display->display_options['fields']['registration_id']['id'] = 'registration_id';
  $handler->display->display_options['fields']['registration_id']['table'] = 'registration';
  $handler->display->display_options['fields']['registration_id']['field'] = 'registration_id';
  /* Field: Registration: State entity */
  $handler->display->display_options['fields']['state']['id'] = 'state';
  $handler->display->display_options['fields']['state']['table'] = 'registration';
  $handler->display->display_options['fields']['state']['field'] = 'state';
  /* Field: User: E-mail */
  $handler->display->display_options['fields']['mail']['id'] = 'mail';
  $handler->display->display_options['fields']['mail']['table'] = 'users';
  $handler->display->display_options['fields']['mail']['field'] = 'mail';
  $handler->display->display_options['fields']['mail']['relationship'] = 'author';
  $handler->display->display_options['fields']['mail']['label'] = 'Registration Creator';
  /* Field: User: E-mail */
  $handler->display->display_options['fields']['mail_1']['id'] = 'mail_1';
  $handler->display->display_options['fields']['mail_1']['table'] = 'users';
  $handler->display->display_options['fields']['mail_1']['field'] = 'mail';
  $handler->display->display_options['fields']['mail_1']['relationship'] = 'user_uid';
  $handler->display->display_options['fields']['mail_1']['label'] = 'Registration Subject';
  /* Field: Bulk operations: User */
  $handler->display->display_options['fields']['views_bulk_operations']['id'] = 'views_bulk_operations';
  $handler->display->display_options['fields']['views_bulk_operations']['table'] = 'users';
  $handler->display->display_options['fields']['views_bulk_operations']['field'] = 'views_bulk_operations';
  $handler->display->display_options['fields']['views_bulk_operations']['relationship'] = 'author';
  $handler->display->display_options['fields']['views_bulk_operations']['label'] = 'User Operations';
  $handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['display_type'] = '0';
  $handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['enable_select_all_pages'] = 1;
  $handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['force_single'] = 0;
  $handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['entity_load_capacity'] = '10';
  $handler->display->display_options['fields']['views_bulk_operations']['vbo_operations'] = array(
    'action::user_block_user_action' => array(
      'selected' => 0,
      'postpone_processing' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
    ),
    'action::views_bulk_operations_delete_item' => array(
      'selected' => 0,
      'postpone_processing' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
    ),
    'action::views_bulk_operations_script_action' => array(
      'selected' => 0,
      'postpone_processing' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
    ),
    'action::views_bulk_operations_modify_action' => array(
      'selected' => 0,
      'postpone_processing' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
      'settings' => array(
        'show_all_tokens' => 1,
        'display_values' => array(
          'status' => 'status',
        ),
      ),
    ),
    'action::views_bulk_operations_user_roles_action' => array(
      'selected' => 0,
      'postpone_processing' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
    ),
    'action::views_bulk_operations_argument_selector_action' => array(
      'selected' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
      'settings' => array(
        'url' => '',
      ),
    ),
    'action::system_send_email_action' => array(
      'selected' => 1,
      'postpone_processing' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
    ),
    'action::pathauto_user_update_action' => array(
      'selected' => 0,
      'postpone_processing' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
    ),
  );
  /* Filter criterion: Content: Title */
  $handler->display->display_options['filters']['title']['id'] = 'title';
  $handler->display->display_options['filters']['title']['table'] = 'node';
  $handler->display->display_options['filters']['title']['field'] = 'title';
  $handler->display->display_options['filters']['title']['relationship'] = 'registration_related_node';
  $handler->display->display_options['filters']['title']['group'] = 1;
  $handler->display->display_options['filters']['title']['exposed'] = TRUE;
  $handler->display->display_options['filters']['title']['expose']['operator_id'] = 'title_op';
  $handler->display->display_options['filters']['title']['expose']['label'] = 'Title';
  $handler->display->display_options['filters']['title']['expose']['operator'] = 'title_op';
  $handler->display->display_options['filters']['title']['expose']['identifier'] = 'title';
  $handler->display->display_options['filters']['title']['expose']['remember'] = TRUE;
  $handler->display->display_options['filters']['title']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
    4 => 0,
  );
  $handler->display->display_options['filters']['title']['group_info']['label'] = 'Title';
  $handler->display->display_options['filters']['title']['group_info']['identifier'] = 'title';
  $handler->display->display_options['filters']['title']['group_info']['remember'] = FALSE;
  $handler->display->display_options['filters']['title']['group_info']['group_items'] = array(
    1 => array(),
    2 => array(),
    3 => array(),
  );

  /* Display: Bulk Email */
  $handler = $view->new_display('page', 'Bulk Email', 'page');
  $handler->display->display_options['enabled'] = FALSE;
  $handler->display->display_options['path'] = 'admin/content/tantemarie/registrations-email';
  $handler->display->display_options['menu']['type'] = 'normal';
  $handler->display->display_options['menu']['title'] = 'Administration: Registrations (email)';
  $handler->display->display_options['menu']['weight'] = '0';
  $handler->display->display_options['menu']['name'] = 'management';
  $handler->display->display_options['menu']['context'] = 0;
  $handler->display->display_options['menu']['context_only_inline'] = 0;

  /* Display: Export Registrants */
  $handler = $view->new_display('page', 'Export Registrants', 'page_1');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Administration: Registrations (export)';
  $handler->display->display_options['enabled'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['relationship'] = 'registration_related_node';
  $handler->display->display_options['fields']['title']['label'] = 'Course Title';
  /* Field: Registration: Registration ID */
  $handler->display->display_options['fields']['registration_id']['id'] = 'registration_id';
  $handler->display->display_options['fields']['registration_id']['table'] = 'registration';
  $handler->display->display_options['fields']['registration_id']['field'] = 'registration_id';
  /* Field: Registration: State entity */
  $handler->display->display_options['fields']['state']['id'] = 'state';
  $handler->display->display_options['fields']['state']['table'] = 'registration';
  $handler->display->display_options['fields']['state']['field'] = 'state';
  /* Field: User: E-mail */
  $handler->display->display_options['fields']['mail']['id'] = 'mail';
  $handler->display->display_options['fields']['mail']['table'] = 'users';
  $handler->display->display_options['fields']['mail']['field'] = 'mail';
  $handler->display->display_options['fields']['mail']['relationship'] = 'author';
  $handler->display->display_options['fields']['mail']['label'] = 'Registration Creator';
  /* Field: User: E-mail */
  $handler->display->display_options['fields']['mail_1']['id'] = 'mail_1';
  $handler->display->display_options['fields']['mail_1']['table'] = 'users';
  $handler->display->display_options['fields']['mail_1']['field'] = 'mail';
  $handler->display->display_options['fields']['mail_1']['relationship'] = 'user_uid';
  $handler->display->display_options['fields']['mail_1']['label'] = 'Registration Subject';
  $handler->display->display_options['path'] = 'admin/content/tantemarie/registrations-export';
  $handler->display->display_options['menu']['type'] = 'normal';
  $handler->display->display_options['menu']['title'] = 'Administration: Registrations (export)';
  $handler->display->display_options['menu']['weight'] = '0';
  $handler->display->display_options['menu']['name'] = 'management';
  $handler->display->display_options['menu']['context'] = 0;
  $handler->display->display_options['menu']['context_only_inline'] = 0;

  /* Display: Data export */
  $handler = $view->new_display('views_data_export', 'Data export', 'views_data_export_1');
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['style_plugin'] = 'views_data_export_csv';
  $handler->display->display_options['style_options']['attach_text'] = 'registrants';
  $handler->display->display_options['style_options']['provide_file'] = 0;
  $handler->display->display_options['style_options']['parent_sort'] = 0;
  $handler->display->display_options['style_options']['quote'] = 1;
  $handler->display->display_options['style_options']['trim'] = 0;
  $handler->display->display_options['style_options']['replace_newlines'] = 0;
  $handler->display->display_options['style_options']['header'] = 1;
  $handler->display->display_options['path'] = 'admin/content/tantemarie/export.csv';
  $handler->display->display_options['displays'] = array(
    'page_1' => 'page_1',
    'default' => 0,
    'page' => 0,
    'page_2' => 0,
  );

  /* Display: Page 2 */
  $handler = $view->new_display('page', 'Page 2', 'page_2');
  $handler->display->display_options['enabled'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['relationship'] = 'registration_related_node';
  $handler->display->display_options['fields']['title']['label'] = 'Course Title';
  /* Field: Registration: Registration ID */
  $handler->display->display_options['fields']['registration_id']['id'] = 'registration_id';
  $handler->display->display_options['fields']['registration_id']['table'] = 'registration';
  $handler->display->display_options['fields']['registration_id']['field'] = 'registration_id';
  /* Field: Registration: State entity */
  $handler->display->display_options['fields']['state']['id'] = 'state';
  $handler->display->display_options['fields']['state']['table'] = 'registration';
  $handler->display->display_options['fields']['state']['field'] = 'state';
  /* Field: User: E-mail */
  $handler->display->display_options['fields']['mail_1']['id'] = 'mail_1';
  $handler->display->display_options['fields']['mail_1']['table'] = 'users';
  $handler->display->display_options['fields']['mail_1']['field'] = 'mail';
  $handler->display->display_options['fields']['mail_1']['relationship'] = 'user_uid';
  $handler->display->display_options['fields']['mail_1']['label'] = 'Registration Subject';
  /* Field: Registration: Edit link */
  $handler->display->display_options['fields']['edit_registration']['id'] = 'edit_registration';
  $handler->display->display_options['fields']['edit_registration']['table'] = 'registration';
  $handler->display->display_options['fields']['edit_registration']['field'] = 'edit_registration';
  $handler->display->display_options['fields']['edit_registration']['label'] = '';
  $handler->display->display_options['fields']['edit_registration']['element_label_colon'] = FALSE;
  /* Field: Bulk operations: Registration */
  $handler->display->display_options['fields']['views_bulk_operations']['id'] = 'views_bulk_operations';
  $handler->display->display_options['fields']['views_bulk_operations']['table'] = 'registration';
  $handler->display->display_options['fields']['views_bulk_operations']['field'] = 'views_bulk_operations';
  $handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['display_type'] = '0';
  $handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['enable_select_all_pages'] = 1;
  $handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['force_single'] = 0;
  $handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['entity_load_capacity'] = '10';
  $handler->display->display_options['fields']['views_bulk_operations']['vbo_operations'] = array(
    'action::views_bulk_operations_delete_item' => array(
      'selected' => 0,
      'postpone_processing' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
    ),
    'action::views_bulk_operations_script_action' => array(
      'selected' => 0,
      'postpone_processing' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
    ),
    'action::views_bulk_operations_modify_action' => array(
      'selected' => 0,
      'postpone_processing' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
      'settings' => array(
        'show_all_tokens' => 1,
        'display_values' => array(
          '_all_' => '_all_',
        ),
      ),
    ),
    'action::views_bulk_operations_argument_selector_action' => array(
      'selected' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
      'settings' => array(
        'url' => '',
      ),
    ),
    'action::system_send_email_action' => array(
      'selected' => 1,
      'postpone_processing' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
    ),
  );
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Registration: Registration ID */
  $handler->display->display_options['filters']['registration_id']['id'] = 'registration_id';
  $handler->display->display_options['filters']['registration_id']['table'] = 'registration';
  $handler->display->display_options['filters']['registration_id']['field'] = 'registration_id';
  $handler->display->display_options['filters']['registration_id']['exposed'] = TRUE;
  $handler->display->display_options['filters']['registration_id']['expose']['operator_id'] = 'registration_id_op';
  $handler->display->display_options['filters']['registration_id']['expose']['label'] = 'Registration ID';
  $handler->display->display_options['filters']['registration_id']['expose']['operator'] = 'registration_id_op';
  $handler->display->display_options['filters']['registration_id']['expose']['identifier'] = 'registration_id';
  $handler->display->display_options['filters']['registration_id']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
    4 => 0,
    5 => 0,
    6 => 0,
  );
  $handler->display->display_options['path'] = 'admin/content/tantemarie/edit-registrations';
  $handler->display->display_options['menu']['type'] = 'normal';
  $handler->display->display_options['menu']['title'] = 'Administration: Registrations (edit)';
  $handler->display->display_options['menu']['weight'] = '0';
  $handler->display->display_options['menu']['name'] = 'management';
  $handler->display->display_options['menu']['context'] = 0;
  $handler->display->display_options['menu']['context_only_inline'] = 0;
  $export['administration_registrations'] = $view;

  $view = new view();
  $view->name = 'course_tabs';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Course Tabs';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Course Tabs';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Field: Content: Materials */
  $handler->display->display_options['fields']['field_materials']['id'] = 'field_materials';
  $handler->display->display_options['fields']['field_materials']['table'] = 'field_data_field_materials';
  $handler->display->display_options['fields']['field_materials']['field'] = 'field_materials';
  $handler->display->display_options['fields']['field_materials']['label'] = '';
  $handler->display->display_options['fields']['field_materials']['element_label_colon'] = FALSE;
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Contextual filter: Content: Nid */
  $handler->display->display_options['arguments']['nid']['id'] = 'nid';
  $handler->display->display_options['arguments']['nid']['table'] = 'node';
  $handler->display->display_options['arguments']['nid']['field'] = 'nid';
  $handler->display->display_options['arguments']['nid']['default_action'] = 'default';
  $handler->display->display_options['arguments']['nid']['default_argument_type'] = 'node';
  $handler->display->display_options['arguments']['nid']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['nid']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['nid']['summary_options']['items_per_page'] = '25';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'course' => 'course',
  );

  /* Display: Materials */
  $handler = $view->new_display('block', 'Materials', 'block');

  /* Display: Qualifications and Skills Gained */
  $handler = $view->new_display('block', 'Qualifications and Skills Gained', 'block_1');
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Qualifications Gained */
  $handler->display->display_options['fields']['field_qualifications_gained']['id'] = 'field_qualifications_gained';
  $handler->display->display_options['fields']['field_qualifications_gained']['table'] = 'field_data_field_qualifications_gained';
  $handler->display->display_options['fields']['field_qualifications_gained']['field'] = 'field_qualifications_gained';
  $handler->display->display_options['fields']['field_qualifications_gained']['type'] = 'taxonomy_term_reference_plain';
  $handler->display->display_options['fields']['field_qualifications_gained']['delta_offset'] = '0';
  /* Field: Content: Skills Gained */
  $handler->display->display_options['fields']['field_skills_gained']['id'] = 'field_skills_gained';
  $handler->display->display_options['fields']['field_skills_gained']['table'] = 'field_data_field_skills_gained';
  $handler->display->display_options['fields']['field_skills_gained']['field'] = 'field_skills_gained';
  $handler->display->display_options['fields']['field_skills_gained']['type'] = 'taxonomy_term_reference_plain';
  $handler->display->display_options['fields']['field_skills_gained']['delta_offset'] = '0';
  /* Field: Content: Skills Gained */
  $handler->display->display_options['fields']['field_skills_gained_1']['id'] = 'field_skills_gained_1';
  $handler->display->display_options['fields']['field_skills_gained_1']['table'] = 'field_data_field_skills_gained';
  $handler->display->display_options['fields']['field_skills_gained_1']['field'] = 'field_skills_gained';
  $handler->display->display_options['fields']['field_skills_gained_1']['label'] = 'Logos';
  $handler->display->display_options['fields']['field_skills_gained_1']['alter']['text'] = '[field_skills_gained_1][field_qualifications_gained_1]';
  $handler->display->display_options['fields']['field_skills_gained_1']['hide_empty'] = TRUE;
  $handler->display->display_options['fields']['field_skills_gained_1']['type'] = 'ds_taxonomy_view_mode';
  $handler->display->display_options['fields']['field_skills_gained_1']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_skills_gained_1']['separator'] = '';
  /* Field: Content: Qualifications Gained */
  $handler->display->display_options['fields']['field_qualifications_gained_1']['id'] = 'field_qualifications_gained_1';
  $handler->display->display_options['fields']['field_qualifications_gained_1']['table'] = 'field_data_field_qualifications_gained';
  $handler->display->display_options['fields']['field_qualifications_gained_1']['field'] = 'field_qualifications_gained';
  $handler->display->display_options['fields']['field_qualifications_gained_1']['label'] = '';
  $handler->display->display_options['fields']['field_qualifications_gained_1']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_qualifications_gained_1']['hide_empty'] = TRUE;
  $handler->display->display_options['fields']['field_qualifications_gained_1']['type'] = 'ds_taxonomy_view_mode';
  $handler->display->display_options['fields']['field_qualifications_gained_1']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_qualifications_gained_1']['separator'] = '';

  /* Display: Body */
  $handler = $view->new_display('block', 'Body', 'block_2');
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  /* Field: Content: Course Images */
  $handler->display->display_options['fields']['field_course_images']['id'] = 'field_course_images';
  $handler->display->display_options['fields']['field_course_images']['table'] = 'field_data_field_course_images';
  $handler->display->display_options['fields']['field_course_images']['field'] = 'field_course_images';
  $handler->display->display_options['fields']['field_course_images']['label'] = '';
  $handler->display->display_options['fields']['field_course_images']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_course_images']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_course_images']['type'] = 'colorbox';
  $handler->display->display_options['fields']['field_course_images']['settings'] = array(
    'colorbox_node_style' => 'square_thumbnail',
    'colorbox_image_style' => 'colorbox',
    'colorbox_gallery' => 'page',
    'colorbox_gallery_custom' => '',
    'colorbox_caption' => 'auto',
    'colorbox_caption_custom' => '',
  );
  $handler->display->display_options['fields']['field_course_images']['delta_offset'] = '0';
  $export['course_tabs'] = $view;

  $view = new view();
  $view->name = 'course_variants';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Course Variants';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Course Variants';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'title' => 'title',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'title' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  $handler->display->display_options['style_options']['sticky'] = TRUE;
  /* No results behavior: Global: Text area */
  $handler->display->display_options['empty']['area']['id'] = 'area';
  $handler->display->display_options['empty']['area']['table'] = 'views';
  $handler->display->display_options['empty']['area']['field'] = 'area';
  /* Relationship: Broken/missing handler */
  $handler->display->display_options['relationships']['field_course_product_product_id']['id'] = 'field_course_product_product_id';
  $handler->display->display_options['relationships']['field_course_product_product_id']['table'] = 'field_data_field_course_product';
  $handler->display->display_options['relationships']['field_course_product_product_id']['field'] = 'field_course_product_product_id';
  $handler->display->display_options['relationships']['field_course_product_product_id']['label'] = 'Product';
  $handler->display->display_options['relationships']['field_course_product_product_id']['required'] = TRUE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = 'Course ID';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  /* Field: Content: Path */
  $handler->display->display_options['fields']['path']['id'] = 'path';
  $handler->display->display_options['fields']['path']['table'] = 'node';
  $handler->display->display_options['fields']['path']['field'] = 'path';
  $handler->display->display_options['fields']['path']['label'] = '';
  $handler->display->display_options['fields']['path']['exclude'] = TRUE;
  $handler->display->display_options['fields']['path']['element_label_colon'] = FALSE;
  /* Field: Content: Date */
  $handler->display->display_options['fields']['field_date']['id'] = 'field_date';
  $handler->display->display_options['fields']['field_date']['table'] = 'field_data_field_date';
  $handler->display->display_options['fields']['field_date']['field'] = 'field_date';
  $handler->display->display_options['fields']['field_date']['alter']['text'] = '[field_date-value] - [field_date-value2]';
  $handler->display->display_options['fields']['field_date']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_date']['settings'] = array(
    'format_type' => 'short',
    'fromto' => 'both',
    'multiple_number' => '',
    'multiple_from' => '',
    'multiple_to' => '',
  );
  /* Field: Content: Days */
  $handler->display->display_options['fields']['field_days']['id'] = 'field_days';
  $handler->display->display_options['fields']['field_days']['table'] = 'field_data_field_days';
  $handler->display->display_options['fields']['field_days']['field'] = 'field_days';
  $handler->display->display_options['fields']['field_days']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_days']['delta_offset'] = '0';
  /* Field: Content: End Time */
  $handler->display->display_options['fields']['field_end_time']['id'] = 'field_end_time';
  $handler->display->display_options['fields']['field_end_time']['table'] = 'field_data_field_end_time';
  $handler->display->display_options['fields']['field_end_time']['field'] = 'field_end_time';
  $handler->display->display_options['fields']['field_end_time']['label'] = '';
  $handler->display->display_options['fields']['field_end_time']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_end_time']['element_label_colon'] = FALSE;
  /* Field: Content: Start Time */
  $handler->display->display_options['fields']['field_start_time']['id'] = 'field_start_time';
  $handler->display->display_options['fields']['field_start_time']['table'] = 'field_data_field_start_time';
  $handler->display->display_options['fields']['field_start_time']['field'] = 'field_start_time';
  $handler->display->display_options['fields']['field_start_time']['label'] = 'Time';
  $handler->display->display_options['fields']['field_start_time']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['field_start_time']['alter']['text'] = '[field_start_time] - [field_end_time]';
  $handler->display->display_options['fields']['field_start_time']['element_label_colon'] = FALSE;
  /* Field: Content: Duration */
  $handler->display->display_options['fields']['field_duration']['id'] = 'field_duration';
  $handler->display->display_options['fields']['field_duration']['table'] = 'field_data_field_duration';
  $handler->display->display_options['fields']['field_duration']['field'] = 'field_duration';
  $handler->display->display_options['fields']['field_duration']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_duration']['settings'] = array(
    'thousand_separator' => ' ',
    'prefix_suffix' => 1,
  );
  /* Field: Broken/missing handler */
  $handler->display->display_options['fields']['commerce_price']['id'] = 'commerce_price';
  $handler->display->display_options['fields']['commerce_price']['table'] = 'field_data_commerce_price';
  $handler->display->display_options['fields']['commerce_price']['field'] = 'commerce_price';
  $handler->display->display_options['fields']['commerce_price']['relationship'] = 'field_course_product_product_id';
  $handler->display->display_options['fields']['commerce_price']['label'] = 'Cost';
  /* Field: Broken/missing handler */
  $handler->display->display_options['fields']['registration_status_1']['id'] = 'registration_status_1';
  $handler->display->display_options['fields']['registration_status_1']['table'] = 'commerce_product';
  $handler->display->display_options['fields']['registration_status_1']['field'] = 'registration_status';
  $handler->display->display_options['fields']['registration_status_1']['relationship'] = 'field_course_product_product_id';
  $handler->display->display_options['fields']['registration_status_1']['label'] = 'Registration Status';
  /* Field: Global: Custom text */
  $handler->display->display_options['fields']['nothing']['id'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['table'] = 'views';
  $handler->display->display_options['fields']['nothing']['field'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['label'] = 'Booking';
  $handler->display->display_options['fields']['nothing']['alter']['text'] = '<a href="[path]">Book online here</a>';
  $handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
  /* Field: Broken/missing handler */
  $handler->display->display_options['fields']['capacity_used_1']['id'] = 'capacity_used_1';
  $handler->display->display_options['fields']['capacity_used_1']['table'] = 'commerce_product';
  $handler->display->display_options['fields']['capacity_used_1']['field'] = 'capacity_used';
  $handler->display->display_options['fields']['capacity_used_1']['relationship'] = 'field_course_product_product_id';
  $handler->display->display_options['fields']['capacity_used_1']['label'] = 'Capacity Used';
  /* Field: Broken/missing handler */
  $handler->display->display_options['fields']['capacity_available_1']['id'] = 'capacity_available_1';
  $handler->display->display_options['fields']['capacity_available_1']['table'] = 'commerce_product';
  $handler->display->display_options['fields']['capacity_available_1']['field'] = 'capacity_available';
  $handler->display->display_options['fields']['capacity_available_1']['relationship'] = 'field_course_product_product_id';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Contextual filter: Content: Parent Course (field_course) */
  $handler->display->display_options['arguments']['field_course_target_id']['id'] = 'field_course_target_id';
  $handler->display->display_options['arguments']['field_course_target_id']['table'] = 'field_data_field_course';
  $handler->display->display_options['arguments']['field_course_target_id']['field'] = 'field_course_target_id';
  $handler->display->display_options['arguments']['field_course_target_id']['default_action'] = 'default';
  $handler->display->display_options['arguments']['field_course_target_id']['default_argument_type'] = 'node';
  $handler->display->display_options['arguments']['field_course_target_id']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['field_course_target_id']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['field_course_target_id']['summary_options']['items_per_page'] = '25';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'course_variant' => 'course_variant',
  );

  /* Display: Block */
  $handler = $view->new_display('block', 'Block', 'block');
  $handler->display->display_options['defaults']['empty'] = FALSE;
  /* No results behavior: Global: Text area */
  $handler->display->display_options['empty']['area']['id'] = 'area';
  $handler->display->display_options['empty']['area']['table'] = 'views';
  $handler->display->display_options['empty']['area']['field'] = 'area';
  $handler->display->display_options['empty']['area']['empty'] = TRUE;
  $handler->display->display_options['empty']['area']['content'] = 'No scheduled events';
  $handler->display->display_options['empty']['area']['format'] = 'wysiwyg';

  /* Display: test */
  $handler = $view->new_display('block', 'test', 'block_1');
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['defaults']['arguments'] = FALSE;
  $export['course_variants'] = $view;

  $view = new view();
  $view->name = 'courses_professional_';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Courses (professional)';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Courses';
  $handler->display->display_options['use_ajax'] = TRUE;
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* No results behavior: Global: Text area */
  $handler->display->display_options['empty']['area']['id'] = 'area';
  $handler->display->display_options['empty']['area']['table'] = 'views';
  $handler->display->display_options['empty']['area']['field'] = 'area';
  $handler->display->display_options['empty']['area']['empty'] = TRUE;
  $handler->display->display_options['empty']['area']['content'] = 'No Results';
  $handler->display->display_options['empty']['area']['format'] = 'wysiwyg';
  /* Relationship: Entity Reference: Referenced Entity */
  $handler->display->display_options['relationships']['field_course_target_id']['id'] = 'field_course_target_id';
  $handler->display->display_options['relationships']['field_course_target_id']['table'] = 'field_data_field_course';
  $handler->display->display_options['relationships']['field_course_target_id']['field'] = 'field_course_target_id';
  /* Field: Content: Course Images */
  $handler->display->display_options['fields']['field_course_images']['id'] = 'field_course_images';
  $handler->display->display_options['fields']['field_course_images']['table'] = 'field_data_field_course_images';
  $handler->display->display_options['fields']['field_course_images']['field'] = 'field_course_images';
  $handler->display->display_options['fields']['field_course_images']['relationship'] = 'field_course_target_id';
  $handler->display->display_options['fields']['field_course_images']['label'] = '';
  $handler->display->display_options['fields']['field_course_images']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_course_images']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_course_images']['type'] = 'picture';
  $handler->display->display_options['fields']['field_course_images']['settings'] = array(
    'picture_group' => 'course_thumb',
    'fallback_image_style' => '',
    'image_link' => 'content',
    'colorbox' => 'course_thumb',
  );
  $handler->display->display_options['fields']['field_course_images']['delta_limit'] = '1';
  $handler->display->display_options['fields']['field_course_images']['delta_offset'] = '0';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['relationship'] = 'field_course_target_id';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  /* Field: Content: End Time */
  $handler->display->display_options['fields']['field_end_time']['id'] = 'field_end_time';
  $handler->display->display_options['fields']['field_end_time']['table'] = 'field_data_field_end_time';
  $handler->display->display_options['fields']['field_end_time']['field'] = 'field_end_time';
  $handler->display->display_options['fields']['field_end_time']['exclude'] = TRUE;
  /* Field: Content: Date */
  $handler->display->display_options['fields']['field_date']['id'] = 'field_date';
  $handler->display->display_options['fields']['field_date']['table'] = 'field_data_field_date';
  $handler->display->display_options['fields']['field_date']['field'] = 'field_date';
  $handler->display->display_options['fields']['field_date']['label'] = 'Start date';
  $handler->display->display_options['fields']['field_date']['settings'] = array(
    'format_type' => 'long',
    'fromto' => 'value',
    'multiple_number' => '',
    'multiple_from' => '',
    'multiple_to' => '',
  );
  /* Field: Content: Duration */
  $handler->display->display_options['fields']['field_duration']['id'] = 'field_duration';
  $handler->display->display_options['fields']['field_duration']['table'] = 'field_data_field_duration';
  $handler->display->display_options['fields']['field_duration']['field'] = 'field_duration';
  $handler->display->display_options['fields']['field_duration']['settings'] = array(
    'thousand_separator' => ' ',
    'prefix_suffix' => 1,
  );
  /* Field: Content: Start Time */
  $handler->display->display_options['fields']['field_start_time']['id'] = 'field_start_time';
  $handler->display->display_options['fields']['field_start_time']['table'] = 'field_data_field_start_time';
  $handler->display->display_options['fields']['field_start_time']['field'] = 'field_start_time';
  $handler->display->display_options['fields']['field_start_time']['label'] = 'Time';
  $handler->display->display_options['fields']['field_start_time']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['field_start_time']['alter']['text'] = '[field_start_time]-[field_end_time]';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title_1']['id'] = 'title_1';
  $handler->display->display_options['fields']['title_1']['table'] = 'node';
  $handler->display->display_options['fields']['title_1']['field'] = 'title';
  $handler->display->display_options['fields']['title_1']['label'] = '';
  $handler->display->display_options['fields']['title_1']['element_label_colon'] = FALSE;
  /* Field: Registration Settings: Slots Available */
  $handler->display->display_options['fields']['capacity_available']['id'] = 'capacity_available';
  $handler->display->display_options['fields']['capacity_available']['table'] = 'node';
  $handler->display->display_options['fields']['capacity_available']['field'] = 'capacity_available';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'course_variant' => 'course_variant',
  );
  /* Filter criterion: Content: Course Type (field_course_type) */
  $handler->display->display_options['filters']['field_course_type_tid']['id'] = 'field_course_type_tid';
  $handler->display->display_options['filters']['field_course_type_tid']['table'] = 'field_data_field_course_type';
  $handler->display->display_options['filters']['field_course_type_tid']['field'] = 'field_course_type_tid';
  $handler->display->display_options['filters']['field_course_type_tid']['relationship'] = 'field_course_target_id';
  $handler->display->display_options['filters']['field_course_type_tid']['value'] = array(
    5 => '5',
  );
  $handler->display->display_options['filters']['field_course_type_tid']['type'] = 'select';
  $handler->display->display_options['filters']['field_course_type_tid']['vocabulary'] = 'course_type';

  /* Display: Courses List */
  $handler = $view->new_display('block', 'Courses List', 'block');

  /* Display: Courses (Gap Year) */
  $handler = $view->new_display('block', 'Courses (Gap Year)', 'block_1');
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'course' => 'course',
  );
  /* Filter criterion: Content: Course Type (field_course_type) */
  $handler->display->display_options['filters']['field_course_type_tid']['id'] = 'field_course_type_tid';
  $handler->display->display_options['filters']['field_course_type_tid']['table'] = 'field_data_field_course_type';
  $handler->display->display_options['filters']['field_course_type_tid']['field'] = 'field_course_type_tid';
  $handler->display->display_options['filters']['field_course_type_tid']['value'] = array(
    6 => '6',
  );
  $handler->display->display_options['filters']['field_course_type_tid']['type'] = 'select';
  $handler->display->display_options['filters']['field_course_type_tid']['vocabulary'] = 'course_type';

  /* Display: Courses (Lifestyle) */
  $handler = $view->new_display('block', 'Courses (Lifestyle)', 'block_2');
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'course' => 'course',
  );
  /* Filter criterion: Content: Course Type (field_course_type) */
  $handler->display->display_options['filters']['field_course_type_tid']['id'] = 'field_course_type_tid';
  $handler->display->display_options['filters']['field_course_type_tid']['table'] = 'field_data_field_course_type';
  $handler->display->display_options['filters']['field_course_type_tid']['field'] = 'field_course_type_tid';
  $handler->display->display_options['filters']['field_course_type_tid']['value'] = array(
    7 => '7',
  );
  $handler->display->display_options['filters']['field_course_type_tid']['type'] = 'select';
  $handler->display->display_options['filters']['field_course_type_tid']['vocabulary'] = 'course_type';

  /* Display: Courses (School) */
  $handler = $view->new_display('block', 'Courses (School)', 'block_3');
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'course' => 'course',
  );
  /* Filter criterion: Content: Course Type (field_course_type) */
  $handler->display->display_options['filters']['field_course_type_tid']['id'] = 'field_course_type_tid';
  $handler->display->display_options['filters']['field_course_type_tid']['table'] = 'field_data_field_course_type';
  $handler->display->display_options['filters']['field_course_type_tid']['field'] = 'field_course_type_tid';
  $handler->display->display_options['filters']['field_course_type_tid']['value'] = array(
    8 => '8',
  );
  $handler->display->display_options['filters']['field_course_type_tid']['type'] = 'select';
  $handler->display->display_options['filters']['field_course_type_tid']['vocabulary'] = 'course_type';

  /* Display: Courses (All) */
  $handler = $view->new_display('block', 'Courses (All)', 'block_4');
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'course_variant' => 'course_variant',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;

  /* Display: Courses (Filter by Level) */
  $handler = $view->new_display('block', 'Courses (Filter by Level)', 'block_5');
  $handler->display->display_options['defaults']['arguments'] = FALSE;
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'course_variant' => 'course_variant',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  /* Filter criterion: Content: Level (field_level) */
  $handler->display->display_options['filters']['field_level_tid']['id'] = 'field_level_tid';
  $handler->display->display_options['filters']['field_level_tid']['table'] = 'field_data_field_level';
  $handler->display->display_options['filters']['field_level_tid']['field'] = 'field_level_tid';
  $handler->display->display_options['filters']['field_level_tid']['relationship'] = 'field_course_target_id';
  $handler->display->display_options['filters']['field_level_tid']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_level_tid']['expose']['operator_id'] = 'field_level_tid_op';
  $handler->display->display_options['filters']['field_level_tid']['expose']['label'] = 'Level';
  $handler->display->display_options['filters']['field_level_tid']['expose']['operator'] = 'field_level_tid_op';
  $handler->display->display_options['filters']['field_level_tid']['expose']['identifier'] = 'field_level_tid';
  $handler->display->display_options['filters']['field_level_tid']['expose']['multiple'] = TRUE;
  $handler->display->display_options['filters']['field_level_tid']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
    4 => 0,
  );
  $handler->display->display_options['filters']['field_level_tid']['type'] = 'select';
  $handler->display->display_options['filters']['field_level_tid']['vocabulary'] = 'level';

  /* Display: Courses (Filter by subject) */
  $handler = $view->new_display('block', 'Courses (Filter by subject)', 'block_6');
  $handler->display->display_options['defaults']['arguments'] = FALSE;
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'course_variant' => 'course_variant',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  /* Filter criterion: Content: Subject (field_subject) */
  $handler->display->display_options['filters']['field_subject_tid']['id'] = 'field_subject_tid';
  $handler->display->display_options['filters']['field_subject_tid']['table'] = 'field_data_field_subject';
  $handler->display->display_options['filters']['field_subject_tid']['field'] = 'field_subject_tid';
  $handler->display->display_options['filters']['field_subject_tid']['relationship'] = 'field_course_target_id';
  $handler->display->display_options['filters']['field_subject_tid']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_subject_tid']['expose']['operator_id'] = 'field_subject_tid_op';
  $handler->display->display_options['filters']['field_subject_tid']['expose']['label'] = 'Subject';
  $handler->display->display_options['filters']['field_subject_tid']['expose']['operator'] = 'field_subject_tid_op';
  $handler->display->display_options['filters']['field_subject_tid']['expose']['identifier'] = 'field_subject_tid';
  $handler->display->display_options['filters']['field_subject_tid']['expose']['multiple'] = TRUE;
  $handler->display->display_options['filters']['field_subject_tid']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
    4 => 0,
  );
  $handler->display->display_options['filters']['field_subject_tid']['type'] = 'select';
  $handler->display->display_options['filters']['field_subject_tid']['vocabulary'] = 'subjects';

  /* Display: Courses (Short) */
  $handler = $view->new_display('block', 'Courses (Short)', 'block_7');
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'course_variant' => 'course_variant',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  /* Filter criterion: Content: Short Course? (field_short_course_) */
  $handler->display->display_options['filters']['field_short_course__value']['id'] = 'field_short_course__value';
  $handler->display->display_options['filters']['field_short_course__value']['table'] = 'field_data_field_short_course_';
  $handler->display->display_options['filters']['field_short_course__value']['field'] = 'field_short_course__value';
  $handler->display->display_options['filters']['field_short_course__value']['relationship'] = 'field_course_target_id';
  $handler->display->display_options['filters']['field_short_course__value']['value'] = array(
    1 => '1',
  );

  /* Display: Courses (Filter by Date) */
  $handler = $view->new_display('block', 'Courses (Filter by Date)', 'block_8');
  $handler->display->display_options['defaults']['arguments'] = FALSE;
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'course_variant' => 'course_variant',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  /* Filter criterion: Content: Date -  start date (field_date) */
  $handler->display->display_options['filters']['field_date_value']['id'] = 'field_date_value';
  $handler->display->display_options['filters']['field_date_value']['table'] = 'field_data_field_date';
  $handler->display->display_options['filters']['field_date_value']['field'] = 'field_date_value';
  $handler->display->display_options['filters']['field_date_value']['operator'] = 'between';
  $handler->display->display_options['filters']['field_date_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_date_value']['expose']['operator_id'] = 'field_date_value_op';
  $handler->display->display_options['filters']['field_date_value']['expose']['label'] = 'Date -  start date (field_date)';
  $handler->display->display_options['filters']['field_date_value']['expose']['operator'] = 'field_date_value_op';
  $handler->display->display_options['filters']['field_date_value']['expose']['identifier'] = 'field_date_value';
  $handler->display->display_options['filters']['field_date_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
    4 => 0,
  );
  $handler->display->display_options['filters']['field_date_value']['default_date'] = 'now';
  $handler->display->display_options['filters']['field_date_value']['default_to_date'] = 'now +7 day';
  $handler->display->display_options['filters']['field_date_value']['year_range'] = '-0:+3';
  $export['courses_professional_'] = $view;

  $view = new view();
  $view->name = 'export_profile_v2';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'registration';
  $view->human_name = 'Export Profile';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Administrations: Registrants Detailed';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'role';
  $handler->display->display_options['access']['role'] = array(
    3 => '3',
    4 => '4',
  );
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['grouping'] = array(
    0 => array(
      'field' => 'title',
      'rendered' => 1,
      'rendered_strip' => 0,
    ),
  );
  $handler->display->display_options['style_options']['columns'] = array(
    'registration_id' => 'registration_id',
    'title' => 'title',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'registration_id' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'title' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  /* Relationship: Registration: Registration to Node */
  $handler->display->display_options['relationships']['registration_related_node']['id'] = 'registration_related_node';
  $handler->display->display_options['relationships']['registration_related_node']['table'] = 'registration';
  $handler->display->display_options['relationships']['registration_related_node']['field'] = 'registration_related_node';
  $handler->display->display_options['relationships']['registration_related_node']['required'] = TRUE;
  /* Relationship: Registration: User */
  $handler->display->display_options['relationships']['user_uid']['id'] = 'user_uid';
  $handler->display->display_options['relationships']['user_uid']['table'] = 'registration';
  $handler->display->display_options['relationships']['user_uid']['field'] = 'user_uid';
  $handler->display->display_options['relationships']['user_uid']['required'] = TRUE;
  /* Relationship: User: Profile */
  $handler->display->display_options['relationships']['profile']['id'] = 'profile';
  $handler->display->display_options['relationships']['profile']['table'] = 'users';
  $handler->display->display_options['relationships']['profile']['field'] = 'profile';
  $handler->display->display_options['relationships']['profile']['relationship'] = 'user_uid';
  $handler->display->display_options['relationships']['profile']['label'] = 'Profile (additional information)';
  $handler->display->display_options['relationships']['profile']['required'] = TRUE;
  $handler->display->display_options['relationships']['profile']['bundle_types'] = array(
    'additional_information' => 'additional_information',
  );
  /* Relationship: User: Profile */
  $handler->display->display_options['relationships']['profile_1']['id'] = 'profile_1';
  $handler->display->display_options['relationships']['profile_1']['table'] = 'users';
  $handler->display->display_options['relationships']['profile_1']['field'] = 'profile';
  $handler->display->display_options['relationships']['profile_1']['relationship'] = 'user_uid';
  $handler->display->display_options['relationships']['profile_1']['label'] = 'Profile (car travel)';
  $handler->display->display_options['relationships']['profile_1']['bundle_types'] = array(
    'car_travel' => 'car_travel',
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['relationship'] = 'registration_related_node';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  /* Field: Registration: Registration ID */
  $handler->display->display_options['fields']['registration_id']['id'] = 'registration_id';
  $handler->display->display_options['fields']['registration_id']['table'] = 'registration';
  $handler->display->display_options['fields']['registration_id']['field'] = 'registration_id';
  /* Field: User: Name */
  $handler->display->display_options['fields']['name']['id'] = 'name';
  $handler->display->display_options['fields']['name']['table'] = 'users';
  $handler->display->display_options['fields']['name']['field'] = 'name';
  $handler->display->display_options['fields']['name']['relationship'] = 'user_uid';
  /* Field: Field: Your Full Name */
  $handler->display->display_options['fields']['field_your_full_name']['id'] = 'field_your_full_name';
  $handler->display->display_options['fields']['field_your_full_name']['table'] = 'field_data_field_your_full_name';
  $handler->display->display_options['fields']['field_your_full_name']['field'] = 'field_your_full_name';
  /* Field: Profile: A-Level and GCSE results */
  $handler->display->display_options['fields']['field_a_level_and_gcse_results']['id'] = 'field_a_level_and_gcse_results';
  $handler->display->display_options['fields']['field_a_level_and_gcse_results']['table'] = 'field_data_field_a_level_and_gcse_results';
  $handler->display->display_options['fields']['field_a_level_and_gcse_results']['field'] = 'field_a_level_and_gcse_results';
  $handler->display->display_options['fields']['field_a_level_and_gcse_results']['relationship'] = 'profile';
  /* Field: Profile: Address 1 */
  $handler->display->display_options['fields']['field_address_1']['id'] = 'field_address_1';
  $handler->display->display_options['fields']['field_address_1']['table'] = 'field_data_field_address_1';
  $handler->display->display_options['fields']['field_address_1']['field'] = 'field_address_1';
  $handler->display->display_options['fields']['field_address_1']['relationship'] = 'profile';
  /* Field: Profile: Address 2 */
  $handler->display->display_options['fields']['field_address_2']['id'] = 'field_address_2';
  $handler->display->display_options['fields']['field_address_2']['table'] = 'field_data_field_address_2';
  $handler->display->display_options['fields']['field_address_2']['field'] = 'field_address_2';
  $handler->display->display_options['fields']['field_address_2']['relationship'] = 'profile';
  /* Field: Profile: Address 3 */
  $handler->display->display_options['fields']['field_address_3']['id'] = 'field_address_3';
  $handler->display->display_options['fields']['field_address_3']['table'] = 'field_data_field_address_3';
  $handler->display->display_options['fields']['field_address_3']['field'] = 'field_address_3';
  $handler->display->display_options['fields']['field_address_3']['relationship'] = 'profile';
  /* Field: Profile: Colour */
  $handler->display->display_options['fields']['field_colour']['id'] = 'field_colour';
  $handler->display->display_options['fields']['field_colour']['table'] = 'field_data_field_colour';
  $handler->display->display_options['fields']['field_colour']['field'] = 'field_colour';
  $handler->display->display_options['fields']['field_colour']['relationship'] = 'profile_1';
  /* Field: Profile: County */
  $handler->display->display_options['fields']['field_county']['id'] = 'field_county';
  $handler->display->display_options['fields']['field_county']['table'] = 'field_data_field_county';
  $handler->display->display_options['fields']['field_county']['field'] = 'field_county';
  $handler->display->display_options['fields']['field_county']['relationship'] = 'profile';
  /* Field: Profile: Did you consider other cokery schools? */
  $handler->display->display_options['fields']['field_did_you_consider_other_cok']['id'] = 'field_did_you_consider_other_cok';
  $handler->display->display_options['fields']['field_did_you_consider_other_cok']['table'] = 'field_data_field_did_you_consider_other_cok';
  $handler->display->display_options['fields']['field_did_you_consider_other_cok']['field'] = 'field_did_you_consider_other_cok';
  $handler->display->display_options['fields']['field_did_you_consider_other_cok']['relationship'] = 'profile';
  $handler->display->display_options['fields']['field_did_you_consider_other_cok']['type'] = 'list_key';
  /* Field: Profile: Did you visit the school before you booked? */
  $handler->display->display_options['fields']['field_did_you_visit_the_school_b']['id'] = 'field_did_you_visit_the_school_b';
  $handler->display->display_options['fields']['field_did_you_visit_the_school_b']['table'] = 'field_data_field_did_you_visit_the_school_b';
  $handler->display->display_options['fields']['field_did_you_visit_the_school_b']['field'] = 'field_did_you_visit_the_school_b';
  $handler->display->display_options['fields']['field_did_you_visit_the_school_b']['relationship'] = 'profile';
  $handler->display->display_options['fields']['field_did_you_visit_the_school_b']['type'] = 'list_key';
  /* Field: Profile: Diploma Name */
  $handler->display->display_options['fields']['field_diploma_name']['id'] = 'field_diploma_name';
  $handler->display->display_options['fields']['field_diploma_name']['table'] = 'field_data_field_diploma_name';
  $handler->display->display_options['fields']['field_diploma_name']['field'] = 'field_diploma_name';
  $handler->display->display_options['fields']['field_diploma_name']['relationship'] = 'profile';
  /* Field: Profile: Emergency Contact Email */
  $handler->display->display_options['fields']['field_emergency_contact_email']['id'] = 'field_emergency_contact_email';
  $handler->display->display_options['fields']['field_emergency_contact_email']['table'] = 'field_data_field_emergency_contact_email';
  $handler->display->display_options['fields']['field_emergency_contact_email']['field'] = 'field_emergency_contact_email';
  $handler->display->display_options['fields']['field_emergency_contact_email']['relationship'] = 'profile';
  /* Field: Profile: Emergency Contact Mobile */
  $handler->display->display_options['fields']['field_emergency_contact_mobile']['id'] = 'field_emergency_contact_mobile';
  $handler->display->display_options['fields']['field_emergency_contact_mobile']['table'] = 'field_data_field_emergency_contact_mobile';
  $handler->display->display_options['fields']['field_emergency_contact_mobile']['field'] = 'field_emergency_contact_mobile';
  $handler->display->display_options['fields']['field_emergency_contact_mobile']['relationship'] = 'profile';
  /* Field: Profile: Emergency Contact Name */
  $handler->display->display_options['fields']['field_emergency_contact_name']['id'] = 'field_emergency_contact_name';
  $handler->display->display_options['fields']['field_emergency_contact_name']['table'] = 'field_data_field_emergency_contact_name';
  $handler->display->display_options['fields']['field_emergency_contact_name']['field'] = 'field_emergency_contact_name';
  $handler->display->display_options['fields']['field_emergency_contact_name']['relationship'] = 'profile';
  /* Field: Profile: Emergency Contacts Relationship to Student */
  $handler->display->display_options['fields']['field_emergency_contacts_relatio']['id'] = 'field_emergency_contacts_relatio';
  $handler->display->display_options['fields']['field_emergency_contacts_relatio']['table'] = 'field_data_field_emergency_contacts_relatio';
  $handler->display->display_options['fields']['field_emergency_contacts_relatio']['field'] = 'field_emergency_contacts_relatio';
  $handler->display->display_options['fields']['field_emergency_contacts_relatio']['relationship'] = 'profile';
  /* Field: Profile: Fee Payer Address 1 */
  $handler->display->display_options['fields']['field_fee_payer_address_1']['id'] = 'field_fee_payer_address_1';
  $handler->display->display_options['fields']['field_fee_payer_address_1']['table'] = 'field_data_field_fee_payer_address_1';
  $handler->display->display_options['fields']['field_fee_payer_address_1']['field'] = 'field_fee_payer_address_1';
  $handler->display->display_options['fields']['field_fee_payer_address_1']['relationship'] = 'profile';
  /* Field: Profile: Fee Payer Address 2 */
  $handler->display->display_options['fields']['field_fee_payer_address_2']['id'] = 'field_fee_payer_address_2';
  $handler->display->display_options['fields']['field_fee_payer_address_2']['table'] = 'field_data_field_fee_payer_address_2';
  $handler->display->display_options['fields']['field_fee_payer_address_2']['field'] = 'field_fee_payer_address_2';
  $handler->display->display_options['fields']['field_fee_payer_address_2']['relationship'] = 'profile';
  /* Field: Profile: Fee Payer Address 3 */
  $handler->display->display_options['fields']['field_fee_payer_address_3']['id'] = 'field_fee_payer_address_3';
  $handler->display->display_options['fields']['field_fee_payer_address_3']['table'] = 'field_data_field_fee_payer_address_3';
  $handler->display->display_options['fields']['field_fee_payer_address_3']['field'] = 'field_fee_payer_address_3';
  $handler->display->display_options['fields']['field_fee_payer_address_3']['relationship'] = 'profile';
  /* Field: Profile: Fee Payer County */
  $handler->display->display_options['fields']['field_fee_payer_county']['id'] = 'field_fee_payer_county';
  $handler->display->display_options['fields']['field_fee_payer_county']['table'] = 'field_data_field_fee_payer_county';
  $handler->display->display_options['fields']['field_fee_payer_county']['field'] = 'field_fee_payer_county';
  $handler->display->display_options['fields']['field_fee_payer_county']['relationship'] = 'profile';
  /* Field: Profile: Fee Payer Email */
  $handler->display->display_options['fields']['field_fee_payer_email']['id'] = 'field_fee_payer_email';
  $handler->display->display_options['fields']['field_fee_payer_email']['table'] = 'field_data_field_fee_payer_email';
  $handler->display->display_options['fields']['field_fee_payer_email']['field'] = 'field_fee_payer_email';
  $handler->display->display_options['fields']['field_fee_payer_email']['relationship'] = 'profile';
  /* Field: Profile: Fee Payer Name */
  $handler->display->display_options['fields']['field_fee_payer_name']['id'] = 'field_fee_payer_name';
  $handler->display->display_options['fields']['field_fee_payer_name']['table'] = 'field_data_field_fee_payer_name';
  $handler->display->display_options['fields']['field_fee_payer_name']['field'] = 'field_fee_payer_name';
  $handler->display->display_options['fields']['field_fee_payer_name']['relationship'] = 'profile';
  /* Field: Profile: Fee Payer Postcode */
  $handler->display->display_options['fields']['field_fee_payer_postcode']['id'] = 'field_fee_payer_postcode';
  $handler->display->display_options['fields']['field_fee_payer_postcode']['table'] = 'field_data_field_fee_payer_postcode';
  $handler->display->display_options['fields']['field_fee_payer_postcode']['field'] = 'field_fee_payer_postcode';
  $handler->display->display_options['fields']['field_fee_payer_postcode']['relationship'] = 'profile';
  /* Field: Profile: Fee Payer Town/City */
  $handler->display->display_options['fields']['field_fee_payer_town_city']['id'] = 'field_fee_payer_town_city';
  $handler->display->display_options['fields']['field_fee_payer_town_city']['table'] = 'field_data_field_fee_payer_town_city';
  $handler->display->display_options['fields']['field_fee_payer_town_city']['field'] = 'field_fee_payer_town_city';
  $handler->display->display_options['fields']['field_fee_payer_town_city']['relationship'] = 'profile';
  /* Field: Profile: Health Checklist */
  $handler->display->display_options['fields']['field_health_checklist']['id'] = 'field_health_checklist';
  $handler->display->display_options['fields']['field_health_checklist']['table'] = 'field_data_field_health_checklist';
  $handler->display->display_options['fields']['field_health_checklist']['field'] = 'field_health_checklist';
  $handler->display->display_options['fields']['field_health_checklist']['relationship'] = 'profile';
  $handler->display->display_options['fields']['field_health_checklist']['delta_offset'] = '0';
  /* Field: Profile: How did you hear about us? */
  $handler->display->display_options['fields']['field_how_did_you_hear_about_us_']['id'] = 'field_how_did_you_hear_about_us_';
  $handler->display->display_options['fields']['field_how_did_you_hear_about_us_']['table'] = 'field_data_field_how_did_you_hear_about_us_';
  $handler->display->display_options['fields']['field_how_did_you_hear_about_us_']['field'] = 'field_how_did_you_hear_about_us_';
  $handler->display->display_options['fields']['field_how_did_you_hear_about_us_']['relationship'] = 'profile';
  /* Field: Profile: How will you be travelling to school? */
  $handler->display->display_options['fields']['field_how_will_you_be_travelling']['id'] = 'field_how_will_you_be_travelling';
  $handler->display->display_options['fields']['field_how_will_you_be_travelling']['table'] = 'field_data_field_how_will_you_be_travelling';
  $handler->display->display_options['fields']['field_how_will_you_be_travelling']['field'] = 'field_how_will_you_be_travelling';
  $handler->display->display_options['fields']['field_how_will_you_be_travelling']['relationship'] = 'profile';
  /* Field: Profile: If no, why did you not visit? */
  $handler->display->display_options['fields']['field_if_no_why_did_you_not_visi']['id'] = 'field_if_no_why_did_you_not_visi';
  $handler->display->display_options['fields']['field_if_no_why_did_you_not_visi']['table'] = 'field_data_field_if_no_why_did_you_not_visi';
  $handler->display->display_options['fields']['field_if_no_why_did_you_not_visi']['field'] = 'field_if_no_why_did_you_not_visi';
  $handler->display->display_options['fields']['field_if_no_why_did_you_not_visi']['relationship'] = 'profile';
  /* Field: Profile: If not, what is? */
  $handler->display->display_options['fields']['field_if_not_what_is_']['id'] = 'field_if_not_what_is_';
  $handler->display->display_options['fields']['field_if_not_what_is_']['table'] = 'field_data_field_if_not_what_is_';
  $handler->display->display_options['fields']['field_if_not_what_is_']['field'] = 'field_if_not_what_is_';
  $handler->display->display_options['fields']['field_if_not_what_is_']['relationship'] = 'profile';
  /* Field: Profile: If yes, how important was your visit in helping you make your decision? */
  $handler->display->display_options['fields']['field_if_yes_how_important_was_y']['id'] = 'field_if_yes_how_important_was_y';
  $handler->display->display_options['fields']['field_if_yes_how_important_was_y']['table'] = 'field_data_field_if_yes_how_important_was_y';
  $handler->display->display_options['fields']['field_if_yes_how_important_was_y']['field'] = 'field_if_yes_how_important_was_y';
  $handler->display->display_options['fields']['field_if_yes_how_important_was_y']['relationship'] = 'profile';
  /* Field: Profile: If yes, which ones? */
  $handler->display->display_options['fields']['field_if_yes_which_ones_']['id'] = 'field_if_yes_which_ones_';
  $handler->display->display_options['fields']['field_if_yes_which_ones_']['table'] = 'field_data_field_if_yes_which_ones_';
  $handler->display->display_options['fields']['field_if_yes_which_ones_']['field'] = 'field_if_yes_which_ones_';
  $handler->display->display_options['fields']['field_if_yes_which_ones_']['relationship'] = 'profile';
  /* Field: Profile: Is English your first language? */
  $handler->display->display_options['fields']['field_is_english_your_first_lang']['id'] = 'field_is_english_your_first_lang';
  $handler->display->display_options['fields']['field_is_english_your_first_lang']['table'] = 'field_data_field_is_english_your_first_lang';
  $handler->display->display_options['fields']['field_is_english_your_first_lang']['field'] = 'field_is_english_your_first_lang';
  $handler->display->display_options['fields']['field_is_english_your_first_lang']['relationship'] = 'profile';
  /* Field: Profile: Jacket Chest Size */
  $handler->display->display_options['fields']['field_jacket_chest_size']['id'] = 'field_jacket_chest_size';
  $handler->display->display_options['fields']['field_jacket_chest_size']['table'] = 'field_data_field_jacket_chest_size';
  $handler->display->display_options['fields']['field_jacket_chest_size']['field'] = 'field_jacket_chest_size';
  $handler->display->display_options['fields']['field_jacket_chest_size']['relationship'] = 'profile';
  /* Field: Profile: Make of Car */
  $handler->display->display_options['fields']['field_make_of_car']['id'] = 'field_make_of_car';
  $handler->display->display_options['fields']['field_make_of_car']['table'] = 'field_data_field_make_of_car';
  $handler->display->display_options['fields']['field_make_of_car']['field'] = 'field_make_of_car';
  $handler->display->display_options['fields']['field_make_of_car']['relationship'] = 'profile';
  /* Field: Profile: Name */
  $handler->display->display_options['fields']['field_yourname']['id'] = 'field_yourname';
  $handler->display->display_options['fields']['field_yourname']['table'] = 'field_data_field_yourname';
  $handler->display->display_options['fields']['field_yourname']['field'] = 'field_yourname';
  $handler->display->display_options['fields']['field_yourname']['relationship'] = 'profile';
  /* Field: Profile: Postcode */
  $handler->display->display_options['fields']['field_postcode']['id'] = 'field_postcode';
  $handler->display->display_options['fields']['field_postcode']['table'] = 'field_data_field_postcode';
  $handler->display->display_options['fields']['field_postcode']['field'] = 'field_postcode';
  $handler->display->display_options['fields']['field_postcode']['relationship'] = 'profile';
  /* Field: Profile: Previous Cookery Experience */
  $handler->display->display_options['fields']['field_previous_cookery_experienc']['id'] = 'field_previous_cookery_experienc';
  $handler->display->display_options['fields']['field_previous_cookery_experienc']['table'] = 'field_data_field_previous_cookery_experienc';
  $handler->display->display_options['fields']['field_previous_cookery_experienc']['field'] = 'field_previous_cookery_experienc';
  $handler->display->display_options['fields']['field_previous_cookery_experienc']['relationship'] = 'profile';
  /* Field: Profile: Registration No */
  $handler->display->display_options['fields']['field_registration_no']['id'] = 'field_registration_no';
  $handler->display->display_options['fields']['field_registration_no']['table'] = 'field_data_field_registration_no';
  $handler->display->display_options['fields']['field_registration_no']['field'] = 'field_registration_no';
  $handler->display->display_options['fields']['field_registration_no']['relationship'] = 'profile';
  /* Field: Profile: Student ID */
  $handler->display->display_options['fields']['field_student_id']['id'] = 'field_student_id';
  $handler->display->display_options['fields']['field_student_id']['table'] = 'field_data_field_student_id';
  $handler->display->display_options['fields']['field_student_id']['field'] = 'field_student_id';
  $handler->display->display_options['fields']['field_student_id']['relationship'] = 'profile';
  /* Field: Profile: Town/City */
  $handler->display->display_options['fields']['field_town_city']['id'] = 'field_town_city';
  $handler->display->display_options['fields']['field_town_city']['table'] = 'field_data_field_town_city';
  $handler->display->display_options['fields']['field_town_city']['field'] = 'field_town_city';
  $handler->display->display_options['fields']['field_town_city']['relationship'] = 'profile';
  /* Field: Profile: Trouser Waist Size */
  $handler->display->display_options['fields']['field_trouser_waist_size']['id'] = 'field_trouser_waist_size';
  $handler->display->display_options['fields']['field_trouser_waist_size']['table'] = 'field_data_field_trouser_waist_size';
  $handler->display->display_options['fields']['field_trouser_waist_size']['field'] = 'field_trouser_waist_size';
  $handler->display->display_options['fields']['field_trouser_waist_size']['relationship'] = 'profile';
  /* Field: Profile: What is your main reason for taking this course? */
  $handler->display->display_options['fields']['field_what_is_your_main_reason_f']['id'] = 'field_what_is_your_main_reason_f';
  $handler->display->display_options['fields']['field_what_is_your_main_reason_f']['table'] = 'field_data_field_what_is_your_main_reason_f';
  $handler->display->display_options['fields']['field_what_is_your_main_reason_f']['field'] = 'field_what_is_your_main_reason_f';
  $handler->display->display_options['fields']['field_what_is_your_main_reason_f']['relationship'] = 'profile';
  /* Field: Profile: Why did you choose Tante Marie? */
  $handler->display->display_options['fields']['field_why_did_you_choose_tante_m']['id'] = 'field_why_did_you_choose_tante_m';
  $handler->display->display_options['fields']['field_why_did_you_choose_tante_m']['table'] = 'field_data_field_why_did_you_choose_tante_m';
  $handler->display->display_options['fields']['field_why_did_you_choose_tante_m']['field'] = 'field_why_did_you_choose_tante_m';
  $handler->display->display_options['fields']['field_why_did_you_choose_tante_m']['relationship'] = 'profile';
  /* Filter criterion: Content: Title */
  $handler->display->display_options['filters']['title']['id'] = 'title';
  $handler->display->display_options['filters']['title']['table'] = 'node';
  $handler->display->display_options['filters']['title']['field'] = 'title';
  $handler->display->display_options['filters']['title']['relationship'] = 'registration_related_node';
  $handler->display->display_options['filters']['title']['exposed'] = TRUE;
  $handler->display->display_options['filters']['title']['expose']['operator_id'] = 'title_op';
  $handler->display->display_options['filters']['title']['expose']['label'] = 'Title';
  $handler->display->display_options['filters']['title']['expose']['operator'] = 'title_op';
  $handler->display->display_options['filters']['title']['expose']['identifier'] = 'title';
  $handler->display->display_options['filters']['title']['expose']['remember'] = TRUE;
  $handler->display->display_options['filters']['title']['expose']['remember_roles'] = array(
    2 => '2',
    4 => '4',
    1 => 0,
    3 => 0,
    5 => 0,
    6 => 0,
  );

  /* Display: Administrations: Registrants Detailed */
  $handler = $view->new_display('page', 'Administrations: Registrants Detailed', 'page');
  $handler->display->display_options['merge_rows'] = TRUE;
  $handler->display->display_options['field_config'] = array(
    'title' => array(
      'merge_option' => 'filter',
      'separator' => ', ',
    ),
    'registration_id' => array(
      'merge_option' => 'filter',
      'separator' => ', ',
    ),
    'name' => array(
      'merge_option' => 'filter',
      'separator' => ', ',
    ),
    'field_your_full_name' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_a_level_and_gcse_results' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_address_1' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_address_2' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_address_3' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_colour' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_county' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_did_you_consider_other_cok' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_did_you_visit_the_school_b' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_diploma_name' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_emergency_contact_email' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_emergency_contact_mobile' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_emergency_contact_name' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_emergency_contacts_relatio' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_fee_payer_address_1' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_fee_payer_address_2' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_fee_payer_address_3' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_fee_payer_county' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_fee_payer_email' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_fee_payer_name' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_fee_payer_postcode' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_fee_payer_town_city' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_health_checklist' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_how_did_you_hear_about_us_' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_how_will_you_be_travelling' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_if_no_why_did_you_not_visi' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_if_not_what_is_' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_if_yes_how_important_was_y' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_if_yes_which_ones_' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_is_english_your_first_lang' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_jacket_chest_size' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_make_of_car' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_yourname' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_postcode' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_previous_cookery_experienc' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_registration_no' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_student_id' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_town_city' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_trouser_waist_size' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_what_is_your_main_reason_f' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
    'field_why_did_you_choose_tante_m' => array(
      'merge_option' => 'merge_unique',
      'separator' => '',
    ),
  );
  $handler->display->display_options['path'] = 'admin/content/tantemarie/registrant_detailed';
  $handler->display->display_options['menu']['type'] = 'normal';
  $handler->display->display_options['menu']['title'] = 'Administrations: Registrants Detailed';
  $handler->display->display_options['menu']['weight'] = '0';
  $handler->display->display_options['menu']['name'] = 'management';
  $handler->display->display_options['menu']['context'] = 0;
  $handler->display->display_options['menu']['context_only_inline'] = 0;

  /* Display: Data export */
  $handler = $view->new_display('views_data_export', 'Data export', 'views_data_export_1');
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['style_plugin'] = 'views_data_export_csv';
  $handler->display->display_options['path'] = 'admin/content/tantemarie/registrant_detailed/csv';
  $handler->display->display_options['displays'] = array(
    'page' => 'page',
    'default' => 0,
  );
  $handler->display->display_options['sitename_title'] = 0;
  $export['export_profile_v2'] = $view;

  $view = new view();
  $view->name = 'my_courses';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'My Courses';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'My Courses';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'course_variant' => 'course_variant',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;

  /* Display: Block */
  $handler = $view->new_display('block', 'Block', 'block');
  $export['my_courses'] = $view;

  return $export;
}
