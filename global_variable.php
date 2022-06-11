<!DOCTYPE html>
<html>
<head>
    <title>PHP Practice</title>
</head>
<body>

<h3>PHP Global Variable</h3><br>

    <?php
        /**
         * This is example of php global variable.
         * global variable are:
            $GLOBALS
            $_SERVER
            $_REQUEST
            $_POST
            $_GET
            $_FILES
            $_ENV
            $_COOKIE
            $_SESSION
         */

        # globals variable example
        $x=100;
        $y=50;
        function sum(){
            $GLOBALS['result']=$GLOBALS['x']+$GLOBALS['y'];
        }
        sum();
        echo $result;


    ?>

</body>
</html>
