<?php
/*
 * This is example of array operation using php build-in function.
 * Array operation build in function
    1. count()          :array length count
    2. array_push()     :add element to array
    3. array_pop()      :remove last element to array
    4. array_keys()     :array key get
 */

class arrayOperation{
    public $arr=[10,20,30,40,50];

    # array print
    function printArray(){
        echo "Array:<br>";
        for($i=0;$i<count($this->arr);$i++){
            echo $this->arr[$i].", ";
        }
        echo "<br><br>";
    }

    # array length
    function valueCount(){
        echo "Array Length:<br>";
        echo count($this->arr);
        echo "<br><br>";
    }

    # push/add data to array
    function valueAdd($value){
        echo "Array Value Add:<br>";
        echo $value."<br>";
        array_push($this->arr,$value);
        echo "<br><br>";
    }

    # pop/delete last element of the array
    function lastElementDelete(){
        echo "Array Last Element Delete:<br>";
        $length= count($this->arr);
        echo "Last Element: ".$this->arr[$length-1]."<br>";
        array_pop($this->arr);
        echo "<br>";
    }

    # array key
    function arrayKey(){
        echo "Array Key:<br>";
        var_dump(array_keys($this->arr));
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

# array add new value
$obj->valueAdd(60);
$obj->printArray();

# pop/delete last element of the array
$obj->lastElementDelete();
$obj->printArray();

# array key get
$obj->arrayKey();
