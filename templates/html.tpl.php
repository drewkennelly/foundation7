<!DOCTYPE html>

<html class="<?php print $classes; ?>" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

	<head profile="<?php print $grddl_profile; ?>">
	  <meta charset="utf-8" />
	  <meta name="viewport" content="width=device-width" />
	  <?php echo $head; ?>
		<!-- Head -->
	
	  <title><?php echo $head_title; ?></title>
	  <?php echo $styles; ?>
		<!-- Styles -->
	
	  <?php echo $scripts; ?>
		<!-- Scripts -->
	
	</head>

	<body <?php print $attributes;?>>
	
		<?php print $page_top; ?>
		<!-- Page top -->
	
	  <?php print $page; ?>
		<!-- Page -->
	
	  <?php print $page_bottom; ?>
		<!-- Page bottom -->
	
	</body>
</html>