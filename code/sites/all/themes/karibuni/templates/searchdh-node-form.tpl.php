<?php
module_load_include('inc', 'ean', 'eandb');
$form['actions']["preview"]['#access'] = 0;
drupal_set_title('Karibuni Africa: Search 532,000+ hotels, apartments, villas and more …');
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table-condensed searchdh">
                        <thead>
                        <tr>
                            <th colspan="6"><h1><i class="fa fa-search"></i>&nbsp;Search</h1></th>
                        </tr>
                        <tr>
                            <th colspan="6">532,000+ hotels, apartments, villas and more …</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="6">
                                <?php print drupal_render($form["title"]); ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <?php print drupal_render($form["field_check_in_date"]); ?>
                            </td>
                            <td colspan="3">
                                <?php print drupal_render($form["field_check_out_date"]); ?>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <?php print drupal_render($form["field_adults"]); ?>
                            </td>
                            <td colspan="2">
                                <?php print drupal_render($form["field_children"]); ?>
                            </td>
                            <td colspan="2">
                                <?php print drupal_render($form["field_rooms"]); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php print drupal_render_children($form); ?></td>
                            <td colspan="4"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <?php print CountHotelPostCard("Aswan"); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <?php
                    echo views_embed_view('citycountryhotel', 'block_1','Aswan');
                    //$block = module_invoke('views', 'block_view', 'citycountryhotel-block_1');
                    //print render($block['content']);
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-sm-12">
                    <?php print CountHotelPostCard("Buenos Aires"); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                   <?php
                   echo views_embed_view('citycountryhotel', 'block_1','Buenos Aires');
                   //$block = module_invoke('views', 'block_view', 'citycountryhotel-block_1');
                   //print render($block['content']);
                   ?>
                </div>
            </div>
        </div>
    </div>
</div>