<!DOCTYPE html>
<html>
<head>
    <title>PHP Practice</title>
</head>
<body>

<h3>PHP Operators</h3><br>

    <?php
        /**
         * This is example of php operators and its uses.
         * php support different operators, which is
            Arithmetic operators
            Assignment operators
            Comparison operators
            Increment/Decrement operators
            Logical operators
            String operators
            Array operators
            Conditional assignment operators
         */

        # Arithmetic operators example
        echo "<h4>Arithmetic operators example:</h4>";
        echo "<h5>Addition:</h5>";
        $number1=10;
        $number2=20;
        echo "The sum of " .$number1 ." and ".$number2 ." is: " .($number1+$number2);

        echo "<h5>Subtraction:</h5>";
        $number1=20;
        $number2=10;
        echo "The Subtraction of " .$number1 ." and ".$number2 ." is: " .($number1-$number2);

        echo "<h5>Multiplication:</h5>";
        $number1=20;
        $number2=10;
        echo "The Multiplication of " .$number1 ." and ".$number2 ." is: " .($number1*$number2);

        echo "<h5>Division:</h5>";
        $number1=20;
        $number2=10;
        echo "The Division of " .$number1 ." and ".$number2 ." is: " .($number1/$number2);

        echo "<h5>Modulus:</h5>";
        $number1=20;
        $number2=10;
        echo "The Modulus of " .$number1 ." and ".$number2 ." is: " .($number1%$number2);

        echo "<h5>Exponentiation:</h5>";
        $number1=10;
        $number2=2;
        echo "The Exponentiation of " .$number1 ." and ".$number2 ." is: " .($number1**$number2);


        # Comparison Operators example
        echo "<h4>Comparison operators example:</h4>";
        echo "<h5>Equal(==):</h5>";
        $number1=10;
        $number2=10;
        echo $number1 ." and ".$number2." are equal: ";
        var_dump($number1==$number2);

        echo "<h5>Identical(===):</h5>";
        $number1=10;
        $number2=10.5;
        echo $number1 ." and ".$number2." are equal and same data type: ";
        var_dump($number1===$number2);

        echo "<h5>Not equal(!=):</h5>";
        $number1=10;
        $number2=20;
        echo $number1 ." and ".$number2." are not equal: ";
        var_dump($number1!=$number2);

        echo "<h5>Greater than(>):</h5>";
        $number1=10;
        $number2=20;
        echo $number1 ." is greater than  ".$number2. " : ";
        var_dump($number1>$number2);

        echo "<h5>Less than(<):</h5>";
        $number1=10;
        $number2=20;
        echo $number1 ." is less than  ".$number2. " : ";
        var_dump($number1<$number2);

        echo "<h5>Greater than or equal to(>=):</h5>";
        $number1=10;
        $number2=20;
        echo $number1 ." Greater than or equal to  ".$number2. " : ";
        var_dump($number1>=$number2);

        echo "<h5>Less than or equal to(<=):</h5>";
        $number1=10;
        $number2=20;
        echo $number1 ." Less than or equal to  ".$number2. " : ";
        var_dump($number1<=$number2)

    ?>

</body>
</html>
