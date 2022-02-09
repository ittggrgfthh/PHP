<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

//untungnya didalam php kita dapat menggunakan alias sehingga dapat mempercepat penggunaan import

use Data\one\conflict as conflict1;
use Data\one\conflict as conflict2;
use function Helper\helpMe as help; //fungsi helper juga bisa menggunakan alias, optional
use const Helper\APPLICATION as APP;

$conflict1 = new conflict1(); //sebagai gantinya kita harus menggunakan nama alias
$conflict2 = new conflict2();  

help();

echo APP . PHP_EOL;