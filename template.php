<?php

	/*
	Preprocess function to determine number of columns for main content area
	*/
	function foundation_preprocess_page(&$variables) {
		if ( !empty($variables['page']['left']) && !empty($variables['page']['right']) )
			$variables['main_columns'] = 'six';
		else if ( !empty($variables['page']['left']) || !empty($variables['page']['right']) )
			$variables['main_columns'] = 'nine';
		else if ( empty($variables['page']['left']) && empty($variables['page']['right']) )
			$variables['main_columns'] = 'twelve';
	}