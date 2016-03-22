<?php

global $base_url;
?>
<div class="container" style="width:60%">
    <div class="row nomad-bg">
        <div class="col-sm-12" style="min-height:100px"></div>
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6"><H1 class="nomad-welcome">Welcome</H1></div>
        <div class="col-sm-3"></div>
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6"><h4 class="nomad-welcome">to the <span style="font-weight:bold">nomad advertising<span></h4></div>
        <div class="col-sm-3"></div>
    </div>

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6"><h4 class="nomad-welcome">24/7 briefing platform</h4></div>
        <div class="col-sm-3"></div>
    </div>
    <!--<div class="row">
    <div class="col-sm-4"><?php #print render($variables['form']['name']); ?></div>
    <div class="col-sm-4"></div>
    <div class="col-sm-4"></div>
</div>
<div class="row">
    <div class="col-sm-4"><?php #print render($variables['form']['pass']); ?></div>
    <div class="col-sm-4"></div>
    <div class="col-sm-4"></div>
</div>-->
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
        <div class="col-sm-3"><a href="<?php echo $base_url; ?>/user/password">Forgot password?</a></div>
        <div class="col-sm-3"><a href="<?php echo $base_url; ?>/user/register">Register</a></div>
        <div class="col-sm-3"></div>
    </div>

</div>
