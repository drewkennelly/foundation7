<div class="container">
  <div class="row site-header">
    <div class="twelve columns">
      <h1><a href="<?php $front; ?>"><?php echo $site_name; ?></a></h1>
      <h4 class="subheader"><?php echo $site_slogan; ?></h4>
      <hr />
    </div>
  </div>
  <div class="row">
    <div class="three columns sidebar">
			<?php print render($page['left']); ?>
    </div>
    <div class="nine columns">
      <?php echo $messages; ?>
			<?php if ($tabs): ?>
      	<div class="tabs"><?php print render($tabs); ?></div>
      <?php endif; ?>
      <?php print render($title_prefix); ?>
      <h2><?php echo $title; ?></h2>
      <?php print render($title_suffix); ?>
      <?php if ($action_links): ?>
      	<ul class="action-links">
      		<?php print render($action_links); ?>
      	</ul>
      <?php endif; ?>
      <?php echo render($page['content']); ?>
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
    	<hr />
    </div>
  </div>
  <?php if ( $page['footer_left'] || $page['footer_right'] ): ?>
  <div class="row">
    <div class="eleven columns">
			<?php echo render($page['footer_left']); ?>
    </div>
    <div class="one columns">
			<?php echo render($page['footer_right']); ?>
		</div>
  </div>
  <?php endif; ?>
</div>