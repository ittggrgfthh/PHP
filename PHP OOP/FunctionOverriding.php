<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Farhan";
$manager->sayHello("Joko");

$vp = new VicePresident();
$vp->name = "Farhan";
$vp->sayHello("Budi");