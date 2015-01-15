<!DOCTYPE html>
<html class="no-js <?php print $classes; ?>" lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
  <?php echo $head; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $head_title; ?></title>
  <?php echo $styles; ?>
  <?php echo $scripts; ?>
  <script>
    $(document).foundation();
  </script>
</head>
<body <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>