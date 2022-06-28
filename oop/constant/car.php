<?php
/*
 * This is example of php constant.
 */

class car{
    const modelNumber="AB12555";
    public static function carInfo(){
        echo "<br>Car Info:<br>";
        echo "BMW, AB12555, dark-blue";
    }
}

echo car::modelNumber;
echo car::carInfo();