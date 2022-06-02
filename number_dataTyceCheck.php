<!DOCTYPE html>
<html>
<head>
    <title>PHP Practice</title>
</head>
<body>

<h3>PHP Number and Check Datatype</h3><br>

    <?php
        /**
         * This is example of php number and different function of dataType check.
         * Data type check function:
            1. is_int()
            2. is_float()
         */

        # integer check
        echo "<h4>Check if the type of a variable is integer:</h4>";
        $number=123;
        echo $number."<br>";
        var_dump(is_int($number));

        # float check
        echo "<h4>Check if the type of a variable is float:</h4>";
        $number=123.55;
        echo $number."<br>";
        var_dump(is_float($number));

        # finite or infinite check
        echo "<h4>Check if the type of a numeric value is finite or infinite:</h4>";
        $number=1.9e411;
        echo $number."<br>";
        var_dump($number);

    ?>

</body>
</html>
