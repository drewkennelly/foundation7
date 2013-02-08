<?php

	/**
	*	Preprocess function to determine number of columns for main content area
	**/
	function foundation_preprocess_page(&$variables) {
		if ( !empty($variables['page']['left']) && !empty($variables['page']['right']) )
			$variables['main_columns'] = 'six';
		else if ( !empty($variables['page']['left']) || !empty($variables['page']['right']) )
			$variables['main_columns'] = 'nine';
		else if ( empty($variables['page']['left']) && empty($variables['page']['right']) )
			$variables['main_columns'] = 'twelve';
	}



	/**
	* Overwrite theme_button()
	*/
	function foundation_button($variables) {
		$element = $variables['element'];
		$element['#attributes']['type'] = 'submit';
		element_set_attributes($element, array('id', 'name', 'value'));

		$element['#attributes']['class'][] = 'form-' . $element['#button_type'];

		if (!empty($element['#attributes']['disabled'])) {
			$element['#attributes']['class'][] = 'form-button-disabled';
		}

		//custom class
		$element['#attributes']['class'][] = 'button';
		$element['#attributes']['class'][] = 'small';
		$element['#attributes']['class'][] = 'radius';

		return '<input' . drupal_attributes($element['#attributes']) . ' />';
	}



	/**
	* Override theme_breadcrumb()
	**/
	function foundation_breadcrumb($variables) {
	  $breadcrumb = $variables['breadcrumb'];
		if (!empty($breadcrumb)) {
			$output = '<ul class="breadcrumbs">';
			foreach($breadcrumb as $value) {
				$crumbs .= '<li>'.$value.'</li>';
			}
			$crumbs .= '</ul>';
			return $crumbs;
		}
	}