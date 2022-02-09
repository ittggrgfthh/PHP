<?php

namespace Helper;

class MathHelper{
    static public string $name = "MathHelper";

    static public function sum(int ...$number): int{
        $total = 0;
        foreach($number as $number){
            $total += $number;
        }
        return $total;
    }
}