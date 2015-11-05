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

function omega_2_radios($variables){
	$element = $variables['element'];
	$attributes = array();
	if (isset($element['#id'])) {
		$attributes['id'] = $element['#id'];
	}
	$attributes['class'] = 'form-radios';
	if (!empty($element['#attributes']['class'])) {
		$attributes['class'] .= ' ' . implode(' ', $element['#attributes']['class']);
	}
	if (isset($element['#attributes']['title'])) {
		$attributes['title'] = $element['#attributes']['title'];
	}

	return '<div' . drupal_attributes($attributes) . '>' . (!empty($element['#children']) ? $element['#children'] : '') . '</div>';
}