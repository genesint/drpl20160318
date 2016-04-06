<?php
/**
 * @file
 * The primary PHP file for this theme.
 */
function karibuni_theme()
{
    $items = array();

    $items['searchdh_node_form'] = array(
        'render element' => 'form',
        #'path' => drupal_get_path('theme', 'nomad') . '/templates',
        'template' => 'searchdh-node-form',
    );
    return $items;
}