<?php
/*
 * This is example of static method
 * PHP - Static Methods
    Static methods can be called directly - without creating an instance of the class first.
    Static methods are declared with the static keyword
 */
echo "<h4>PHP- Static Method Example:</h4>";



echo "-------------------------- Example-1 --------------------------------------";
# class
class car{
    public static function carInfo(){
        echo "<br>I'm from static method class<br>";
    }
}
# call static method
car::carInfo();




echo "-------------------------- Example-2 --------------------------------------";
# class
class owner{
    public static function ownerName(){
        echo "<br>Owner: Mamunur Rashid<br>";
    }

    public function __construct(){
        $this->ownerName();
    }
}

# class instance
new owner();