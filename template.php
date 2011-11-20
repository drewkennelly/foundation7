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
    
    //add nice to form class
    $element['#attributes'] = array('class' => array('nice'));
    
    // Anonymous DIV to satisfy XHTML compliance.
    return '<form' . drupal_attributes($element['#attributes']) . '><div>' . $element['#children'] . '</div></form>';
  }