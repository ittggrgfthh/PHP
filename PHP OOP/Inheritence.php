<?php

require_once "data/Manager.php";

$farhan = new manager();
$farhan->name = "Farhan";
$farhan->sayHello("Joko");

$taqi = new VicePresident();
$taqi->name = "Taqi";
$taqi->sayHello("Budi");