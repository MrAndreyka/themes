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

/*function omega_2_preprocess_block(&$vars) {
	$block = $vars['block'];

	// Create css id attribute based on 'Block title' when available.
	if (!empty($block->title)) {
		// Create the variable and ensure that it is correctly formatted with mytheme_id_safe function
		$cssid = omega_2_id_safe($block->title);
	}
	else  {
		// If no "Block title", create css id attribute the traditional way.
		$cssid = "block-$block->module-$block->delta";
	}
	$vars['block_html_id'] = $cssid;
}

function omega_2_id_safe($string) { //change mytheme to your theme name
	if (is_numeric($string{0})) {
		// If the first character is numeric, add 'n' in front
		$string = 'n'. $string;
	}
	return strtolower(preg_replace('/[^a-zA-Z0-9-]+/', '-', $string));
}
*/