<?php

require_once "Helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Farhan";
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(1,2,3,4,5,6,7,8,9,10);
echo "Result : $result" . PHP_EOL;