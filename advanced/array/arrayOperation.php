<?php
/*
 * This is example of array operation using php build-in function.
 */

class arrayOperation{
    public $arr=[10,20,30,40,50];

    function printArray(){
        echo "Array:<br>";
        for($i=0;$i<count($this->arr);$i++){
            echo $this->arr[$i].", ";
        }
        echo "<br><br>";
    }

    function valueCount(){
        echo "Array Length:<br>";
        echo count($this->arr);
        echo "<br><br>";
    }

    function valueAdd($value){
        echo "Array Value Add:<br>";
        echo $value."<br>";
        array_push($this->arr,$value);
        echo "<br><br>";
    }
}

# class instance create
$obj=new arrayOperation();

echo "<h4>Array Operation</h4>";

# array print
$obj->printArray();

# array count value
$obj->valueCount();

# array value add
$obj->valueAdd(60);
$obj->printArray();