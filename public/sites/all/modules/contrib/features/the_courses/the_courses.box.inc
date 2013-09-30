<?php
/**
 * @file
 * the_courses.box.inc
 */

/**
 * Implements hook_default_box().
 */
function the_courses_default_box() {
  $export = array();

  $box = new stdClass();
  $box->disabled = FALSE; /* Edit this to true to make a default box disabled initially */
  $box->api_version = 1;
  $box->delta = 'book_courses';
  $box->plugin_key = 'simple';
  $box->title = '';
  $box->description = 'Book Courses';
  $box->options = array(
    'body' => array(
      'value' => '<p>To book this course online visit our online booking system&nbsp;here.</p><p>&nbsp;</p><p>To book course offline please download and fill in the booking form.</p><p>&nbsp;</p><p>booking form.pdf</p>',
      'format' => 'wysiwyg',
    ),
    'additional_classes' => '',
  );
  $export['book_courses'] = $box;

  $box = new stdClass();
  $box->disabled = FALSE; /* Edit this to true to make a default box disabled initially */
  $box->api_version = 1;
  $box->delta = 'tab_links';
  $box->plugin_key = 'simple';
  $box->title = '';
  $box->description = 'Tab Links for courses';
  $box->options = array(
    'body' => array(
      'value' => '  <ul id="course_tab_links">
    <li><a href="#region-postscript-first">At a Glance</a></li>
    <li><a href="#region-postscript-second">Materials</a></li>
    <li><a href="#region-postscript-third">Qualifications and Skills Gained</a></li>
    <li><a href="#region-postscript-fourth">Dates and Fees</a></li>
    <li><a href="#region-postscript-fifth">Book Course</a></li>
  </ul>',
      'format' => 'full_html',
    ),
    'additional_classes' => '',
  );
  $export['tab_links'] = $box;

  return $export;
}
