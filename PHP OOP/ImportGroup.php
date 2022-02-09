<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// akan memakan banyak waktu jika melakukan import harus satu per satu, maka kita dapat melakukan group untuk mempercepat.

use Data\one\{conflict as conflict1, dummy as dump, sample};
use function Helper\{helpMe};

$conflict1 = new conflict1;
$dummy1 = new dump;
$sample = new sample;
