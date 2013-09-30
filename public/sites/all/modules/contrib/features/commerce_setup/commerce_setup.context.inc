<?php
/**
 * @file
 * commerce_setup.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function commerce_setup_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'yourpage';
  $context->description = 'Your Page';
  $context->tag = 'users';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'your-page' => 'your-page',
      ),
    ),
  );
  $context->reactions = array(
    'css' => array(
      'Bartik' => array(
        'themes/bartik/color/preview.css' => 0,
        'themes/bartik/css/style-rtl.css' => 0,
        'themes/bartik/css/ie-rtl.css' => 0,
        'themes/bartik/css/maintenance-page.css' => 0,
        'themes/bartik/css/colors.css' => 0,
        'themes/bartik/css/layout.css' => 0,
        'themes/bartik/css/style.css' => 0,
        'themes/bartik/css/ie.css' => 0,
        'themes/bartik/css/layout-rtl.css' => 0,
        'themes/bartik/css/ie6.css' => 0,
        'themes/bartik/css/print.css' => 0,
      ),
      'Omega' => array(
        'sites/all/themes/omega/omega/panels/layouts/omega_16/omega_panels_admin_16.css' => 0,
        'sites/all/themes/omega/omega/panels/layouts/omega_12/omega_panels_admin_12.css' => 0,
        'sites/all/themes/omega/omega/panels/layouts/omega_24/omega_panels_admin_24.css' => 0,
        'sites/all/themes/omega/omega/css/formalize.css' => 0,
        'sites/all/themes/omega/omega/css/omega-visuals.css' => 0,
        'sites/all/themes/omega/omega/css/omega-branding.css' => 0,
        'sites/all/themes/omega/omega/css/omega-text.css' => 0,
        'sites/all/themes/omega/omega/css/omega-forms.css' => 0,
        'sites/all/themes/omega/omega/css/omega-menu.css' => 0,
      ),
      'Tante Marie' => array(
        'sites/all/themes/tante_marie/css/colorbox.css.less' => 0,
        'sites/all/themes/tante_marie/css/global.css.less' => 0,
        'sites/all/themes/tante_marie/css/tante-marie-alpha-default-wide.css' => 0,
        'sites/all/themes/tante_marie/css/tante-marie-alpha-default-narrow.css' => 0,
        'sites/all/themes/tante_marie/css/checkout.css.less' => 0,
        'sites/all/themes/tante_marie/css/tante-marie-alpha-default.css' => 0,
        'sites/all/themes/tante_marie/css/tante-marie-alpha-default-normal.css' => 0,
        'sites/all/themes/tante_marie/css/your-page.css.less' => 'sites/all/themes/tante_marie/css/your-page.css.less',
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('Your Page');
  t('users');
  $export['yourpage'] = $context;

  return $export;
}
