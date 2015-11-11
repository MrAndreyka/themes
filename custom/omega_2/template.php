<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * Omega2 theme.
 */

function omega_2_checkbox($variables) {
	$element = $variables['element'];
	$element['#attributes']['type'] = 'checkbox';
	element_set_attributes($element, array('id', 'name', '#return_value' => 'value'));

	// Unchecked checkbox has #value of integer 0.
	if (!empty($element['#checked'])) {
		$element['#attributes']['checked'] = 'checked';
	}
	_form_set_class($element, array('form-checkbox'));

	return '<input' . drupal_attributes($element['#attributes']) . ' /><label for="edit-event-box"></label>';
}

function omega_2_preprocess_radio(&$variables){
	$variables['element']['#attributes']['class'][] = 'input_omega2';
}

function omega_2_node($var){
	$ff = 55;
}