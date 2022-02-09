<?php

require_once "data/Person.php";

define("APPLICATION", "Belajar PHP OOP"); // penggunaan constant variable di php dasar
const APP_VERSION = "1.0.0"; // cara lain menggunakan constant variable

echo APPLICATION . "\n";
echo APP_VERSION . "\n";

//cara mengakses constant variable didalam class
echo Person::AUTHOR . "\n";

$app = new Person("Farhan", null);
$app->info();