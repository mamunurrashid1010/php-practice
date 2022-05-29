<!DOCTYPE html>
<html>
<head>
    <title> </title>
</head>
<body>

<h3>PHP variable Scope</h3><br>

    <?php

        /**
         * This is example of variable scope
         * Here i show how to use local, global, static variable scope.
         */

        $x=10;  //global scope
        $y=5;  //global scope

        function sum(){
            $a=20;  //local scope
            # variable x not accessible inside function and it's generate error.
            echo $x;

            #print/get local variable data
            echo "<p>Local variable value is: $a </p>";
        }

        function sum2(){
            global $x, $y;
            $result=$x+$y;
            echo "<p>The summation of global variable value is: $result</p>";
        }

        sum();
        sum2();

    ?>

</body>
</html>
