<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Farhan");
var_dump($company);

$company->programmer = new BackendProgrammer("Taqi");
var_dump($company);

$company->programmer = new FrontendProgrammer("Abdussalam");
var_dump($company);

sayHelloProgrammer(new Programmer("Farhan"));
sayHelloProgrammer(new BackendProgrammer("Taqi"));
sayHelloProgrammer(new FrontendProgrammer("Abdussalam"));