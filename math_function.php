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

    ?>

</body>
</html>
