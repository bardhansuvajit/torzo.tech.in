<?php

class Math {
    public $num1;
    public $num2;

    function sum() {
        return $this->num1 + $this->num2;
    }
}

$obj = new Math();
$obj->name1 = 1;
$obj->name2 = 2;
echo $obj->sum();
// echo $obj->sum(1, 2);
