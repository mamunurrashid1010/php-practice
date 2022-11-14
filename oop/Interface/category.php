<?php
/*
 * This is example of Interfaces using php.
 * Interface:
    Interfaces allow you to specify what methods a class should implement.
    Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".
    Interfaces are declared with the interface keyword
 */

# interface class
interface category{
    public function categoryName();
}

# implement interface in child class
class grocery implements category{
    public function categoryName(){
        echo "Grocery category name:<br>";
        echo "1.Daily Needs 2.Fresh Fruits 3.Meat 4.Vegetable 5.Fish<br>";
    }
}

# object create
$groceryObj = new grocery();
$groceryObj->categoryName();