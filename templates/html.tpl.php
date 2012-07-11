<!DOCTYPE html>

<html class="no-js <?php print $classes; ?>" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head profile="<?php print $grddl_profile; ?>">
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