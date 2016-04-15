<?php

function CountHotelPostCard($city)
{
    db_set_active("eandb");
    $query = "SELECT city, count(*) as counthotels from activepropertylist  where city like '$city' group by city";
    $records = db_query($query);
    $row = array();
    if ($records) {
        $citydata = $records->fetchAssoc();
    }
    db_set_active("default");
    $content = '<div class="postcard-left" style="width:100%;min-height:200px;background-color:#c0c0c0">
                        <div style="margin-left:2%;margin-top:2%;width:40%;min-height:100px; background-color:red">
                            ' . $citydata["city"] . '</br>' . $citydata["counthotels"] . 'properties</div><div > text</div></div>';
    return $content;
}

function top_hotel_deals($city)
{
    db_set_active("eandb");
    $query = "SELECT * from xlist01  where city like '$city' and caption in ('Featured Image') limit 12";
    $result = db_query($query);
    $records = array();
    if ($result) {
        while ($row = $result->fetchAssoc()) {
            $records[] = $row;
        }
    }
    db_set_active("default");
    return $records;
}
function hotel_images($eanhotelid)
{
    db_set_active("eandb");
    $query = "SELECT * from hotelimagelist  where eanhotelid = $eanhotelid  ";
    $result = db_query($query);
    $records = array();
    if ($result) {
        while ($row = $result->fetchAssoc()) {
            $records[] = $row;
        }
    }
    db_set_active("default");
    return $records;
}
