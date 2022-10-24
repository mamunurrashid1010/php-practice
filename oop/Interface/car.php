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
        echo "I'm from BMW child class<br>";
    }
}

# implement interface in child class
class toyota implements car{
    public function carInfo(){
        echo "I'm from toyota toyota class<br>";
    }
}

# implement interface in child class
class volvo implements car{
    public function carInfo(){
        echo "I'm from volvo class";
    }
}

# implement interface in child class
class audi implements car{
    public function carInfo(){
        echo "I'm from audi class";
    }
}

$bmwObj=new bmw();
$bmwObj->carInfo();

# create toyota class object.
$toyotaObj=new toyota();
$toyotaObj->carInfo();

# create volvo class object.
$volvoObj=new volvo();
$volvoObj->carInfo();

# create audi class object.
$audiObj=new audi();
$audiObj->carInfo();