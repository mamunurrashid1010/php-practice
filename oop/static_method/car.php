<?php
/*
 * This is example of static method
 * PHP - Static Methods
    Static methods can be called directly - without creating an instance of the class first.
    Static methods are declared with the static keyword
 */

# class
class car{
    public static function carInfo(){
        echo "I'm from static method class";
    }

}

# call static method
car::carInfo();
