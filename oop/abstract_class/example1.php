<?php
/*
 * This is example of php abstract classes.
 * Abstract Class:
    Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
    An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.
    An abstract class or method is defined with the abstract keyword
 */

# abstract parent class
abstract class computer{
    abstract function laptopBrand();
}

# child class
class laptop extends computer{
    function laptopBrand(){
        echo "1.Dell 2.Hp 3.Asus 4.Lenovo 5.Acer";
    }
}

# create object
$laptopObj = new laptop();
echo "Laptop Brand List:<br>";
$laptopObj->laptopBrand();
