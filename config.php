<?php

function active($page)
{
    $pg = basename($_SERVER['PHP_SELF']);

    if ($page == 'index' && $pg == null) {
        echo 'active';
    }
    echo ($page . '.php' == $pg) ? 'active' : '';
}

function date_show($date)
{
    $data_fmt = explode(' ', $date);
    $date     = explode('-', $data_fmt[0]);
    $time     = $data_fmt[1];
    return $date[2] . '/' . $date[1] . '/' . $date[0];
}
