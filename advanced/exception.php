<?php
    /*
     * This is an example of php exception
     */

    # exception example
    function divide($dividend, $divisor) {
        if($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }

    echo divide(5, 0);
