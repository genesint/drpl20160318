<?php
module_load_include('inc', 'ean', 'eandb');
$form['actions']["preview"]['#access'] = 0;
drupal_set_title('Karibuni Africa: Search 532,000+ hotels, apartments, villas and more …');
$top_deals = top_hotel_deals("Kampala");
$n = 6;
global $base_url;
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 searchdh">
            <table class="table-condensed">
                <thead>
                <tr>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="searchdh-title">
                        <?php print drupal_render($form["title"]); ?>
                    </td>
                    <td class="searchdh-check-in">
                        <?php print drupal_render($form["field_check_in_date"]); ?>
                    </td>
                    <td class="searchdh-check-out">
                        <?php print drupal_render($form["field_check_out_date"]); ?>
                    </td>
                    <td >
                        <?php print drupal_render($form["field_adults"]); ?>
                    </td>
                    <td >
                        <?php print drupal_render($form["field_children"]); ?>
                    </td>
                    <td >
                        <?php print drupal_render($form["field_rooms"]); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php print drupal_render_children($form); ?>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row  top-deals">
        <div class="col-md-12">
            <h4>Featured Hotels</h4>
        </div>
    </div>
    <div class="row top-deals">
        <?php
        for ($i = 0; $i < 4; $i++) {
            ?>
            <div class="col-md-3">
                <div class="top-deal-item">
                    <div class="postcard"><img src="<?php print $top_deals[$i]['url']; ?>" width="100%"/></div>
                    <div class="top-deal-data">
                        <a href="<?php echo $base_url; ?>/hotel?id=<?php echo $top_deals[$i]['eanhotelid']; ?>"><?php print $top_deals[$i]['name'];?></a>
                    </div>
                    <div  class="top-deal-data"><?php print $top_deals[$i]['location'];?></div>
                    <div  class="top-deal-data"><?php print $top_deals[$i]['city'];?>, <?php print $top_deals[$i]['country'];?></div>
                    <div  class="top-deal-data">Starting at <?php print $top_deals[$i]['propertycurrency'].'&nbsp;'.number_format($top_deals[$i]['lowrate'], 0, '.', ',');?></div>
                    <div class="top-deal-data">
                        <?php
                        $starrating = $top_deals[$i]['starrating'];
                        $floor_starrating=floor($starrating);
                        $half = ceil($starrating-$floor_starrating);
                        #print $starrating.':'.$floor_starrating.':'.$half;
                        ?>
                        <?php
                        for($k=0;$k<$floor_starrating;$k++){
                        ?>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        <?php } ?>

                        <?php
                        if($half==1){
                        ?>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <?php } ?>
                    </div>
                    <div class="top-deal-data top-deal-button"><button type="button" class="btn btn-primary btn-sm">Select</button></div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="row  top-deals">
        <div class="col-md-12">
            <h4>&nbsp;</h4>
        </div>
    </div>
    <div class="row top-deals">
        <?php
        for ($i = 4; $i < 8; $i++) {
            ?>
            <div class="col-md-3">
                <div class="top-deal-item">
                    <div class="postcard"><img src="<?php print $top_deals[$i]['url']; ?>" width="100%"/></div>
                    <div class="top-deal-data">
                        <a href="<?php echo $base_url; ?>/hotel?id=<?php echo $top_deals[$i]['eanhotelid']; ?>"><?php print $top_deals[$i]['name'];?></a>
                    </div>
                    <div class="top-deal-data"><?php print $top_deals[$i]['location'];?></div>
                    <div class="top-deal-data"><?php print $top_deals[$i]['city'];?>, <?php print $top_deals[$i]['country'];?></div>
                    <div class="top-deal-data">Starting at <?php print $top_deals[$i]['propertycurrency'].'&nbsp;'.number_format($top_deals[$i]['lowrate'], 0, '.', ',');?></div>
                    <div class="top-deal-data">
                        <?php
                        $starrating = $top_deals[$i]['starrating'];
                        $floor_starrating=floor($starrating);
                        $half = ceil($starrating-$floor_starrating);
                        #print $starrating.':'.$floor_starrating.':'.$half;
                        ?>
                        <?php
                        for($k=0;$k<$floor_starrating;$k++){
                            ?>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        <?php } ?>

                        <?php
                        if($half==1){
                            ?>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <?php } ?>
                    </div>
                    <div class="top-deal-data top-deal-button"><button type="button" class="btn btn-primary btn-sm">Select</button></div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


