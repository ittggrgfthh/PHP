<?php

require_once "data/Location.php";

use Data\{Location, City, Province, Country};

// $Location = new Location(); //error karena class Location adalah abstract class

$city = new City();
$province = new Province();
$country = new Country();