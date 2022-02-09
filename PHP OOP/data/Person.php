<?php

class Person{
    const AUTHOR = "Farhan Taqi Abdussalam";

    var string $name;
    var string $address;
    var int $age;

    function __construct(string $name, ?string $address){
        $this->$name = $name;
        $this->$address = $address;
    }

    function sayHello(?string $name){
        if(is_null($name)){
            echo "Hi, my name is $this->name" . "\n";
        }
        else{
            echo "Hi $name, my name is $this->name" . "\n";
        }
    }

    function info(){
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }

    // function __destruct(){
    //     echo "Object person $this->name is destroyed" . PHP_EOL;
    // }
}
