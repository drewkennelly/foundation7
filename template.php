<?php
  
  function foundation_form_alter(&$form, &$form_state, $form_id) {
    if (isset($form['type']) && $form['type']['#value'] . '_node_settings' == $form_id) {
      $form['workflow']['upload_' . $form['type']['#value']] = array(
        '#type' => 'radios', 
        '#title' => t('Attachments'), 
        '#default_value' => variable_get('upload_' . $form['type']['#value'], 1), 
        '#options' => array(t('Disabled'), t('Enabled')),
      );
    }
    
    //add nice to form class
    $form['#attributes'] = array('class' => array('nice'));
    
  }