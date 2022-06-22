<?php
    /*
     * This is an example of php exception
     */

    # exception example-1
    function divide($dividend, $divisor) {
        if($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }
    //echo divide(5, 0);

    # exception example-2
    try{
        echo divide(5, 0);
    }catch (Exception $e){
        echo "Unable to divide";
    }
