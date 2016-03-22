<?php

global $base_url;
?>
<div class="container" style="width:60%">
    <div class="row nomad-bg">
        <div class="col-sm-12" style="min-height:100px"></div>
    </div>

    <div class="row">
        <div class="col-sm-12"><h1 class="nomad-welcome"  style="font-size:40px;">ACCOUNT SETUP</h1></div>
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6"><?php print drupal_render_children($variables['form']); ?></div>
        <div class="col-sm-3"></div>
    </div>




    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">&nbsp;</div>
        <div class="col-sm-3"></div>
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3"><a href="<?php echo $base_url; ?>/user">Back to login</a></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
    </div>
</div>
