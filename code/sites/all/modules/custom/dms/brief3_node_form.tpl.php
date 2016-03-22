<?php

global $base_url;
?>
<div class="container" >

  <div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-6"><?php print drupal_render_children($variables['form']); ?></div>
	<div class="col-sm-5"></div>
  </div>
</div>
