<?php
function router()
{
    $path = request_path();
    switch ($path) {

        case 'hotel':
            $page = array(
                '#markup' => theme('hotel', array()),
            );
            break;
        default:
            $page = array(
                '#markup' => "<div>Hello, world</div>",
            );
            break;
    }
    return $page;
}
