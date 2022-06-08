<!DOCTYPE html>
<html>
<head>
    <title>PHP Practice</title>
</head>
<body>

<h3>PHP Function</h3><br>

    <?php
        /**
         * This is an example of php user define function.
         */

        # function example
        echo "<h4>user define function example:</h4>";
        function hello(){
            echo "I am from hello function";
        }

        # function example
        function sum($value1,$value2){
            echo "<h4>php function arguments example:</h4>";
            echo "The sum of ".$value1 ." and ".$value2 ." is: ".($value1+$value2) ;
        }

        # function calling
        hello();
        sum(10,20)

    ?>

</body>
</html>
