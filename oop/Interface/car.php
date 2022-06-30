<?php
/*
 * This is example of Interfaces using php.
 * Interface:
    Interfaces allow you to specify what methods a class should implement.
    Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".
    Interfaces are declared with the interface keyword
 */

# interface class
interface car{
    public function carInfo();
}

# implement interface in child class
class bmw implements car{
    public function carInfo(){
        echo "I'm from BMW child class";
    }
}

$bmwObj=new bmw();
$bmwObj->carInfo();