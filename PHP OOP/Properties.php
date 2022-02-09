<?php

require_once "data/Person.php";

$Person = new Person();
$Person->name = "Farhan";
$Person->age = "19";
$Person->address = "Semarang";

var_dump($Person);

echo "Name : $Person->name" . "\n";
echo "Address : $Person->address" . "\n";
echo "Age : $Person->age" . "\n";

$Orang = new Person();
$Orang->name = "Taqi";
$Orang->age = "19";
$Orang->address = "SMG";

echo "Name : $Orang->name" . "\n";
echo "Address : $Orang->address" . "\n";
echo "Age : $Orang->age" . "\n";

// error
// $Orang->name = [];