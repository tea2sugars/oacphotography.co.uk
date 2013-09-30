<?php
/**
 * @file
 * tm_panel_content.default_breakpoint_group.inc
 */

/**
 * Implements hook_default_breakpoint_group().
 */
function tm_panel_content_default_breakpoint_group() {
  $export = array();

  // Breakpoints.
  $breakpoints = array();
  $breakpoints[] = 'custom.user.fluid';
  $breakpoints[] = 'custom.user.narrow';
  $breakpoints[] = 'custom.user.normal';
  $breakpoints[] = 'custom.user.wide';

  // Breakpoint group.
  $breakpoint_group = new stdClass();
  $breakpoint_group->disabled = FALSE; /* Edit this to true to make a default breakpoint_group disabled initially */
  $breakpoint_group->api_version = 1;
  $breakpoint_group->machine_name = 'content';
  $breakpoint_group->name = 'Content';
  $breakpoint_group->breakpoints = $breakpoints;
  $breakpoint_group->type = 'custom';
  $breakpoint_group->overridden = 0;
  $export['content'] = $breakpoint_group;

  return $export;
}
