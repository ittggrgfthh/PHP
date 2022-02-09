<?php

$matches = [];
$result = (bool) preg_match_all("/farhan|alam|edy/i", "Farhan Taqi Abdussalam", $matches);
 
var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "Dasar lu anjing bangsat");

var_dump($result);

$result = preg_split("/[\s,-]/", "Farhan Taqi,Abdussalam-A12.2020.06476");

var_dump($result);