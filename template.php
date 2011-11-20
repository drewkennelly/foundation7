<?php
  
  //set class for main content area
  function foundation_preprocess_page(&$variables) {
    if ( $variables['left'] ) {
      $variables['main_class'] = 'ten';
    } else {
      $variables['main_class'] = 'twelve';
    }
  }