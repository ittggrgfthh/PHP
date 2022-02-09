<?php

class Student{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample): void{
        $this->sample = $sample;
    }

    public function __clone(){
        unset($this->sample);
    }

    public function __toString(): string{
        return "Student ID : $this->id, Name : $this->name, Value : $this->value";
    }

    public function __invoke(...$argument): void{
        $join = join(", ", $argument);
        echo "Invoke student with argument $join" . PHP_EOL;
    }

    public function __debugInfo(){
        return [
            "Id" => $this->id,
            "Name" => $this->name,
            "Value" => $this->value,
            "Sample" => $this->sample,
            "Author" => "Farhan",
            "Version" => "1.0.0"
        ];
    }
}