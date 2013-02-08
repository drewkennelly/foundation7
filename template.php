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
				$output .= '<li>'.$value.'</li>';
			}
			$output .= '</ul>';
			return $output;
		}
	}



	/**
	*	Override theme_status_messages()
	**/
	function foundation_status_messages($variables) {
	  $display = $variables['display'];
	  $output = '';

	  $status_heading = array(
	    'status' => t('Status message'), 
	    'error' => t('Error message'), 
	    'warning' => t('Warning message'),
	  );
	  foreach (drupal_get_messages($display) as $type => $messages) {

	  	//convert to foundation classes
	  	switch ( $type ) {

	  		case 'error': $type = 'alert';
	  		break;

	  		case 'status': $type = 'success';
	  		break;

	  		case 'warning': $type = 'secondary';
	  		break;

	  	}


	    $output .= "<div class=\"alert-box $type\">\n";
	    if (!empty($status_heading[$type])) {
	      $output .= '<h2 class="element-invisible">' . $status_heading[$type] . "</h2>\n";
	    }
	    if (count($messages) > 1) {
	      $output .= " <ul>\n";
	      foreach ($messages as $message) {
	        $output .= '  <li>' . $message . "</li>\n";
	      }
	      $output .= " </ul>\n";
	    }
	    else {
	      $output .= $messages[0];
	    }
	    $output .= "<a href=\"\" class=\"close\">&times;</a></div>\n";
	  }
	  return $output;
	}

?>