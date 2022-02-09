<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayGoodBye, SayHello};

$person = new Person();
$person->goodBye("Farhan");
$person->hello("Taqi");

$person->name = "Farhan";
var_dump($person);

$person->run();