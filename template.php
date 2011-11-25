<?php

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
    $element['#attributes']['class'][] = array('form-' . $element['#button_type'], 'blue', 'nice', 'button', 'radius');

    if (!empty($element['#attributes']['disabled'])) {
      $element['#attributes']['class'][] = 'form-button-disabled';
    }
  
    return '<input' . drupal_attributes($element['#attributes']) . ' />';
  }