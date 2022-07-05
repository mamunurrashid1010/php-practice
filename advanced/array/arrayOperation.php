<?php
/*
 * This is example of array operation using php build-in function.
 */

class arrayOperation{
    public $arr=[10,20,30,40,50];

    function valueCount(){
        echo "Array Length:<br>";
        echo count($this->arr);
        echo "<br><br>";
    }
}

# class instance create
$obj=new arrayOperation();

# array count value
$obj->valueCount();