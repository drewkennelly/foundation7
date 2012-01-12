<div class="container">

  <div class="row site-header">
    <div class="<?php print $header_columns; ?> columns">
      <h1><a href="<?php print $front_page; ?>"><?php print $site_name; ?></a></h1>
      <h4 class="subheader"><?php print $site_slogan; ?></h4>
    </div>
    
    <?php if ( $page['nav'] ): ?>
      <div class="four columns">
        <?php print render($page['nav']); ?>
      </div>
  	<?php endif; ?>
  </div>
  
  <div class="row">
  	<div class="twelve columns">
    	<hr />
    </div>
  </div>

  <div class="row">
    <div class="<?php print $main_columns;?> columns">
      <?php print $messages; ?>
      
			<?php if ($tabs): ?>
      	<div class="tabs"><?php print render($tabs); ?></div>
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
    
    <?php if ( $page['right'] ): ?>
      <div class="three columns">
        <?php print render($page['right']); ?>
      </div>
    <?php endif; ?>
  </div>
  
  <?php if ( $page['footer'] ): ?>
    <div class="row">
      <div class="twelve columns">
        <hr />
      </div>
    </div>
  
    <div class="row">
      <div class="twelve columns">
  			<?php print render($page['footer']); ?>
      </div>
    </div>
  <?php endif; ?>
  
</div>