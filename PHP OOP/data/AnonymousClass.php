<?php

interface HelloWorld{
    function sayHello(): void;
}

$helloWorld = new class("Farhan") implements HelloWorld{
    public string $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$helloWorld->sayHello();