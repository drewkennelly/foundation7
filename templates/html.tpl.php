<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 <?php print $classes; ?>" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8 <?php print $classes; ?>" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9 <?php print $classes; ?>" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js <?php print $classes; ?>" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>> <!--<![endif]-->

<head profile="<?php print $grddl_profile; ?>">

  <meta charset="utf-8" />

  <meta name="viewport" content="width=device-width" />
	<!-- Set the viewport width to device width for mobile -->

  <?php echo $head; ?>
	<!-- Head -->

  <title><?php echo $head_title; ?></title>

  <?php echo $styles; ?>
	<!-- Styles -->

	<!--[if lt IE 9]>
	 <link rel="stylesheet" href="/<?php print $directory; ?>/css/ie.css">
	<![endif]-->

  <script src="/<?php print $directory; ?>/js/modernizr.foundation.js"></script>

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
	 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

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