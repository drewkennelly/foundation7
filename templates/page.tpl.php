<div class="container">

  <div class="row site-header">
    <div class="twelve columns">
      <h1><a href="<?php $front; ?>"><?php echo $site_name; ?></a></h1>
      <h4 class="subheader"><?php echo $site_slogan; ?></h4>
    </div>
  </div>
  
  <div class="row">
    <div class="twelve columns">
			<?php echo render($page['nav']); ?>
    </div>
  </div>
  
  <div class="row">
    <div class="twelve columns main">
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
  
  <?php if ( $page['footer'] ): ?>
    <div class="row">
      <div class="twelve columns">
  			<?php echo render($page['footer_left']); ?>
      </div>
    </div>
  <?php endif; ?>
  
</div>