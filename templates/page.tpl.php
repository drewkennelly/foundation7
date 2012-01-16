<div class="container">

  <div class="row site-header">
    <div class="twelve columns">
      <h1><a href="<?php print $front_page; ?>"><?php print $site_name; ?></a></h1>
      <h4 class="subheader"><?php print $site_slogan; ?></h4>
    </div>
  </div>
	<!-- Header -->

	<?php if ( $page['nav'] ): ?>
		<div class="row">
			<div class="four columns">
				<hr />
				<?php print render($page['nav']); ?>
			</div>
		</div>
		<!-- Main Navigation -->
	<?php endif; ?>
  
  <div class="row">
  	<div class="twelve columns">
    	<hr />
    </div>
  </div>

  <div class="row">
		
		<?php if ( $page['left'] ): ?>
	    <div class="three columns">
	      <?php print render($page['left']); ?>
	    </div>
			<!-- Left sidebar -->
	  <?php endif; ?>
	
	
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
    <!-- Main content area -->

    <?php if ( $page['right'] ): ?>
      <div class="three columns">
        <?php print render($page['right']); ?>
      </div>
			<!-- Right sidebar -->
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
		<!-- Footer -->
  <?php endif; ?>
  
</div>
<!-- Container -->