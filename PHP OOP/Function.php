<?php

require_once "data/Person.php";

$farhan = new Person("Farhan", null);
$farhan->name = "Farhan";
$farhan->sayHello("Taqi");

$joko = new Person("Joko", null);
$joko->name = "Joko";
$joko->sayHello(null);