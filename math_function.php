<!DOCTYPE html>
<html>
<head>
    <title>PHP Practice</title>
</head>
<body>

<h3>PHP Math Function</h3><br>

    <?php
        /**
         * This is example of php different math function.
            1. sqrt()
            2. round()
         */

        # sqrt function
        echo "<h4>sqrt function:</h4>";
        $number=25;
        echo $number."<br>square root: ".sqrt($number);

        # round function
        echo "<h4>Round function:</h4>";
        echo "<h5>The round() function rounds a floating-point number to its nearest integer:</h5>";
        $number1=0.7;
        $number2=0.4;
        echo $number1."<br>round is: ".round($number1)."<br>";
        echo $number2."<br>round is: ".round($number2);

        # Min, max function
        echo "<h4>min and max function:</h4>";
        $number=[1,5,6,8,10];
        echo "[1,5,6,8,10]";
        echo "<br>min value is: ".min($number)."<br>";
        echo "<br>max value is: ".max($number)."<br>";

    ?>

</body>
</html>
