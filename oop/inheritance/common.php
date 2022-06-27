<?php
/*
 * This is example of php inheritance.
 */

# parent class
class common{

    public function twoValueSum($a,$b){
        return $a+$b;
    }
    public function twoValueSub($a,$b){
        return $a-$b;
    }
}

# child class inherit parent class
class math extends common{

    public function sum($a,$b){
        echo "Summation ($a+$b): " .$this->twoValueSum($a,$b);
        echo "<br>";
    }
    public function subtraction($a,$b){
        echo "Subtraction ($a-$b): ".$this->twoValueSub($a,$b);
        echo "<br>";
    }
}

$obj=new math();
$obj->sum(10,20);
$obj->subtraction(50,10);