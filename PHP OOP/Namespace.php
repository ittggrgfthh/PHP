<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

$conflict1 = new Data\one\conflict();
$conflict2 = new Data\two\conflict();

echo Helper\APPLICATION . PHP_EOL;
Helper\helpMe();