<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
  	<h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="content"<?php print $content_attributes; ?>>
		<?php
			hide($content['comments']);
			hide($content['links']);
    ?>
    <div class="row">
      <div class="four columns">
				<?php print render($content['field_image']); ?>
			</div>
      <div class="eight columns">
				<?php print render($content); ?>
			</div>
    </div>
  </div>
	
</div>
