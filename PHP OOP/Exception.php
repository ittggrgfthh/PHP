<?php

require_once "data/LoginRequest.php";
require_once "exception/ValidationException.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password = "";

try{
    validateLoginRequest($loginRequest);
    echo "VALID" . PHP_EOL;
} 
catch(ValidationException | Exception $exception){
    echo "Validation Error : {$exception->getMessage()}" . PHP_EOL;

    var_dump($exception->getTrace());

    echo $exception->getTraceAsString() . PHP_EOL;
}
finally{
    echo "ERROR ATAU TIDAK, TETAP DI EKSEKUSI!" . PHP_EOL;
}

