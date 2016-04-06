<?php
function router()
{
    $path = request_path();
    switch ($path) {

        case '':
            $page = array(
                '#markup' => theme('home', array()),
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
