<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Farhan";
$student1->value = "100";
$student1->setSample("XXX");

var_dump($student1);

$student2 = clone $student1;
var_dump($student2);

// cara manual
// $student2 = new Student();
// $student2->id = "1";
// $student2->name = "Farhan";
// $student2->value = "100";