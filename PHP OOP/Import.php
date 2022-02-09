<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\one\conflict; //tidak peduli jika namespace berbeda, jika nama class sama, tidak bisa dilakukan import namespace yang lain
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new conflict(); //karena sudah menggunakan use, tidak perlu dilakukan seperti dibawah
$conflict2 = new Data\two\conflict(); //karena nama class sama dengan Data\one, maka harus dilakukan seperti ini.  

helpMe();

echo APPLICATION . PHP_EOL;