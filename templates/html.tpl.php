<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9 <?php print $classes; ?>" lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js <?php print $classes; ?>" lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>> <!--<![endif]-->

<head>
  <meta charset="utf-8" />

  <?php echo $head; ?>

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title><?php echo $head_title; ?></title>

  <!-- Included CSS Files -->
  <?php echo $styles; ?>

  <!-- Included JS Files -->
  <?php echo $scripts; ?>

</head>

<body <?php print $attributes;?>>
	<?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>