<?php
module_load_include('inc', 'ean', 'eandb');
$eanhotelid = empty($_GET['id']) ? "-1" : $_GET['id'];
#query eandb
$featured=hotel_images($eanhotelid);
$n=count($featured);
# we'll have as many carousel's as image categories
# place a tabbing scheme on the left
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-5">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <?php
                    for ($i = 0; $i < $n-1; $i++) {
                        ?>
                        <li data-target="#myCarousel" data-slide-to="<?php print ($i + 1); ?>" class="active"></li>
                    <?php }?>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="<?php print $featured[0]['url']; ?>" alt="Chania">
                    </div>
                    <?php
                    for ($i = 0; $i < $n-1; $i++) {
                        ?>
                        <div class="item">
                            <img src="<?php print $featured[$i + 1]['url']; ?>" alt="Chania">
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
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation" class="active"><a href="#">Overview</a></li>
                <li role="presentation"><a href="#">Attributes</a></li>
                <li role="presentation"><a href="#">What to expects</a></li>
                <li role="presentation"><a href="#">Attractions</a></li>
                <li role="presentation"><a href="#">Reviews</a></li>
            </ul>
        </div>
        <div class="col-md-10">
            <iframe class="view" name="view"
                    src=""
                    width="100%"
                    style="border-width:0px;min-height:800px"></iframe>
        </div>
    </div>
</div>
