<?php

/**
 * Add body classes if certain regions have content.
 */
function carnegie_preprocess_html(&$variables) {

  // Add conditional stylesheets for IE
  drupal_add_css(path_to_theme() . '/stylesheets/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
}
function carnegie_preprocess_page(&$vars) {
  if (arg(0) == 'taxonomy' && arg(1) == 'term' && is_numeric(arg(2))) {
    $term = taxonomy_term_load(arg(2));
    $vars['theme_hook_suggestions'][] = 'page__vocabulary__' . $term->vocabulary_machine_name;
  }
}

// Hide Main Image for Page Content Types
function carnegie_preprocess_node(&$vars, $hook) 
{
	if( $vars['type']=='page' )
	{
		hide($variables['content']['field-name-field-main-image']);

		$field = field_get_items('node', $vars['node'], 'field-name-body');
		if($field) { $vars['classes_array'][] = 'field-full-body'; }
	}
}