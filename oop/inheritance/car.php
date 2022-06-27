<?php
/*
 * This example of php inheritance.
 */

# parent class
class car{

    public function bmwColor(){
        return "red, green, blue";
    }
}

# child class, inherit parent class
class bmw extends car{

    public function color(){
        echo $this->bmwColor(); //from parent class
    }
}

# obj create
$obj=new bmw();
$obj->color();
