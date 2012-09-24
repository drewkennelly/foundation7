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
	function foundation_button($element) {

	// Add some extra conditions to make sure we're only adding the classto the right submit button
	if ($element['#id'] == 'edit-submit') {
		// Now add our custom class
		if (isset($element['#attributes']['class'])) {
			$element['#attributes']['class'] .= ' button';
		}
		else {
			$element['#attributes']['class'] = 'button';
		}
	}

	return theme_button($element);
	}