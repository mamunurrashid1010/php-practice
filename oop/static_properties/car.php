<?php
/*
 * This is example of static properties and how to use in php.
 * PHP - Static Properties:
    Static properties can be called directly - without creating an instance of a class.
    Static properties are declared with the static keyword
 */

echo "<h4>PHP Static Properties</h4>";


echo "<h5>-------------------------- Example-1 ------------------------------------</h5>";
# class
class car{
    public static $color="Black, gray, Blue";
}

# access static properties
echo car::$color;



echo "<h5>-------------------------- Example-2 ------------------------------------</h5>";

# class
class pi{
    public static $value="3.1416";
    public  $value1="3.1416";
    public function staticValue(){
        echo self::$value;
    }
}

# class object create
$piObj=new pi();
$piObj->staticValue();


echo "<h5>-------------------------- Example-3 ------------------------------------</h5>";

# parent class inheritance
class practice extends pi{
    public function printPIValue(){
        //properties access
        echo parent::$value ."<br>";
        echo $this->value1 ."<br><br>";
        //method access
        $this->staticValue();
        echo "<br>";
        parent::staticValue();
    }
}
# get value method-1
$practiceObj=new practice();
$practiceObj->printPIValue();

echo "<br>". $practiceObj->value1 ."<br>";

# get static value method-2
echo "<br><br>";
echo practice::$value;