<?php
/*
 * This is example of php class.
 */
class car{
    # Properties
    public $name;
    public $color;

    # Method
    public function setName($name){
        $this->name=$name;
    }

}

    # Object create
    $carObj=new car();

    # set value
    $carObj->setName('Toyota');
    $carObj->color="White";

    # get value
    echo $carObj->name."<br>";
    echo $carObj->color;