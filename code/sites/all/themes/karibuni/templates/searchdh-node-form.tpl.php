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
        <div class="col-md-6">
            <table class="table-condensed searchdh">
                <thead>
                <tr>
                    <th colspan="4">
                        <h1></h1>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td colspan="4">
                        <?php print drupal_render($form["title"]); ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php print drupal_render($form["field_check_in_date"]); ?>
                    </td>
                    <td colspan="2">
                        <?php print drupal_render($form["field_check_out_date"]); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php print drupal_render($form["field_adults"]); ?>
                    </td>
                    <td>
                        <?php print drupal_render($form["field_children"]); ?>
                    </td>

                    <td>
                        <?php print drupal_render($form["field_rooms"]); ?>
                    </td>
                    <td></td>
                </tr>
                <tr>

                    <td>
                        <?php print drupal_render_children($form); ?>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-5">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <?php
                    for ($i = 0; $i < $n - 1; $i++) {
                        ?>
                        <li data-target="#myCarousel" data-slide-to="<?php print ($i + 1); ?>" class="active"></li>
                    <?php }?>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="<?php print $top_deals[0]['url']; ?>" alt="Chania">
                    </div>
                    <?php
                    for ($i = 0; $i < $n; $i++) {
                        ?>
                        <div class="item">
                            <img src="<?php print $top_deals[$i + 1]['url']; ?>" alt="Chania">
                        </div>
                    <?php }?>
                </div>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h4>Featured Hotels</h4>
        </div>
    </div>
    <div class="row">
        <?php
        for ($i = 0; $i < 4; $i++) {
            ?>
            <div class="col-md-3">
                <div>
                    <div><img src="<?php print $top_deals[$i]['url']; ?>" width="100%"/></div>
                    <div><a href="<?php echo $base_url; ?>/hotel?id=<?php echo $top_deals[$i]['eanhotelid']; ?>"><?php print $top_deals[$i]['name'];?></a></div>
                    <div><?php print $top_deals[$i]['city'];?>, <?php print $top_deals[$i]['country'];?></div>
                    <div><?php print $top_deals[$i]['location'];?></div>
                    <div>from <?php print $top_deals[$i]['lowrate'];?></div>
                    <div><?php print $top_deals[$i]['starrating'];?></div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="row">
        <?php
        for ($i = 4; $i < 8; $i++) {
            ?>
            <div class="col-md-3">
                <div>
                    <div><img src="<?php print $top_deals[$i]['url']; ?>" width="100%"/></div>
                    <div><a href="<?php echo $base_url; ?>/hotel?id=<?php echo $top_deals[$i]['eanhotelid']; ?>"><?php print $top_deals[$i]['name'];?></a></div>
                    <div><?php print $top_deals[$i]['city'];?>, <?php print $top_deals[$i]['country'];?></div>
                    <div><?php print $top_deals[$i]['location'];?></div>
                    <div>from <?php print $top_deals[$i]['lowrate'];?></div>
                    <div><?php print $top_deals[$i]['starrating'];?></div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


