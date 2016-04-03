<?php
global $base_url;
global $user;
	   $uid=$user->uid;
$nid = $_GET['nid'];
$brief = node_load($nid);
if (!$brief) {
  drupal_goto($base_url);
}
?>
<?php
  $node=node_load($nid);


?>
<div class="row">
  <div class="col-md-10">

	<ul class="nav nav-tabs">
	  <!--<li role="presentation"><a href="<?php echo $base_url; ?>/brief/<?php echo $nid; ?>"
                                                            target="view">Brief</a>
            </li>-->
	  <li role="presentation"><a
		  href="<?php echo $base_url; ?>/brief-history/<?php echo $nid; ?>"
		  target="view">Brief history</a></li>

	  <li role="presentation"><a
		  href="<?php echo $base_url; ?>/node/<?php echo $nid; ?>/edit"
		  target="view">Edit/Attach</a></li>
	</ul>
  </div>

  <div class="col-md-2"></div>
</div>

<div class="row">
  <div class="col-md-12">
	<iframe class="view" name="view"
			src="<?php echo $base_url; ?>/brief-history/<?php echo $nid; ?>"
			width="100%"
			style="border-width:0px;min-height:800px"></iframe>
  </div>
</div>