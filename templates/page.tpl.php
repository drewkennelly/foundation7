<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<div class="row">
  <div class="twelve columns">
    <?php if ($is_front): ?>
      <h1><?php print $site_name; ?></h1>
      <h4 class="subheader"><?php print $site_slogan; ?></h4>
    <?php else: ?>
      <h1><a href="<?php print $front_page; ?>"><?php print $site_name; ?></a></h1>
      <h4 class="subheader"><?php print $site_slogan; ?></h4>
    <?php endif; ?>
  </div>
</div>
<!-- Header -->


<div class="row">
  <div class="twelve columns">
    <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('nav-bar')))); ?>
  </div>
</div>
<!-- Main Navigation -->


<div class="row">
  <div class="twelve columns">
    <?php print $breadcrumb; ?>
  </div>
</div>
<!-- Breadcrumbs -->


<div class="row">

	<?php if ($page['left']): ?>
    <div class="three columns">
      <?php print render($page['left']); ?>
    </div>
		<!-- Left sidebar -->
  <?php endif; ?>


  <div class="<?php print $main_columns; ?> columns">

    <?php print $messages; ?>

		<?php if ($tabs): ?>
    	<div class="tabs pill"><?php print render($tabs); ?></div>
    <?php endif; ?>

    <?php print render($title_prefix); ?>
    <h2><?php print $title; ?></h2>
    <?php print render($title_suffix); ?>

    <?php if ($action_links): ?>
    	<ul class="action-links">
    		<?php print render($action_links); ?>
    	</ul>
    <?php endif; ?>

    <?php print render($page['content']); ?>
  </div>
  <!-- Main content area -->

  <?php if ($page['right']): ?>
    <div class="three columns">
      <?php print render($page['right']); ?>
    </div>
		<!-- Right sidebar -->
  <?php endif; ?>

</div>


<?php if ($page['footer']): ?>
  <div class="row"><div class="twelve columns"><hr></div></div>
  <div class="row">
    <div class="twelve columns">
			<?php print render($page['footer']); ?>
    </div>
  </div>
	<!-- Footer -->
<?php endif; ?>