<?php
/**
 * Implementation of somewthing
 */
function wysiwyg_tools_plus_tabber_plugin() {
	return array(
		'tabber' => array(
			'js file' => 'tabber.js',
			'js path' => drupal_get_path('module', 'wysiwyg_tools_plus') . '/plugins',
			'css path' => drupal_get_path('module', 'wysiwyg_tools_plus') . '/plugins',
			'css file' => 'tabber.css',
			'icon title' => 'Tab',
      'icon path' => drupal_get_path('module', 'wysiwyg_tools_plus') . '/plugins/icons',
      'icon file' => 'tab.png',
			'buttons' => array('tabber' => t('Tabs')),
			'load' => TRUE,
			'internal' => FALSE,
			'settings' => array(),
			),
		'tabber_header' => array(
			'js file' => 'tabber_header.js',
			'js path' => drupal_get_path('module', 'wysiwyg_tools_plus') . '/plugins',
			'css file' => 'tabber.css',
      'css path' => drupal_get_path('module', 'wysiwyg_tools_plus') . '/plugins',
      'icon title' => 'Tab Header',
      'icon path' => drupal_get_path('module', 'wysiwyg_tools_plus') . '/plugins/icons',
      'icon file' => 'tab_header.png',
			'buttons' => array('tabber_header' => t('Tab Header')),
			'load' => TRUE,
			'internal' => FALSE,
			'settings' => array(),
		),
		'accordion' => array(
			'js file' => 'accordion.js',
			'js path' => drupal_get_path('module', 'wysiwyg_tools_plus') . '/plugins',
			'css path' => drupal_get_path('module', 'wysiwyg_tools_plus') . '/plugins',
			'css file' => 'accordion.css',
			'icon title' => 'Accordion',
      'icon path' => drupal_get_path('module', 'wysiwyg_tools_plus') . '/plugins/icons',
      'icon file' => 'accordion.png',
			'buttons' => array('accordion' => t('Accordion')),
			'load' => TRUE,
			'internal' => FALSE,
			'settings' => array(),
		),
		'accordion_header' => array(
			'js file' => 'accordion_header.js',
			'js path' => drupal_get_path('module', 'wysiwyg_tools_plus') . '/plugins',
			'css file' => 'accordion.css',
      'css path' => drupal_get_path('module', 'wysiwyg_tools_plus') . '/plugins',
      'icon title' => 'Accordion Header',
      'icon path' => drupal_get_path('module', 'wysiwyg_tools_plus') . '/plugins/icons',
      'icon file' => 'accordion_header.png',
			'buttons' => array('accordion_header' => t('Accordion Header')),
			'load' => TRUE,
			'internal' => FALSE,
			'settings' => array(),
		),
	);
}
