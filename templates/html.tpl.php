<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 <?php print $classes; ?>" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8 <?php print $classes; ?>" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9 <?php print $classes; ?>" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js <?php print $classes; ?>" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>> <!--<![endif]-->

<html class="no-js <?php print $classes; ?>">
<head profile="<?php print $grddl_profile; ?>">
  <meta charset="utf-8" />

  <?php echo $head; ?>

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title><?php echo $head_title; ?></title>

  <!-- Included CSS Files -->
  <?php echo $styles; ?>

  <script src="<?php echo $directory; ?>/modernizr.foundation.js"></script>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Included JS Files -->
  <?php echo $scripts; ?>

</head>

<body <?php print $attributes;?>>
	<?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>