<?php

if (isset($_COOKIE['visitCount'])) {
    $visitCount = ++$_COOKIE['visitCount'];
} else {
    $visitCount = 1;
}

setcookie('visitCount', $visitCount, time() + 3600 * 24 * 365); 

if (!isset($_COOKIE['visitTime'])) {
    setcookie('visitTime', time(), time() + 3600 * 24 * 365); 
}

$timeDifference = time() - $_COOKIE['visitTime'];

echo "This page has been refreshed $visitCount times.<br>";
echo "The page was first opened at " . date('H:i:s', $_COOKIE['visitTime']) . ".<br>";
echo "It has been $timeDifference seconds since the page was first opened.";
