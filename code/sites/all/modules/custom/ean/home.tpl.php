<?php
db_set_active("eandb");
$query = "select * from popularhotels limit 10";
$rows = db_query($query);
$images=array();
foreach($rows as $row) {
    $images[$row->id]=$row->url;

}
db_set_active("default");
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php
        foreach(array_keys($images) as $key){
            ?>
            <li data-target="#myCarousel" data-slide-to="<?php print $key; ?>" class="<?php echo ($key==1)? 'active':''; ?>"></li>
        <?php
        }
        ?>
    </ol>
    <div class="carousel-inner" role="listbox">
        <?php
        foreach(array_keys($images) as $key){
            ?>

            <div class="item <?php echo ($key==1)? 'active':''; ?>">
                <img class="<?php print $key; ?>"
                     src="<?php print $images[$key]; ?>"
                     alt="First slide">

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Example headline.</h1>

                        <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous"
                            Glyphicon buttons on the left and right might not load/display properly due to web browser
                            security rules.</p>

                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

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
<?php
db_set_active("eandb");
$query = "select * from popularhotels limit 4";
$rows = db_query($query);
$images=array();
foreach($rows as $row) {
$images[$row->id]=$row->thumbnailurl;

}
db_set_active("default");
?>
<div class="row">
    <?php
    foreach(array_keys($images) as $key) {
        ?>
        <div class="col-md-3"><img class="<?php print $key; ?>"
                                   src="<?php print $images[$key]; ?>"
                                   alt="First slide"></div>
    <?php
    }
    ?>
</div>


<div class="row">
    <div class="col-md-12">col-md-12</div>
</div>

<div class="row">
    <div class="col-md-4">.col-md-4</div>
    <div class="col-md-4">.col-md-4</div>
    <div class="col-md-4">.col-md-4</div>
</div>