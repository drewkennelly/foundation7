<?php

	function foundation_preprocess_page(&$variables) {
		if ( !empty($variables['page']['right']) ) {
			$variables['main_columns'] = 'nine';
		} else {
			$variables['main_columns'] = 'twelve';
		}
	}

  function foundation_form($variables) {
    $element = $variables['element'];
    if (isset($element['#action'])) {
      $element['#attributes']['action'] = drupal_strip_dangerous_protocols($element['#action']);
    }
    element_set_attributes($element, array('method', 'id'));
    if (empty($element['#attributes']['accept-charset'])) {
      $element['#attributes']['accept-charset'] = "UTF-8";
    }
    
    //add nice and custom to form class
    $element['#attributes']['class'] = array('nice', 'custom');
    
    // Anonymous DIV to satisfy XHTML compliance.
    return '<form' . drupal_attributes($element['#attributes']) . '><div>' . $element['#children'] . '</div></form>';
  }
  
  function foundation_textfield($variables) {
    $element = $variables['element'];
    $element['#attributes']['type'] = 'text';
    element_set_attributes($element, array('id', 'name', 'value', 'size', 'maxlength'));
		
		//add input-text to class
    _form_set_class($element, array('form-text', 'input-text'));
  
    $extra = '';
    if ($element['#autocomplete_path'] && drupal_valid_path($element['#autocomplete_path'])) {
      drupal_add_library('system', 'drupal.autocomplete');
      $element['#attributes']['class'][] = 'form-autocomplete';
  
      $attributes = array();
      $attributes['type'] = 'hidden';
      $attributes['id'] = $element['#attributes']['id'] . '-autocomplete';
      $attributes['value'] = url($element['#autocomplete_path'], array('absolute' => TRUE));
      $attributes['disabled'] = 'disabled';
      $attributes['class'][] = 'autocomplete';
      $extra = '<input' . drupal_attributes($attributes) . ' />';
    }
  
    $output = '<input' . drupal_attributes($element['#attributes']) . ' />';
  
    return $output . $extra;
  }
	
	function foundation_password($variables) {
		$element = $variables['element'];
		$element['#attributes']['type'] = 'password';
		element_set_attributes($element, array('id', 'name', 'size', 'maxlength'));
		
		//add input-text class to password
		_form_set_class($element, array('form-text', 'input-text'));
	
		return '<input' . drupal_attributes($element['#attributes']) . ' />';
	}
  
  function foundation_button($variables) {
    $element = $variables['element'];
    $element['#attributes']['type'] = 'submit';
    element_set_attributes($element, array('id', 'name', 'value'));
  
		//add classes to buttons
    $element['#attributes']['class'] = array('form-' . $element['#button_type'], 'blue', 'nice', 'button', 'radius');

    if (!empty($element['#attributes']['disabled'])) {
      $element['#attributes']['class'][] = 'form-button-disabled';
    }
  
    return '<input' . drupal_attributes($element['#attributes']) . ' />';
  }
	
	
	function foundation_status_messages($variables) {
		$display = $variables['display'];
		$output = '';
	
		$status_heading = array(
			'status' => t('Status message'), 
			'error' => t('Error message'), 
			'warning' => t('Warning message'),
		);
		foreach (drupal_get_messages($display) as $type => $messages) {
			
			//change 'status' to 'success'
			if ( $type == 'status' )
				$type = 'success';
			else
				$type = $type;
			
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
			$output .= "</div>\n";
		}
		return $output;
	}