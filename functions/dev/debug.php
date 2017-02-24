<?php
/*
 * Debug functions
 *
 */

show_admin_bar(false);

function vd($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function dd($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die();
}
