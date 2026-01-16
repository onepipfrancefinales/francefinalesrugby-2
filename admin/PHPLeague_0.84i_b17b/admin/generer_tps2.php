<?php

$time_fin    = microtime();
$time_fin    = explode(' ', $time_fin);
$time_fin    = $time_fin[0] + $time_fin[1];
$time_search = $time_fin - $time_deb;
$TPS         = round($time_search, 3).' '.ADMIN_GRAPH_5;

?>